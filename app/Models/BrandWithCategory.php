<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class BrandWithCategory extends Model
{
    use HasFactory;


    function brandCategory()
    {
        return $this->belongsTo(BrandCategory::class, 'brandCategoryId', 'id');
    }

    function brand()
    {
        return $this->belongsTo(User::class, 'brandId', 'id');
    }
    function user()
    {
        return $this->belongsTo(User::class, 'brandId', 'id');
    }

    function offer()
    {
        return $this->hasMany(BrandOffer::class, 'userId', 'brandId');
    }
    function users()
    {
        return $this->hasMany(User::class, 'id', 'brandId');
    }
}
