<?php

namespace App\Http\Controllers\influencer;


use App\Http\Controllers\Controller;
use App\Models\CampaignInfluencerActivity;
use App\Models\CampaignInfluencerActivityStep;
use App\Models\CampaignStep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfluencerStepController extends Controller
{
    public function index($campaignId)
    {
        $campaignStep = CampaignStep::where('campaignId', '=', $campaignId)
            ->orderBy('id', 'DESC')
            ->get();

        $influencerId = Auth::user()->id;
        $content = CampaignInfluencerActivityStep::where('influencerId', '=', $influencerId)
            ->get();
        // return $counter;
        return view('influencer.campaignView.viewStep', \compact('campaignStep', 'content'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // upload step
        $campaignId = $request->campaignId;
        $influencerId = Auth::user()->id;
        $stepId = $request->stepId;

        $activity = new CampaignInfluencerActivity();
        $activity->campaignId = $campaignId;
        $activity->influencerId = $influencerId;
        $activity->save();

        $activityStep = new CampaignInfluencerActivityStep();
        $activityStep->campaignInfluencerActivityId = $activity->id;
        $activityStep->campaignId = $campaignId;
        $activityStep->influencerId = $influencerId;
        $activityStep->stepId = $stepId;
        if ($request->uploadActivityPhoto) {
            $activityStep->uploadActivityPhoto = time() . '.' . $request->uploadActivityPhoto->extension();
            $request->uploadActivityPhoto->move(public_path('uploadActivityPhoto'), $activityStep->uploadActivityPhoto);
        }

        $activityStep->uploadActivityLink = $request->uploadActivityLink;
        $activityStep->save();
        return redirect()->back()->with('success', 'Upload Successfully');
    }
}
