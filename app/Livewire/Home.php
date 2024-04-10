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

    public $isImageChanged = false;


    public function abrirView()
    {
        $this->isOpen = true;
        $this->isImageChanged = !$this->isImageChanged;
    }

    public function fecharView()
    {
        $this->isOpen = false;
    }
}
