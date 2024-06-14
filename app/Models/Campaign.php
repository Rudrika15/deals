<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    function AppliedInfluencer()
    {
        return $this->hasMany(Apply::class, 'campaignId', 'id');
    }
}
