<?php

namespace App\Http\Livewire;

use App\Contador;
use App\Historial;
use App\Video;
use App\VideoCategoria;
use Livewire\Component;

class PageVideo extends Component
{
    public $idvideo, $video, $vistas, $sugerencias;
    public function render()
    {
       $usuario=auth()->user()->id;
        $this->video=VideoCategoria::getVideo($this->idvideo);        
        if(!empty($this->video)){
            $cont=Contador::getVideo($this->video->video->id);
            if(empty($cont)){
                Contador::create([
                    'video_id'=>$this->video->video->id,
                    'total'=>1
                ]);
            }else{
                Contador::incrementar($this->video->video->id);
                $this->vistas=$cont->total;
            }
            $historial=Historial::getVideo($this->video->video->id, $usuario);
            if(empty($historial)){
                Historial::create([
                    'video_id'=>$this->video->video->id,
                    'total'=>1,
                    'usuario'=>$usuario
                ]);
            }else{
                Historial::incrementar($this->video->video->id, $usuario);                
            }

        }
        $this->sugerencias=VideoCategoria::sugerencias($this->video->categoria_id, $this->idvideo);
       
        return view('livewire.page-video');
    }
}
