<?php

namespace App\Http\Livewire;

use App\Categoria;
use App\Video;
use App\VideoCategoria;
use Livewire\Component;
use Livewire\WithPagination;

class SingleChannel extends Component

{
    public $perPage = 10;    
    public $orderBy = 'id';
    public $orderAsc = true;
    use WithPagination;
    public $idcategoria, $categoria;
    public function render()
    {
        $this->categoria=Categoria::find($this->idcategoria);
        $videos=VideoCategoria::search($this->idcategoria)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage);
              
        return view('livewire.single-channel', compact('videos'));
    }

    public function paginas($cantidad){
        $this->perPage=$cantidad;
    }

    public function ordenar($atributo){
        $this->orderBy=$atributo;
    }
}
