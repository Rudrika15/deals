<?php

namespace App\Http\Controllers\designer;

use App\Http\Controllers\Controller;
use App\Models\CardsModels;
use App\Models\Category;
use App\Models\Design;
use App\Models\Link;
use App\Models\Media;
use App\Models\Payment;
use App\Models\User;
use App\Models\Writerslogan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;
use Illuminate\Support\Facades\Hash;

class DesignController extends Controller
{
    public function index()
    {

        try {
            $userId = Auth::user()->id;

            // $writer = Writerslogan::join('admincategories', 'admincategories.id', '=', 'writerslogans.categoryId')
            //     ->where('writerslogans.status', '=', "Approved")
            //     ->get(['writerslogans.*', 'admincategories.name as categoryName']);

            $writers = Writerslogan::with('category')
                ->where('status', '=', "Approved")
                ->orderBy('id', 'DESC')
                ->get();

            $slugCount =  Design::where('userId', '=', $userId)
                ->get();

            return view('designer.design.index', \compact('writers', 'slugCount'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create($slugId, $category)
    {
        // return $category;
        try {
            return view('designer.design.create', \compact('slugId', 'category'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'mediaType' => 'required',
            'category' => 'required',
            'slugId' => 'required',
            'title' => 'required',
            'sourcePath' => 'required',
            'previewPath' => 'required',
        ]);

        try {
            $slugId = $request->slugId;
            $category = $request->category;
            $userId = Auth::user()->id;

            $design = new Design();
            $design->userId = $userId;
            $design->mediaType = $request->mediaType;
            $design->category = $category;
            $design->slugId = $slugId;
            $design->title = $request->title;

            $media = Design::where('category', '=', $category)->get();

            $number =  $media->max('sequence');
            $sequence =  $number + 1;
            $design->sequence = $sequence;

            $image = $request->sourcePath;
            $design->sourcePath = time() . '.' . $request->sourcePath->extension();
            $request->sourcePath->move(public_path('designsourceimg'), $design->sourcePath);
            $design->previewPath = $request->previewPath;
            $image = $request->previewPath;
            $design->previewPath = time() . '.' . $request->previewPath->extension();
            $request->previewPath->move(public_path('designpreviewpath'), $design->previewPath);
            $design->isPremium = 'no';
            $design->status = 'Pending';
            $design->save();

            return redirect('design/show')->with('success', 'Design Created Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show()
    {
        try {
            $userId = Auth::user()->id;
            $design = Design::join('admincategories', 'admincategories.id', '=', 'designs.category')
                ->join('writerslogans', 'writerslogans.id', '=', 'designs.slugId')
                ->where('designs.userId', '=',  $userId)
                ->get(['designs.*', 'admincategories.name as categoryName', 'writerslogans.title as slugName']);
            return view('designer.design.show', \compact('design'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit($id)
    {
        try {
            $design = Design::find($id);
            return view('designer.design.edit', \compact('design'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'mediaType' => 'required',
            'title' => 'required',
            'sequence' => 'required',
        ]);

        try {
            $id = $request->designId;
            $design = Design::find($id);
            $design->mediaType = $request->mediaType;
            $design->title = $request->title;
            $design->sequence = $request->sequence;
            if ($request->sourcePath) {
                $image = $request->sourcePath;
                $design->sourcePath = time() . '.' . $request->sourcePath->extension();
                $request->sourcePath->move(public_path('designsourceimg'), $design->sourcePath);
                $design->previewPath = $request->previewPath;
            }
            if ($request->sourcePath) {
                $image = $request->previewPath;
                $design->previewPath = time() . '.' . $request->previewPath->extension();
                $request->previewPath->move(public_path('designpreviewpath'), $design->previewPath);
            }
            $design->isPremium = 'no';
            $design->status = 'Pending';
            $design->save();

            return redirect('design/show')->with('success', 'Design Created Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy($id)
    {
        try {
            $design = Design::find($id);
            $design->delete();
            return redirect('design/show')->with('success', 'Design Deleted Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function adminslogan(Request $request)
    {
        try {
            $category = Category::all();
            $type = $request->type;
            $catName = $request->category;
            $userName = $request->userName;
            if (isset($userName) && isset($catName)) {
                $writer = Writerslogan::join('admincategories', 'admincategories.id', '=', 'writerslogans.categoryId')
                    ->join('users', 'users.id', '=', 'writerslogans.userId')
                    ->where('users.name', 'like', '%' . $userName . '%')
                    ->where('admincategories.name', 'like', '%' . $catName . '%')
                    ->orderBy('id', 'DESC')
                    ->get(['writerslogans.*', 'admincategories.name as categoryName', 'users.name as userName']);
            } else if ($type == 'Approved') {
                $writer = Writerslogan::join('admincategories', 'admincategories.id', '=', 'writerslogans.categoryId')
                    ->join('users', 'users.id', '=', 'writerslogans.userId')
                    ->where('writerslogans.status', '=', 'Approved')
                    ->orderBy('id', 'DESC')
                    ->get(['writerslogans.*', 'admincategories.name as categoryName', 'users.name as userName']);
            } else if ($type == 'Rejected') {
                $writer = Writerslogan::join('admincategories', 'admincategories.id', '=', 'writerslogans.categoryId')
                    ->join('users', 'users.id', '=', 'writerslogans.userId')
                    ->where('writerslogans.status', '=', 'Rejected')
                    ->orderBy('id', 'DESC')
                    ->get(['writerslogans.*', 'admincategories.name as categoryName', 'users.name as userName']);
            } else if (isset($userName)) {
                $writer = Writerslogan::join('admincategories', 'admincategories.id', '=', 'writerslogans.categoryId')
                    ->join('users', 'users.id', '=', 'writerslogans.userId')
                    ->where('users.name', 'like', '%' . $userName . '%')
                    ->orderBy('id', 'DESC')
                    ->get(['writerslogans.*', 'admincategories.name as categoryName', 'users.name as userName']);
            } else if (isset($catName)) {
                $writer = Writerslogan::join('admincategories', 'admincategories.id', '=', 'writerslogans.categoryId')
                    ->join('users', 'users.id', '=', 'writerslogans.userId')
                    ->where('admincategories.name', 'like', '%' . $catName . '%')
                    ->orderBy('id', 'DESC')
                    ->get(['writerslogans.*', 'admincategories.name as categoryName', 'users.name as userName']);
            } else {
                $writer = Writerslogan::join('admincategories', 'admincategories.id', '=', 'writerslogans.categoryId')
                    ->join('users', 'users.id', '=', 'writerslogans.userId')
                    ->where('writerslogans.status', '=', 'Pending')
                    ->orderBy('id', 'DESC')
                    ->get(['writerslogans.*', 'admincategories.name as categoryName', 'users.name as userName']);
            }

            return view('admindesign.slogan', \compact('writer', 'category'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function changeSloganDate(Request $request)
    {
        $id = $request->sloganId;
        $date = $request->endDate;

        $writer = Writerslogan::find($id);
        $writer->endDate = $date;
        $writer->save();
        return redirect()->back()->with('success', 'End date update Successfully');
    }

    public function approve(Request $request)
    {
        try {
            $approve = $request->Approve;
            $reject = $request->Reject;
            if ($approve) {
                $id = $request->slugId;
                $slug = Writerslogan::find($id);
                $slug->status = "Approved";
                $slug->save();
                return \redirect('adminslogan/adminslogan')->with('success', 'Slogan Approve');
            } else {
                $id = $request->slugId;
                $slug = Writerslogan::find($id);
                $slug->status = "Rejected";
                $slug->save();
                return \redirect('adminslogan/adminslogan')->with('success', 'Slogan Reject');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function admindesign(Request $request)
    {
        try {
            $category = Category::all();
            $type = $request->type;
            $catName = $request->category;
            $userName = $request->userName;
            if (isset($userName) && isset($catName)) {
                $design = Design::join('admincategories', 'admincategories.id', '=', 'designs.category')
                    ->join('writerslogans', 'writerslogans.id', '=', 'designs.slugId')
                    ->join('users', 'users.id', '=', 'designs.userId')
                    ->where('users.name', 'like', '%' . $userName . '%')
                    ->where('admincategories.name', 'like', '%' . $catName . '%')
                    ->get(['designs.*', 'admincategories.name as categoryName', 'writerslogans.title as slugName', 'users.name as userName']);
            } else if (isset($userName)) {
                $design = Design::join('admincategories', 'admincategories.id', '=', 'designs.category')
                    ->join('writerslogans', 'writerslogans.id', '=', 'designs.slugId')
                    ->join('users', 'users.id', '=', 'designs.userId')
                    ->where('users.name', 'like', '%' . $userName . '%')
                    ->get(['designs.*', 'admincategories.name as categoryName', 'writerslogans.title as slugName', 'users.name as userName']);
            } else if (isset($catName)) {
                $design = Design::join('admincategories', 'admincategories.id', '=', 'designs.category')
                    ->join('writerslogans', 'writerslogans.id', '=', 'designs.slugId')
                    ->join('users', 'users.id', '=', 'designs.userId')
                    ->where('admincategories.name', 'like', '%' . $catName . '%')
                    ->get(['designs.*', 'admincategories.name as categoryName', 'writerslogans.title as slugName', 'users.name as userName']);
            } else {
                $design = Design::join('admincategories', 'admincategories.id', '=', 'designs.category')
                    ->join('writerslogans', 'writerslogans.id', '=', 'designs.slugId')
                    ->join('users', 'users.id', '=', 'designs.userId')

                    ->get(['designs.*', 'admincategories.name as categoryName', 'writerslogans.title as slugName', 'users.name as userName']);
            }

            if ($type == 'Approved') {
                $design = Design::join('admincategories', 'admincategories.id', '=', 'designs.category')
                    ->join('writerslogans', 'writerslogans.id', '=', 'designs.slugId')
                    ->join('users', 'users.id', '=', 'designs.userId')
                    ->where('designs.status', '=', 'Approved')
                    ->get(['designs.*', 'admincategories.name as categoryName', 'writerslogans.title as slugName', 'users.name as userName']);
            } else if ($type == 'Rejected') {
                $design = Design::join('admincategories', 'admincategories.id', '=', 'designs.category')
                    ->join('writerslogans', 'writerslogans.id', '=', 'designs.slugId')
                    ->join('users', 'users.id', '=', 'designs.userId')
                    ->where('designs.status', '=', 'Rejected')
                    ->get(['designs.*', 'admincategories.name as categoryName', 'writerslogans.title as slugName', 'users.name as userName']);
            } else {
                $design = Design::join('admincategories', 'admincategories.id', '=', 'designs.category')
                    ->join('writerslogans', 'writerslogans.id', '=', 'designs.slugId')
                    ->join('users', 'users.id', '=', 'designs.userId')
                    ->where('designs.status', '=', 'Pending')
                    ->get(['designs.*', 'admincategories.name as categoryName', 'writerslogans.title as slugName', 'users.name as userName']);
            }
            return view('admindesign.design', \compact('design', 'category'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function designapprove($id)
    {
        try {
            // $data = Design::find($id);
            $data = Design::join('users', 'users.id', '=', 'designs.userId')
                ->join('admincategories', 'admincategories.id', '=', 'designs.category')
                ->join('writerslogans', 'writerslogans.id', '=', 'designs.slugId')
                ->where('designs.id', '=', $id)
                ->first([
                    'designs.*',
                    'users.name as UserName',
                    'admincategories.name as CategoryName',
                    'writerslogans.title as Slogan',
                ]);
            return view('admindesign.designapprove', compact('data'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function designapproveCode(Request $request)
    {
        try {
            $id = $request->designId;
            $design  = Design::find($id);
            $design->status = "Approved";
            $design->save();

            $media = new Media();
            $media->mediaType = $design->mediaType;
            $media->category = $design->category;

            $sourcesourcePath = public_path('designsourceimg/' . $design->sourcePath);
            $sourcedestinationPath = public_path('mediasourceimg/' . $design->sourcePath);

            $sourcePath = public_path('designpreviewpath/' . $design->previewPath);
            $destinationPath = public_path('mediapreviewimg/' . $design->previewPath);

            File::copy($sourcesourcePath, $sourcedestinationPath);
            File::copy($sourcePath, $destinationPath);

            $media->sourcePath =  $design->sourcePath;
            $media->previewPath = $design->previewPath;

            $media->isPremium = $design->isPremium;
            $media->title = $design->title;
            $media->sequence = $design->sequence;
            if ($request->type == "isFestival") {
                $this->validate($request, [
                    'startDate' => 'required',
                    'endDate' => 'required',
                ]);
                $media->startDate = $request->startDate;
                $media->endDate = $request->endDate;
            } elseif ($request->type == "today") {
                $this->validate($request, [
                    'startDate1' => 'required',
                    'endDate1' => 'required',
                ]);
                $media->startDate = $request->startDate1;
                $media->endDate = $request->endDate1;
            } else {
                $date = Carbon::now()->toDateString();
                $media->startDate = $date;
                $media->endDate = '2099-12-31';
            }
            $media->save();
            return redirect('admindesign/admindesign')->with('success', 'Design Approved Successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function reject(Request $request)
    {
        try {
            $reject = $request->Reject;
            if ($reject) {
                $id = $request->designId;
                $slug = Design::find($id);
                $slug->status = "Rejected";
                $slug->save();
                return \redirect('admindesign/admindesign')->with('success', 'Slogan Reject');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function RegisterDesigner()
    {
        try {
            return view('new_designer');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function RegisterDesignerstore(Request $request)
    {
        try {
            $mobileno = $request->mobileno;
            $usercount = User::where('mobileno', '=', $mobileno)->get()->count();
            if ($usercount > 0) {
                $user = User::where('mobileno', '=', $mobileno)->first();
                $userId  = $user->id;
                $userData = User::find($userId);
                $userData->assignRole(['Designer', 'User']);
                $userData->save();
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
                $user->assignRole(['Designer', 'User']);
                $user->package = "FREE";
                $user->save();

                $category = category::where('name', '=', 'Individual')->first();
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

    // report

    function writerDesignerReport()
    {
        $writer = User::whereHas(
            'roles',
            function ($q) {
                $q->where('name', 'Writer');
            }
        )->with('writer')->get();
        $designer = User::whereHas(
            'roles',
            function ($q) {
                $q->where('name', 'Designer');
            }
        )->with('designer')->get();
        return view('admin.report.writerDesignerReport', \compact('writer', 'designer'));
    }

    function writerReport($id)
    {

        $data = User::where('id', '=', $id)->whereHas(
            'roles',
            function ($q) {
                $q->where('name', 'Writer');
            }
        )->with('writer')->first();

        $totalSlogans = Writerslogan::where('userId', '=', $id)->count();
        $approvedSlogans = Writerslogan::where('userId', '=', $id)
            ->where('status', '=', "Approved")
            ->count();
        $rejectedSlogans = Writerslogan::where('userId', '=', $id)
            ->where('status', '=', "Rejected")
            ->count();
        $pendingSlogans = Writerslogan::where('userId', '=', $id)
            ->where('status', '=', "Pending")
            ->count();

        return view('admin.report.writerReport', \compact('data', 'totalSlogans', 'approvedSlogans', 'rejectedSlogans', 'pendingSlogans'));
    }
    function designerReport($id)
    {

        $data = User::where('id', '=', $id)->whereHas(
            'roles',
            function ($q) {
                $q->where('name', 'Designer');
            }
        )->with('designer')->first();

        $totalDesigns = Design::where('userId', '=', $id)->count();
        $approvedDesigns = Design::where('userId', '=', $id)
            ->where('status', '=', "Approved")
            ->count();
        $rejectedDesigns = Design::where('userId', '=', $id)
            ->where('status', '=', "Rejected")
            ->count();
        $pendingDesigns = Design::where('userId', '=', $id)
            ->where('status', '=', "Pending")
            ->count();

        return view('admin.report.designerReport', \compact('data', 'totalDesigns', 'approvedDesigns', 'rejectedDesigns', 'pendingDesigns'));
    }
}
