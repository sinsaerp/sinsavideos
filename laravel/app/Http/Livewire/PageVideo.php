<?php

namespace App\Http\Livewire;

use App\Video;
use Livewire\Component;

class PageVideo extends Component
{
    public $idvideo, $video;
    public function render()
    {
        $this->video=Video::find($this->idvideo);
        return view('livewire.page-video');
    }
}
