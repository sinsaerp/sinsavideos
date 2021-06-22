<?php

namespace App\Http\Livewire;

use App\Categoria;
use Livewire\Component;

class Categorias extends Component
{
    public $categorias;
    public function render()
    {
        $this->categorias=Categoria::getActive();
        return view('livewire.categorias');
    }
}
