<?php

namespace App\Livewire\Web;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class HomeComponent extends Component
{
    use LivewireAlert;

    public $view = "show", $completo = false;

    public function render()
    {
        return view('livewire.web.home-component');
    }

    public function limpiar()
    {
        $this->reset(['view']);
        $this->resetErrorBag();
    }

    public function irPersonal()
    {
        $this->view = 'personal';
    }

    public function irLocalizacion()
    {
        $this->view = 'localizacion';
    }

    public function descargar()
    {
        $this->alert('success','hola');
    }

}
