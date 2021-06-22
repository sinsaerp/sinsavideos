<?php

namespace App\Http\Livewire;

use App\Video;
use App\VideoCategoria;
use Livewire\Component;

class SingleChannel extends Component

{
    public $videos=[], $idcategoria;
    public function render()
    {
        $this->videos=VideoCategoria::getCategoria($this->idcategoria);
        return view('livewire.single-channel');
    }
}
