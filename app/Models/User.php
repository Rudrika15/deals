<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array

     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'mobileno',
        'profilePhoto',
        'package',
        'captcha',
        'refer',
        'myrefer',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array

     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array

     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    function portfolio()
    {
        return $this->hasMany(InfluencerPortfolio::class, 'userId', 'id');
    }

    function brand()
    {
        // (IMP: hasMany user(brand) has Many Campaign)
        // return $this->hasMany(Campaign::class, 'userId', 'id');
        return $this->hasOne(Campaign::class, 'userId', 'id');
    }
    function campaign()
    {
        return $this->hasMany(Campaign::class, 'userId', 'id');
    }

    public function influencer()
    {
        return $this->hasOne(InfluencerProfile::class, 'userId', 'id');
    }

    public function content()
    {
        return $this->hasMany(CheckApply::class, 'userId', 'id');
    }

    public function razor()
    {
        return $this->hasMany(Razorpay::class, 'user_id', 'id');
    }

    public function package()
    {
        return $this->hasMany(Subscriptionpackage::class, 'title', 'package');
    }

    public function influencerPackage()
    {
        return $this->hasMany(InfluencerPackages::class, 'userId', 'id');
    }
    public function writer()
    {
        return $this->hasMany(Writerslogan::class, 'userId', 'id');
    }
    public function designer()
    {
        return $this->hasMany(Design::class, 'userId', 'id');
    }

    function featured()
    {
        return $this->hasMany(InfluencerProfile::class, 'userId', 'id')->where('is_featured', '=', 'yes');
    }

    function card()
    {
        return $this->hasOne(CardsModels::class, 'user_id', 'id');
    }
    function offer()
    {
        return $this->hasMany(BrandOffer::class, 'userId', 'id');
    }

    function myOffers()
    {
        return $this->hasMany(MyOfferQrCodes::class, 'buyerId', 'id');
    }
}
