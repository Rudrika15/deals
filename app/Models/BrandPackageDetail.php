<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandPackageDetail extends Model
{
    use HasFactory;

    public function activity()
    {
        return $this->hasMany(Activity::class, 'id', 'activityId');
    }
}
