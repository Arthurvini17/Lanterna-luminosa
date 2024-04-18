<?php

namespace App\Livewire;

use App\Models\Helper;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
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
    public $name = "";

    public $email = '';


    public $number = '';

    public $message = '';



    public function save(Request $request)
    {

      $helper = new Helper();
        $helper->name = $request('name');


        session()->flash('message', 'Mensagem salva com sucesso!');
    }
}
    
    
