<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignInfluencerActivity extends Model
{
    use HasFactory;

    function campaignInfluencerActivityStep()
    {
        return $this->hasMany(CampaignInfluencerActivityStep::class, 'campaignInfluencerActivityId', 'id');
    }
}
