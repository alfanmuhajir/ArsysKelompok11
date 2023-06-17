<?php
// class menu
namespace App\Http\Livewire\Plt2;

use Livewire\Component;

class Menu extends Component
{
    public function render()
    {
        return view('livewire.plt2.menu');
    }

    public function setMenu($selection)
    {
        $this->emit('setMenu_PLT', $selection);
    }
    public function coba() {
        dd("click");
    }
}
