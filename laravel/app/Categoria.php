<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table="categorias";
    protected $fillable =['nombre', 'imagen', 'estado'];

    public static function getActive()
    {
        return Categoria::where('estado', 1)->get();
    }
}
