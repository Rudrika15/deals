<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignStep extends Model
{
    use HasFactory;


    public function campaign()
    {
        return $this->hasMany(Campaign::class, 'id', 'campaignId');
    }
}
