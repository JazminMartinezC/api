<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class peliculas extends Model
{
    public $timestamp=false;
    protected $fillable=['id','nombre','descripcion','anio_filmacion','poster','genero_principal'];
}
