<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckApply extends Model
{
    use HasFactory;

    public function campaign()
    {
        return $this->hasOne(Campaign::class, 'id', 'campaignId');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'userId');
    }
}
