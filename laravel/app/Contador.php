<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contador extends Model
{
    protected $table="contador";
    protected $fillable =['video_id', 'total', 'estado'];

    public static function getVideo($id){
        return Contador::where('video_id', $id)->where('estado', 1)->first();
    }

    public static function incrementar($id){
        return DB::table('contador')->where('video_id', $id)->where('estado', 1)->increment('total');
    }

    
}
