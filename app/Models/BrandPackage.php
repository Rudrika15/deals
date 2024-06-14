<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandPackage extends Model
{
    use HasFactory;


    public function brandPackageDetails()
    {
        return $this->hasMany(BrandPackageDetail::class, 'brandPackageId', 'id');
    }
}
