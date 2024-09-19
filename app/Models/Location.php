<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'latitude', 'longitude'];

    // Define the inverse relationship to the user
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
    

}
