<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table="videos";
    protected $fillable =['titulo', 'descripcion', 'visible', 'ruta', 'estado'];

    public static function getCategoria($categoria)
    {
        return Video::where('estado', 1)->
        where('categoria_id', $categoria)->get();
    }


}
