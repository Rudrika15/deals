<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $fillable = ['card_id', 'title', 'value', 'displaytext'];
    protected $table = "cardlinkes";
}
