<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Category extends Model
{
    use HasFactory;
    protected $table = 'admincategories';


    function media()
    {
        $date = Carbon::now()->toDateString();
        return $this->hasMany(Media::class, 'category', 'id')
            ->where('category', '!=', null);
    }
}
