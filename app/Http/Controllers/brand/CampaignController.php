<?php

namespace App\Http\Controllers\brand;

use App\Models\Campaign;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Apply;
use App\Models\BrandCategory;
use App\Models\BrandPackage;
use App\Models\ContactInfluencer;
use App\Models\BrandPackageDetail;
use App\Models\BrandPoints;
use App\Models\BrandWithCategory;
use App\Models\CampaignInfluencerActivityStep;
use App\Models\CampaignStep;
use App\Models\CardsModels;
use App\Models\Category;
use App\Models\CategoryInfluencer;
use App\Models\CheckApply;
use App\Models\IMPGPayment;
use App\Models\InfluencerPortfolio;
use App\Models\InfluencerProfile;
use App\Models\Link;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CampaignController extends Controller
{
    public function index()
    {
        try {
            $userId = Auth::user()->id;
            $campaign = Campaign::where('userId', '=', $userId)->orderBy('id', 'DESC')->get();
            $brandCategory = BrandCategory::all();
            $brandOfCategory = BrandWithCategory::where('brandId', '=', $userId)->with('brandCategory')->first();
            if ($brandOfCategory) {

                $influencer = User::whereHas('roles', function ($q) {
                    $q->where('name', 'Influencer');
                })->whereHas('influencer', function ($q) use ($brandOfCategory) {
                    $q->whereHas('category', function ($q) use ($brandOfCategory) {
                        $q->where('name', 'LIKE', '%' .  $brandOfCategory->brandCategory->categoryName . '%');
                    });
                })
                    ->with(['influencer', 'influencer.category'])
                    ->get();
                return view('brand.campaign.index', \compact('campaign', 'influencer'));
            } else {
                return view('brand.campaign.index', \compact('campaign'));
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        $user = Auth::user();

        if ($user->package != "FREE") {
            try {

                $brandPackageSum = BrandPoints::where('userId', '=', $user->id)->sum('points');
                if ($brandPackageSum > 0) {
                    $brandPackage = BrandPoints::where('userId', '=', $user->id)->first();
                    $package = BrandPackage::where('points', $brandPackage->points)->first();

                    $packageDetailData = BrandPackageDetail::where('brandPackageId', $package->id)->first();
                    $activity = Activity::where('id', $packageDetailData->activityId)->first();
                    $point = BrandPackageDetail::where('brandPackageId', $package->id)
                        ->where('activityId', $activity->id)
                        ->first('points');
                    return view('brand.campaign.create', \compact('point'));
                } else {
                    return redirect()->back()->with('warning', 'You dont have a enough points to create a campaign please renew your package <a href="' . route('pricing.index') . '">');
                }
            } catch (\Throwable $th) {
                throw $th;
            }
        } else {
            return redirect()->back()->with('warnings', 'You are not a BrandBeans Premium User. Unlock premium benefits for your campaign success 🚀 Please  to Purchase Premium Package..');
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'detail' => 'required',
            'price' => 'required|numeric',
            'photo' => 'required',
            // 'rule' => 'required',
            'eligibleCriteria' => 'numeric',
            'minTargetAgeGroup' => 'numeric|gt:0',
            'maxTargetAgeGroup' => 'numeric|gt:minTargetAgeGroup',
            'startDate' => 'date|after:today',
            'endDate' => 'date|after:today',
            'applyForLastDate' => 'date:after:today',
            // 'task' => 'required',
            // 'maxApplication' => 'required',
        ]);

        try {
            $userId = Auth::user()->id;
            $email = Auth::user()->email;
            $campaign = new Campaign();
            $campaign->title = $request->title;
            $campaign->userId = $userId;
            $campaign->detail = $request->detail;
            $campaign->price = $request->price;
            $campaign->photo = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('campaignPhoto'), $campaign->photo);
            $campaign->rule = $request->rule;
            $campaign->eligibleCriteria = $request->eligibleCriteria;
            $campaign->targetGender = $request->targetGender;
            $campaign->targetAgeGroup = $request->minTargetAgeGroup . "-" . $request->maxTargetAgeGroup;
            $campaign->startDate = $request->startDate;
            $campaign->endDate = $request->endDate;
            $campaign->applyForLastDate = $request->applyForLastDate;
            $campaign->task = $request->task;
            $campaign->maxApplication = $request->maxApplication;
            $campaign->status = "Active";


            $brandPackageSum = BrandPoints::where('userId', '=', $userId)->sum('points');
            $brandPackage = BrandPoints::where('userId', '=', $userId)->first();

            if ($brandPackageSum > 0) {
                $package = BrandPackage::where('points', $brandPackage->points)->first();

                if ($package) {
                    $packageDetailData = BrandPackageDetail::where('brandPackageId', $package->id)->first();
                    $activity = Activity::where('id', $packageDetailData->activityId)->first();
                    $packageDetail = BrandPackageDetail::where('brandPackageId', $package->id)
                        ->where('activityId', $activity->id)
                        ->first();

                    if ($packageDetail && $packageDetail->points < $brandPackageSum) {
                        // Assuming $campaign is defined somewhere in your code
                        $campaign->save();

                        $point = new BrandPoints();
                        $point->userId = $userId;
                        $point->email = $email;
                        $point->points = '-' . $packageDetail->points;
                        $point->remark = 'Create Campaign';
                        $point->save();

                        return redirect('brand/campaign/index')->with('success', 'Campaign Added Successfully..');
                    } else {
                        return redirect('brand/pricing')->with('warning', "You don't have enough points to create a campaign. Please purchase or renew your package.");
                    }
                }
            }

            return redirect('brand/pricing')->with('warning', "You don't have enough points to create a campaign. Please purchase or renew your package.");
        } catch (\Throwable $th) {
            // throw $th;

        }
    }

    // Appliers List and Add details After Approval
    public function appliers(Request $request)
    {
        try {
            $campaignId = Auth::user()->id;

            $appliers =    DB::table('applies')
                ->crossJoin('campaigns')
                ->crossJoin('users')
                ->select('campaigns.title', 'applies.*', 'users.name')
                ->where('applies.campaignId', '=', DB::raw('campaigns.id'))
                ->where('campaigns.userId', '=',  $campaignId)
                ->where('applies.userId', '=', DB::raw('users.id'))
                ->get();

            $counter = count($appliers);

            $filer = $request->filter;

            if ($filer == "Approved") {
                $appliers =    DB::table('applies')
                    ->crossJoin('campaigns')
                    ->crossJoin('users')
                    ->select('campaigns.title', 'applies.*', 'users.name')
                    ->where('applies.campaignId', '=', DB::raw('campaigns.id'))
                    ->where('campaigns.userId', '=',  $campaignId)
                    ->where('applies.status', '=', "Approved")
                    ->where('applies.userId', '=', DB::raw('users.id'))
                    ->get();
            } else if ($filer == "On Hold") {
                $appliers =    DB::table('applies')
                    ->crossJoin('campaigns')
                    ->crossJoin('users')
                    ->select('campaigns.title', 'applies.*', 'users.name')
                    ->where('applies.campaignId', '=', DB::raw('campaigns.id'))
                    ->where('campaigns.userId', '=',  $campaignId)
                    ->where('applies.status', '=', "On Hold")
                    ->where('applies.userId', '=', DB::raw('users.id'))
                    ->get();
            } else if ($filer == "Rejected") {
                $appliers =    DB::table('applies')
                    ->crossJoin('campaigns')
                    ->crossJoin('users')
                    ->select('campaigns.title', 'applies.*', 'users.name')
                    ->where('applies.campaignId', '=', DB::raw('campaigns.id'))
                    ->where('campaigns.userId', '=',  $campaignId)
                    ->where('applies.status', '=', "Rejected")
                    ->where('applies.userId', '=', DB::raw('users.id'))
                    ->get();
            } else if ($filer == "Applied") {
                $appliers =    DB::table('applies')
                    ->crossJoin('campaigns')
                    ->crossJoin('users')
                    ->select('campaigns.title', 'applies.*', 'users.name')
                    ->where('applies.campaignId', '=', DB::raw('campaigns.id'))
                    ->where('campaigns.userId', '=',  $campaignId)
                    ->where('applies.status', '=', "Applied")
                    ->where('applies.userId', '=', DB::raw('users.id'))
                    ->get();
            }
            return view('brand.appliers.index', \compact('appliers', 'counter'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    // appliers status management Start

    public function influencerApproval($campaignId, $userId, Request $request)
    {
        try {
            $apply = Apply::where('campaignId', '=', $campaignId)
                ->where('userId', '=', $userId)
                ->first();
            $apply->status = "Approved";
            $apply->save();
            return redirect('brand/campaign/appliers')->with('success', 'Status Updated Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function influencerOnHold($campaignId, $userId, Request $request)
    {
        try {
            $apply = Apply::where('campaignId', '=', $campaignId)
                ->where('userId', '=', $userId)
                ->first();
            $apply->status = "On Hold";
            $apply->save();
            return redirect('brand/campaign/appliers')->with('success', 'Status Updated Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function influencerReject($campaignId, $userId, Request $request)
    {
        try {
            $apply = Apply::where('campaignId', '=', $campaignId)
                ->where('userId', '=', $userId)
                ->first();
            $apply->status = "Rejected";
            $apply->save();
            return redirect('brand/campaign/appliers')->with('success', 'Status Updated Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function influencerDetail($campaignId, $userId)
    {
        try {
            $profile = InfluencerProfile::with('profile')->with('category')->where('userId', '=', $userId)->first();
            $portfolio = InfluencerPortfolio::where('userId', '=', $userId)->get();
            return view('brand.appliers.detail', \compact('profile', 'portfolio'));
            // return redirect('brand/campaign/appliers')->with('success', 'Status Updated Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function influencerPortfolio($campaignId, $userId)
    {
        try {
            $postImage = CheckApply::where('campaignId', '=', $campaignId)->where('userId', '=', $userId)->where('fileType', '=', 'Photo')->get();
            $postVideo = CheckApply::where('campaignId', '=', $campaignId)->where('userId', '=', $userId)->where('fileType', '=', 'Video')->get();
            $steps  = CampaignStep::where('campaignId', '=', $campaignId)->get();
            $followedStep = CampaignInfluencerActivityStep::all();
            return view('brand.appliers.portfolio', \compact('postImage', 'postVideo', 'steps', 'followedStep'));
            // return redirect('brand/campaign/appliers')->with('success', 'Status Updated Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    // influencer content management


    public function influencerContentApproval($campaignId, $userId, $id, Request $request)
    {
        // return $id;
        // return $userId;
        // return $campaignId;
        try {
            $apply = CheckApply::where('campaignId', '=', $campaignId)
                ->where('userId', '=', $userId)
                ->where('id', '=', $id)
                ->first();
            $apply->status = "Approved";
            $apply->save();
            return redirect()->back()->with('success', 'Status Updated Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function influencerContentOnHold($campaignId, $userId, $id, Request $request)
    {
        try {
            $apply = CheckApply::where('campaignId', '=', $campaignId)
                ->where('userId', '=', $userId)
                ->where('id', '=', $id)
                ->first();
            $apply->status = "Pending";
            $apply->save();
            return redirect()->back()->with('success', 'Status Updated Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function influencerContentReject(Request $request)
    {
        try {
            $campaignId = $request->campaignId;
            $userId = $request->userId;
            $id = $request->imageId;

            $apply = CheckApply::where('campaignId', '=', $campaignId)
                ->where('userId', '=', $userId)
                ->where('id', '=', $id)
                ->first();
            $apply->status = "Rejected";
            $apply->remark = $request->remark;
            $apply->save();
            return redirect()->back()->with('success', 'Status Updated Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    // end section

    // end Management

    // End


    public function edit($id)
    {
        try {
            $campaign = Campaign::find($id);
            return view('brand.campaign.edit', \compact('campaign'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'rule' => 'required',
            'eligibleCriteria' => 'required',
            'targetGender' => 'required',
            'targetAgeGroup' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'applyForLastDate' => 'required',
            'task' => 'required',
            'maxApplication' => 'required',
        ]);

        try {
            $id = $request->campaignId;

            $campaign = Campaign::find($id);
            $campaign->title = $request->title;
            $campaign->detail = $request->detail;
            $campaign->price = $request->price;
            if ($request->photo) {
                $campaign->photo = time() . '.' . $request->photo->extension();
                $request->photo->move(public_path('campaignPhoto'), $campaign->photo);
            }
            $campaign->rule = $request->rule;
            $campaign->eligibleCriteria = $request->eligibleCriteria;
            $campaign->targetGender = $request->targetGender;
            $campaign->targetAgeGroup = $request->targetAgeGroup;
            $campaign->startDate = $request->startDate;
            $campaign->endDate = $request->endDate;
            $campaign->applyForLastDate = $request->applyForLastDate;
            $campaign->task = $request->task;
            $campaign->maxApplication = $request->maxApplication;
            $campaign->status = "Active";
            $campaign->save();
            return redirect('brand/campaign/index')->with('success', 'Campaign Updated Successfully..');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete($id)
    {
        try {
            Campaign::find($id)->delete();
            return redirect('brand/campaign/index')->with('success', 'Campaign Deleted Successfully..');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function RegisterBrand()
    {
        try {
            return view('new_brand');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function RegisterBrandStore(Request $request)
    {
        try {
            $mobileno = $request->mobileno;
            $email = $request->email;
            $usercount = User::where('mobileno', '=', $mobileno)->get()->count();
            $useremailcount = User::where('email', '=', $email)->get()->count();
            if ($useremailcount > 0) {

                $user = User::where('email', '=', $email)->first();
                $userId  = $user->id;
                $userData = User::find($userId);
                $userData->mobileno = $mobileno;
                $userData->save();
                if ($usercount > 0) {
                    $user = User::where('mobileno', '=', $mobileno)->first();

                    $userData = User::find($userId);
                    $userData->mobileno = $mobileno;
                    $userData->assignRole(['Brand', 'User']);
                    $userData->save();
                    Auth::login($userData);
                    return redirect('dashboard');
                }
                Auth::login($userData);
                return redirect('dashboard');
            } else {
                $this->validate($request, [
                    'name' => 'required',
                    'username' => ['required', 'string', 'max:255'],
                    'email' => 'required|email',
                    'mobileno' => 'required',
                    'password' => 'required|same:confirm-password',
                ]);

                $user = new User();
                $user->name = $request->name;
                $user->username = $request->username;
                $user->email = $request->email;
                $user->mobileno = $request->mobileno;
                $user->password = Hash::make($request->password);
                $user->assignRole(['Brand', 'User']);
                $user->package = "FREE";
                $user->save();


                $category = Category::where('name', '=', 'Individual')->first();
                $card = new CardsModels();
                $card->name = $user->name;
                $card->user_id = $user->id;
                $card->category = $category->id;
                $card->save();

                $payment = new Payment();
                $payment->card_id = $card->id;
                $payment->save();

                $links = new Link();
                $links->card_id  = $card->id;
                $links->phone1  = $user->mobileno;
                $links->save();

                Auth::login($user);
                return redirect('dashboard');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function influencerList(Request $request)
    {
        $category = CategoryInfluencer::all();

        $influencer = User::whereHas('roles', function ($q) {
            $q->where('name', 'Influencer');
        })->with('card')->whereHas('influencer');

        $categoryName = $request->category;
        // return dd($categoryName);
        if ($categoryName) {
            $influencer = User::whereHas('roles', function ($q) {
                $q->where('name', 'Influencer');
            })->with('card')->whereHas('influencer', function ($q) use ($categoryName) {
                $q->whereJsonContains('categoryId', $categoryName);
            });
        }

        $influencer = $influencer->get();

        return view('brand.influencerList', compact('influencer', 'category'));
    }
    public function influencerProfile($id, $userId)
    {
        // for Influencer
        $influencer = InfluencerProfile::where('userId', $id)->whereHas('profile')->first();

        $seenStatus = ContactInfluencer::where('userId', $userId)
            ->where('influencerId', $id)
            ->count();
        return view('brand.influencerProfileView', compact('influencer', 'seenStatus'));
    }

    public function influencerContactPoint(Request $request)
    {
        $userId = $request->id;
        $email = Auth::user()->email;
        $influencerId = $request->influencerId;

        $seenStatus = ContactInfluencer::where('userId', $userId)
            ->where('influencerId', $influencerId)
            ->first();

        if (!$seenStatus) {

            $brandPackageSum = BrandPoints::where('userId', '=', $userId)->sum('points');
            $brandPackage = BrandPoints::where('userId', '=', $userId)->first();

            if ($brandPackageSum > 0) {

                $package = BrandPackage::where('points', $brandPackage->points)->first();

                if ($package) {
                    $packageDetailData = BrandPackageDetail::where('brandPackageId', $package->id)->where('details', 'LIKE', '%contact influencer%')->first();
                    $activity = Activity::where('id', $packageDetailData->activityId)->first();
                    $packageDetail = BrandPackageDetail::where('brandPackageId', $package->id)
                        ->where('activityId', $activity->id)
                        ->first();

                    if ($packageDetail && $packageDetail->points < $brandPackageSum) {

                        $point = new BrandPoints();
                        $point->userId = $userId;
                        $point->email = $email;
                        $point->points = '-' . $packageDetail->points;
                        $point->remark = 'Contact Influencer';
                        $point->save();

                        $influencerSeen = new ContactInfluencer();
                        $influencerSeen->userId = $userId;
                        $influencerSeen->influencerId = $influencerId;
                        $influencerSeen->status  = "Seen";
                        $influencerSeen->save();

                        $response = [
                            'message' => 'Success',
                        ];
                        //             // return redirect('brand/campaign/index')->with('success', 'Campaign Added Successfully..');
                    } else {
                        $response = [
                            'message' => 'Not Success',
                        ];
                        // return redirect('brand/pricing')->with('warning', "You don't have enough points to create a campaign. Please purchase or renew your package.");
                    }
                }
            } else {
                return redirect('brand/pricing')->with('warning', "You don't have enough points to create a campaign. Please purchase or renew your package.");
            }
        } else {
            return redirect('brand/pricing')->with('warning', "You don't have enough points to create a campaign. Please purchase or renew your package.");
        }

        return response()->json($response);
    }


    public function brandPointLog(Request $request)
    {
        $perPage = $request->perPage;
        $brandId = Auth::user()->id;
        $brandPoints = BrandPoints::where('userId', $brandId)->orderBy('id', 'desc')->paginate($perPage);
        $sum = BrandPoints::where('userId', $brandId)->sum('points');
        return view('brand.pointLog', compact('brandPoints', 'sum'));
    }
}
