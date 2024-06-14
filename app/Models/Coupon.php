<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;


    function package()
    {
        return $this->hasOne(Subscriptionpackage::class, 'id', 'couponFor');
    }
}
