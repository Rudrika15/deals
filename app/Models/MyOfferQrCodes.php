<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyOfferQrCodes extends Model
{
    use HasFactory;

    function offer()
    {
        return $this->hasMany(BrandOffer::class, 'id', 'offerId');
    }

    function buyer()
    {
        return $this->hasMany(User::class, 'id', 'buyerId');
    }
}
