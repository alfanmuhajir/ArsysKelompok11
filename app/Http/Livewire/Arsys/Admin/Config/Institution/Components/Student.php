<?php

namespace App\Http\Livewire\Arsys\Admin\Config\Institution\Components;

use Livewire\Component;

class Student extends Component
{

    public $code;
    public $abbrev;
    public $description;
    public $descriptionEng;
    public $addProgram = null;
    public function render()
    {
        return view('livewire.arsys.admin.config.institution.components.student');
    }

    public function addProgram(){
        if($this->addProgram == null){
            $this->addProgram = 1;
        }elseif($this->addProgram == 1){
            $this->addProgram = null;
        }
        $this->code = '';
        $this->abbrev = '';
        $this->description = '';
        $this->descriptionEng = '';
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function save(){
        $this->validate([
            'code' => 'required | 4',
            'abbrev' => 'required',
            'description' => 'required',
            'descriptionEng' => 'required',
        ]);
    }
}
