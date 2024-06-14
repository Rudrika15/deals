<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfluencer extends Model
{
    use HasFactory;

    public function influencer()
    {
        return $this->hasOne(User::class, 'id', 'influencerId');
    }
}
