<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    function slogan()
    {
        return $this->hasMany(Writerslogan::class, 'id', 'slugId');
    }
}
