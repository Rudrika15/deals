<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryInfluencer extends Model
{
    use HasFactory;


    public function Influencer()
    {
        return $this->hasMany(InfluencerProfile::class, 'categoryId', 'id');
    }
}
