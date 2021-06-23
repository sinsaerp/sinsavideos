<?php

namespace App\Http\Livewire\Historial;

use App\Historial as AppHistorial;
use Livewire\Component;
use Livewire\WithPagination;

class Historial extends Component
{
    public $perPage = 10;    
    public $orderBy = 'id';
    public $orderAsc = true;
    use WithPagination;
    public $usuario_id, $categoria;
    public function render()
    {
       
        $videos=AppHistorial::search($this->usuario_id)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage);
              
        return view('livewire.historial.historial', compact('videos'));
    }

    public function paginas($cantidad){
        $this->perPage=$cantidad;
    }

    public function ordenar($atributo){
        $this->orderBy=$atributo;
    }
}
