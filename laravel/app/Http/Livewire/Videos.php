<?php

namespace App\Http\Livewire;

use App\Categoria;
use App\Servicio;
use App\Video;
use App\VideoCategoria;
use App\VideoServicio;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Videos extends Component
{

    public $titulo, $descripcion, $visible='SI', $ruta, $categorias=[], $opciones=[];
    public function render()
    {
        $this->categorias=Categoria::getActive();
        return view('livewire.videos');
    }

    private function resetInputFields(){
        $this->titulo = '';
        $this->descripcion = '';
        $this->visble = '';
        $this->ruta = '';
        $this->opciones=[];
    }

    public function store()
    {

        $validatedDate = $this->validate([
            'titulo' => 'required',
            'descripcion' => 'required',            
            'ruta' => 'required',
            'opciones'=>'required:*'
        ]);
        try{

            DB::beginTransaction();
            $obj=new Video();
            $obj->titulo=$this->titulo;
            $obj->descripcion=$this->descripcion;
            $obj->ruta=$this->ruta;           
            $obj->save();
            foreach ($this->opciones as $key => $value) {
                VideoCategoria::create([
                    'video_id'=>$obj->id,
                    'categoria_id'=>$value,
                ]);
            }
            DB::commit();
            $this->resetInputFields();
            $this->emit('modal');
            $this->emit('notificacion');
            session()->flash('message', 'INFORMACIÓN REGISTRADA EXITOSAMENTE.');
        } catch(Exception $e){
            DB::rollBack();
            session()->flash('message', $e->getMessage());
        }

    }
}
