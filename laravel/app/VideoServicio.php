<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoServicio extends Model
{
    protected $table="video_servicios";
    protected $fillable =['video_id', 'servicio_id', 'estado'];
}
