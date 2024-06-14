<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardservices extends Model
{
    use HasFactory;
    protected $fillable = ['card_id','category'];
    protected $table = "cardservices";

}
