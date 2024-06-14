<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mymedia extends Model
{
    use HasFactory;


    function user()
    {
        return $this->hasMany(User::class, 'id', 'userId');
    }
    function category()
    {
        return $this->hasMany(Category::class, 'id', 'categoryId');
    }
}
