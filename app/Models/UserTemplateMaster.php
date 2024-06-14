<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTemplateMaster extends Model
{
    use HasFactory;

    function TemplateDetail()
    {
        return $this->hasOne(TemplateDetail::class, 'customTemplateId', 'id');
    }

    function email()
    {
        return $this->hasOne(TemplateDetail::class, 'customTemplateId', 'id')->where('title', '=', 'email');
    }

    function contact()
    {
        return $this->hasOne(TemplateDetail::class, 'customTemplateId', 'id')->where('title', '=', 'contact');
    }
    function website()
    {
        return $this->hasOne(TemplateDetail::class, 'customTemplateId', 'id')->where('title', '=', 'website');
    }
    function location()
    {
        return $this->hasOne(TemplateDetail::class, 'customTemplateId', 'id')->where('title', '=', 'location');
    }
}
