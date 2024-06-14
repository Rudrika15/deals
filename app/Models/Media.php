<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    function category()
    {
        return $this->hasMany(Category::class, 'id', 'category');
    }
}
