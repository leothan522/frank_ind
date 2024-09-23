<?php

namespace App\Livewire\Web;

use App\Models\Estado;
use App\Models\Localizacion;
use App\Models\Municipio;
use App\Models\Parroquia;
use App\Models\Promotor;
use Illuminate\Support\Sleep;
use Illuminate\Validation\Rule;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class HomeComponent extends Component
{
    use LivewireAlert;

    public $view = "show", $completo = false, $classPersonales = 'card-danger', $classLocalizacion = 'card-danger';
    public $prefijo = 'V-', $numero, $cedula, $nombres, $apellidos, $nacimiento, $sexo, $telefono_1, $telefono_2, $estado_civil,
        $nivel_academico, $profesional = 'SI', $facebook, $instagram, $pagina_web, $email;

    public $estados_id, $municipios_id, $parroquias_id, $direccion, $acceso_internet, $dispositivo_electronico;


    #[Locked]
    public $promotores_id, $localizacion_id;

    public function mount()
    {
        $this->getDatosPersonales();
        $this->getDatosLocalizacion();
    }

    public function render()
    {

        if ($this->promotores_id){
            $this->classPersonales = 'card-success';
        }

        if ($this->localizacion_id){
            $this->classLocalizacion = 'card-success';
        }

        if (!is_null($this->promotores_id) && !is_null($this->localizacion_id)){
            $this->completo = true;
        }

        return view('livewire.web.home-component');
    }

    public function limpiar()
    {
        $this->reset([
            'view',
            'prefijo', 'numero', 'cedula', 'nombres', 'apellidos', 'nacimiento', 'sexo', 'telefono_1', 'telefono_2', 'estado_civil',
            'nivel_academico', 'profesional', 'facebook', 'instagram', 'pagina_web', 'email',
            'estados_id', 'municipios_id', 'parroquias_id', 'direccion', 'acceso_internet', 'dispositivo_electronico'
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

    public function saveLocalizacion()
    {
        $rules = [
            'estados_id' => 'required',
            'municipios_id' => 'required',
            'parroquias_id' => 'required',
            'direccion' => 'required',
            'acceso_internet' => 'required',
            'dispositivo_electronico' => 'required',
        ];

        $messages = [
            'estados_id.required' => 'El campo estado es obligatorio.',
            'municipios_id.required' => 'El campo municipio es obligatorio.',
            'parroquias_id.required' => 'El campo parroquia es obligatorio.',
            'direccion.required' => 'El campo dirección es obligatorio.',
            'acceso_internet.required' => 'El campo acceso a internet es obligatorio.',
        ];;

        $this->validate($rules, $messages);

        if ($this->localizacion_id){
            //editar
            $localizacion = Localizacion::find($this->localizacion_id);
        }else{
            //nuevo
            $localizacion = new Localizacion();
        }

        if ($localizacion){

            $localizacion->estados_id = $this->estados_id;
            $localizacion->municipios_id = $this->municipios_id;
            $localizacion->parroquias_id = $this->parroquias_id;
            $localizacion->direccion = $this->direccion;
            $localizacion->acceso_internet = $this->acceso_internet;
            $localizacion->dispositivo_electronico = $this->dispositivo_electronico;
            $localizacion->users_id = \Auth::id();
            do{
                $rowquid = generarStringAleatorio(16);
                $existe = Localizacion::where('rowquid', $rowquid)->first();
            }while($existe);
            $localizacion->rowquid = $rowquid;
            $localizacion->save();
            $this->localizacion_id = $localizacion->id;
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
        $this->limpiar();
        $this->getDatosLocalizacion();

        $estados = Estado::orderBy('nombre', 'ASC')->get();
        $dataEstados = getDataSelect2($estados, 'nombre');
        $this->dispatch('initSelectEstados', data: $dataEstados);

        if ($this->estados_id){
            $estado = Estado::find($this->estados_id);
            $this->dispatch('setSelectEstados', rowquid: $estado->rowquid);
        }

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

    #[On('initSelectEstados')]
    public function initSelectEstados($data)
    {
        //JS
    }

    #[On('getSelectEstados')]
    public function getSelectEstados($rowquid)
    {
        $id = $this->municipios_id;
        $this->reset(['estados_id', 'municipios_id']);
        $estado = Estado::where('rowquid', $rowquid)->first();
        if ($estado){
            $this->estados_id = $estado->id;
            $municipios = Municipio::where('estados_id', $this->estados_id)->orderBy('nombre', 'ASC')->get();
            $dataMunicipios = getDataSelect2($municipios, 'nombre');
            $this->dispatch('initSelectMunicipios', data: $dataMunicipios);
            if ($id){
                $municipio = Municipio::find($id);
                $this->dispatch('setSelectMunicipios', rowquid: $municipio->rowquid);
            }
        }
    }

    #[On('setSelectEstados')]
    public function setSelectEstados($rowquid)
    {
        //JS
    }

    #[On('initSelectMunicipios')]
    public function initSelectMunicipios($data)
    {
        //JS
    }

    #[On('getSelectMunicipios')]
    public function getSelectMunicipios($rowquid)
    {
        $id = $this->parroquias_id;
        $this->reset(['municipios_id', 'parroquias_id']);
        $municipio = Municipio::where('rowquid', $rowquid)->first();
        if ($municipio){
            $this->municipios_id = $municipio->id;
            $parroquias = Parroquia::where('municipios_id', $this->municipios_id)->orderBy('nombre', 'ASC')->get();
            $dataParroquias = getDataSelect2($parroquias, 'nombre');
            $this->dispatch('initSelectParroquias', data: $dataParroquias);
            if ($id){
                $parroquia = Parroquia::find($id);
                $this->dispatch('setSelectParroquias', rowquid: $parroquia->rowquid);
            }
        }
    }

    #[On('setSelectMunicipios')]
    public function setSelectMunicipios($rowquid)
    {
        //JS
    }

    #[On('initSelectParroquias')]
    public function initSelectParroquias($data)
    {
        //JS
    }

    #[On('getSelectParroquias')]
    public function getSelectParroquias($rowquid)
    {
        $this->reset(['parroquias_id']);
        $parroquia = Parroquia::where('rowquid', $rowquid)->first();
        if ($parroquia){
            $this->parroquias_id = $parroquia->id;
        }
    }

    #[On('setSelectParroquias')]
    public function setSelectParroquias($rowquid)
    {
        //JS
    }

    protected function getDatosLocalizacion()
    {
        $user = \Auth::user();
        $datosLocalizacion = Localizacion::where('users_id', $user->id)->first();
        if ($datosLocalizacion){
            $this->estados_id = $datosLocalizacion->estados_id;
            $this->municipios_id = $datosLocalizacion->municipios_id;
            $this->parroquias_id = $datosLocalizacion->parroquias_id;
            $this->direccion = $datosLocalizacion->direccion;
            $this->acceso_internet = $datosLocalizacion->acceso_internet;
            $this->dispositivo_electronico = $datosLocalizacion->dispositivo_electronico;
            $this->localizacion_id = $datosLocalizacion->id;
        }
    }



}
