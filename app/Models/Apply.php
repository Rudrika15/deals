<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;


    public function campaign()
    {
        return $this->hasMany(Campaign::class, 'id', 'campaignId');
    }

    public function campaignData()
    {
        return $this->hasOne(Campaign::class, 'id', 'campaignId');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'id', 'userId');
    }
}
