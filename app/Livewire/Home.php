<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home');
    }

    public $isOpen = false;

    public function abrirView(){
        $this->isOpen = true;
    }

    public function fecharView(){
        $this->isOpen = false;
    }
}
