<?php

namespace App\Http\Livewire;

use App\Video;
use Livewire\Component;

class SearchVideo extends Component
{

    public $term = "";

    public function render()
    {
        sleep(1);
        $users = Video::where('titulo', 'like',$this->term)->paginate(10);

        $data = [
            'users' => $users,
        ];

        return view('livewire.search-video', $data);
    }

}
