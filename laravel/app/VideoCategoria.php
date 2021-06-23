<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class VideoCategoria extends Model
{
    protected $table="video_categorias";
    protected $fillable =['video_id', 'categoria_id', 'estado'];

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('categoria_id', $search)
                ->where('estado','1');
    }
    public function video()
    {
        return $this->belongsTo('App\Video', 'video_id');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Categoria', 'categoria_id');
    }

    public static function contador($categoria){
        return DB::table('video_categorias')->where('estado','1')->where('categoria_id',$categoria)->count();
    }

    public static function getVideo($video){
        return VideoCategoria::where('estado','1')
        ->where('video_id',$video)       
        ->first();
    }

    public static function sugerencias($categoria, $video){
        return VideoCategoria::select("*")
        ->where('estado','1')        
        ->where('categoria_id',$categoria)
        ->orderBy(DB::raw('RAND()'))
        ->limit(5)
        ->get();
    }

}
