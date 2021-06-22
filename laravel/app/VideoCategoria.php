<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoCategoria extends Model
{
    protected $table="video_categorias";
    protected $fillable =['video_id', 'categoria_id', 'estado'];

    public static function getCategoria($categoria)
    {
        return VideoCategoria::where('estado', 1)->
        where('categoria_id', $categoria)->get();
    }

    public function video()
    {
        return $this->belongsTo('App\Video', 'video_id');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Categoria', 'categoria_id');
    }

}
