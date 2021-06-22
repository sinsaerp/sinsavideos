<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table="servicios";
    protected $fillable =['nombre', 'estado'];

    public static function getActive()
    {
        return Servicio::where('estado', 1)->get();
    }


}
