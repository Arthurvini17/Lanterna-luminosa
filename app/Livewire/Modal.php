<?php

namespace App\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public function render()
    {
        return view('livewire.modal');
    }

    public $isOpen = false;

    public function abrirView(){
        $this->isOpen = true;
    }

    public function fecharView(){
        $this->isOpen = false;
    }
}
