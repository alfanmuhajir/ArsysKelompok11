<?php
// class Content
namespace App\Http\Livewire\Plt2;

use Livewire\Component;

class Content extends Component
{
    public $content = null;

    protected $listeners = ['setMenu_PLT'];

    public function render()
    {
        return view('livewire.plt2.content');
    }

    public function setMenu_PLT($selection){
        $this->content = $selection;
    }

}
