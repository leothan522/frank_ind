<?php

namespace App\Livewire\Web;

use App\Models\Promotor;
use Illuminate\Validation\Rule;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Locked;
use Livewire\Component;

class HomeComponent extends Component
{
    use LivewireAlert;

    public $view = "show", $completo = false, $classPersonales = 'card-danger', $classLocalizacion = 'card-danger';
    public $prefijo = 'V-', $numero, $cedula, $nombres, $apellidos, $nacimiento, $sexo, $telefono_1, $telefono_2, $estado_civil,
        $nivel_academico, $profesional, $facebook, $instagram, $pagina_web, $email;

    

    #[Locked]
    public $promotores_id;

    public function mount()
    {
        $this->getDatosPersonales();
    }

    public function render()
    {
        return view('livewire.web.home-component');
    }

    public function limpiar()
    {
        $this->reset([
            'view',
            'prefijo', 'numero', 'cedula', 'nombres', 'apellidos', 'nacimiento', 'sexo', 'telefono_1', 'telefono_2', 'estado_civil',
            'nivel_academico', 'profesional', 'facebook', 'instagram', 'pagina_web', 'email'
        ]);
        $this->resetErrorBag();
    }

    public function savePromotor()
    {
        $rules = [
            'numero' => 'required|integer|min_digits:6',
            'cedula' => ['required', Rule::unique('promotores', 'cedula')->ignore($this->promotores_id)],
            'nombres' => 'required|max:100',
            'apellidos' => 'required|max:100',
            'nacimiento' => 'required',
            'sexo' => 'required',
            'telefono_1' => 'required',
            'estado_civil' => 'required',
            'nivel_academico' => 'required',
            'profesional' => 'required',
        ];

        $messages = [
            'numero.required' => 'El campo cedula es obligatorio.',
            'numero.integer' => 'El campo cedula debe ser un número entero.',
            'numero.min_digits' => 'El campo cedula debe tener al menos 6 dígitos.',
            'nacimiento.required' => 'El campo nacimiento es obligatorio.',
            'telefono_1.required' => 'El campo teléfono celular es obligatorio',
        ];;

        $this->cedula = $this->prefijo . $this->numero;
        $this->validate($rules, $messages);

        if ($this->promotores_id){
            //editar
            $promotor = Promotor::find($this->promotores_id);
        }else{
            //nuevo
            $promotor = new Promotor();
        }

        if ($promotor){

            $promotor->cedula = $this->cedula;
            $promotor->nombres = $this->nombres;
            $promotor->apellidos = $this->apellidos;
            $promotor->nacimiento = $this->nacimiento;
            $promotor->sexo = $this->sexo;
            $promotor->telefono_1 = $this->telefono_1;
            $promotor->telefono_2 = $this->telefono_2;
            $promotor->estado_civil = $this->estado_civil;
            $promotor->nivel_academico = $this->nivel_academico;
            $promotor->profesional = $this->profesional;
            $promotor->facebook = $this->facebook;
            $promotor->instagram = $this->instagram;
            $promotor->pagina_web = $this->pagina_web;
            $promotor->users_id = \Auth::id();
            do{
                $rowquid = generarStringAleatorio(16);
                $existe = Promotor::where('rowquid', $rowquid)->first();
            }while($existe);
            $promotor->rowquid = $rowquid;
            $promotor->save();
            $this->promotores_id = $promotor->id;
            $this->alert('success', 'Datos Guardados.');

        }

        $this->limpiar();

    }

    public function irPersonal()
    {
        $this->limpiar();
        $this->getDatosPersonales();
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

    protected function getDatosPersonales(): void
    {
        $user = \Auth::user();
        $datosPersonales = Promotor::where('users_id', $user->id)->first();
        if ($datosPersonales){
            $this->classPersonales = 'card-success';
            $explode = explode('-', $datosPersonales->cedula);
            $this->prefijo = $explode[0].'-';
            $this->numero = $explode[1];
            $this->nombres = $datosPersonales->nombres;
            $this->apellidos = $datosPersonales->apellidos;
            $this->nacimiento = $datosPersonales->nacimiento;
            $this->sexo = $datosPersonales->sexo;
            $this->telefono_1 = $datosPersonales->telefono_1;
            $this->telefono_2 = $datosPersonales->telefono_2;
            $this->estado_civil = $datosPersonales->estado_civil;
            $this->nivel_academico = $datosPersonales->nivel_academico;
            $this->profesional = $datosPersonales->profesional;
            $this->facebook = $datosPersonales->facebook;
            $this->instagram = $datosPersonales->instagram;
            $this->pagina_web = $datosPersonales->pagina_web;
            $this->promotores_id = $datosPersonales->id;
        }
    }

}
