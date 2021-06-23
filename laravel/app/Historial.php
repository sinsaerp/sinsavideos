<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Historial extends Model
{
    protected $table="historial";
    protected $fillable =['video_id', 'usuario', 'total', 'estado'];

    public static function getUsario($id){
        return Historial::where('usuario', $id)->where('estado', 1)->get();
    }

    public static function getVideo($id, $usuario){
        return Historial::where('video_id', $id)
        ->where('usuario', $usuario)
        ->where('estado', 1)->first();
    }

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('usuario', $search)
                ->where('estado','1');
    }

    
    public function video()
    {
        return $this->belongsTo('App\Video', 'video_id' );
    }

    public static function incrementar($id, $usuario){
        return DB::table('historial')->where('video_id', $id)
        ->where('usuario', $usuario)->where('estado', 1)->increment('total');
    }
    

    
}
