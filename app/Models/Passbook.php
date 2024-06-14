<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passbook extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->hasMany(User::class, 'id', 'userId');
    }

    public function package()
    {
        return $this->hasMany(Subscriptionpackage::class, 'id', 'package');
    }
}
