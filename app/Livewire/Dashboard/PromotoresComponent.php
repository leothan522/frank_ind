<?php

namespace App\Livewire\Dashboard;

use App\Models\Estado;
use App\Models\Localizacion;
use App\Models\Promotor;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class PromotoresComponent extends Component
{
    use LivewireAlert;
    use WithPagination, WithoutUrlPagination;

    public $view = 'table',$order = 'DESC', $keyword, $filtro = false, $label;
    public $items = 0;
    public $cedula, $nombres, $apellidos, $nacimiento, $sexo, $telefono_1, $telefono_2, $estado_civil, $nivel_academico,
        $facebook, $instagram, $email, $created_at;
    public $estado, $municipio, $parroquia, $direccion, $acceso_internet, $dispositivo_electronico, $verLocalizacion = false;

    #[Locked]
    public $rowquid;

    public function render()
    {
        if ($this->filtro){
            $buscar = $this->filtro;
            $filtro = true;
        }else{
            $buscar = $this->keyword;
            $filtro = false;
        }

        $promotores = Promotor::buscar($buscar, $filtro)
            ->orderBy('created_at', $this->order)
            ->paginate(50);

        $rows = Promotor::buscar($buscar, $filtro)->count();

        $estados = Estado::orderBy('nombre', 'ASC')->get();
        $estados->each(function ($estado) {
            $estado->numero = 0;
            $localizaciones = Localizacion::where('estados_id', $estado->id)->get();
            foreach ($localizaciones as $localizacion) {
                $users_id = $localizacion->users_id;
                $promotor = Promotor::where('users_id', $users_id)->first();
                if ($promotor) {
                    $estado->numero++;
                }
            }
            if ($estado->numero){
                $this->items++;
            }
        });

        return view('livewire.dashboard.promotores-component')
            ->with('promotores', $promotores)
            ->with('rows', $rows)
            ->with('estados', $estados);
    }

    public function limpiar()
    {
        $this->reset([
            'view',
            'cedula', 'nombres', 'apellidos', 'nacimiento', 'sexo', 'telefono_1', 'telefono_2', 'estado_civil', 'nivel_academico',
            'facebook', 'instagram', 'email', 'created_at',
            'estado', 'municipio', 'parroquia', 'direccion', 'acceso_internet', 'dispositivo_electronico', 'verLocalizacion',
            'rowquid',
        ]);
    }

    public function create()
    {
        $this->limpiar();
        $this->view = 'form';
    }

    public function show($rowquid)
    {
        $this->limpiar();
        $promotor = $this->getPromotor($rowquid);
        if ($promotor) {
            $this->cedula = $promotor->cedula;
            $this->nombres = $promotor->nombres;
            $this->apellidos = $promotor->apellidos;
            $this->nacimiento = $promotor->nacimiento;
            $this->sexo = $promotor->sexo;
            $this->telefono_1 = $promotor->telefono_1;
            $this->telefono_2 = $promotor->telefono_2;
            $this->estado_civil = $promotor->estado_civil;
            $this->nivel_academico = $promotor->nivel_academico;
            $this->facebook = $promotor->facebook;
            $this->instagram = $promotor->instagram;
            $this->created_at = $promotor->created_at;
            $this->email = $promotor->user->email;
            $this->rowquid = $promotor->user->rowquid;

            $localizacion = Localizacion::where('users_id', $promotor->users_id)->first();
            if ($localizacion) {
                $this->verLocalizacion = true;
                $this->estado = $localizacion->estado->nombre;
                $this->municipio = $localizacion->municipio->nombre;
                $this->parroquia = $localizacion->parroquia->nombre;
                $this->direccion = $localizacion->direccion;
                $this->acceso_internet = $localizacion->acceso_internet;
                $this->dispositivo_electronico = $localizacion->dispositivo_electronico;
            }

            $this->view = 'show';
        }
    }

    public function orderAscending(){
        $this->order = 'ASC';
    }

    public function orderDescending(){
        $this->order = 'DESC';
    }

    public function buscar()
    {
        $this->resetPage();
    }

    public function cerrarBusqueda()
    {
        $this->reset(['keyword', 'filtro', 'label']);
        $this->resetPage();
    }

    public function actualizar()
    {
        $this->resetPage();
        $this->limpiar();
    }

    public function filtrar($rowquid)
    {
        $estado = Estado::where('rowquid', $rowquid)->first();
        if ($estado) {
            $this->filtro = $estado->id;
            $this->label = $estado->nombre;
            $this->view = 'table';
        }
    }

    public function getEstado($users_id)
    {
        $response = '<i class="far fa-circle text-danger"></i>';
        $localizacion = Localizacion::where('users_id', $users_id)->first();
        if ($localizacion) {
            $response = $localizacion->estado->nombre;
        }
        return $response;
    }

    protected function getPromotor($rowquid): ?Promotor
    {
        return Promotor::where('rowquid', $rowquid)->first();
    }

}
