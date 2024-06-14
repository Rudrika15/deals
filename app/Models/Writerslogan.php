<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writerslogan extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'categoryId',
        'status',
    ];

    function category()
    {
        return $this->hasOne(Category::class, 'id', 'categoryId');
    }
}
