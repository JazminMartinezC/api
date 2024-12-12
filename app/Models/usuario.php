<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    public $timestamp=false;
    protected $fillable=['id','correo','password','nombre','avatar'];
}
