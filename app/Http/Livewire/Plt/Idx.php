<?php

namespace App\Http\Livewire\Plt;

use Livewire\Component;

class Idx extends Component
{
    public function render()
    {
        //dd("hello world");
        return view('livewire.plt.idx')->layout("adminlte::page");
    }
}
