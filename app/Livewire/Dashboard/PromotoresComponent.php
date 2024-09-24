<?php

namespace App\Livewire\Dashboard;

use App\Models\Estado;
use App\Models\Localizacion;
use App\Models\Promotor;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class PromotoresComponent extends Component
{
    use LivewireAlert;
    use WithPagination, WithoutUrlPagination;

    public $view = 'table',$order = 'DESC', $keyword, $filtro = false, $label;
    public $items = 0;

    public function render()
    {
        if ($this->filtro){
            $buscar = $this->filtro;
            $this->filtro = true;
        }else{
            $buscar = $this->keyword;
        }

        $promotores = Promotor::buscar($buscar, $this->filtro)
            ->orderBy('created_at', $this->order)
            ->paginate(50);

        $rows = Promotor::buscar($buscar, $this->filtro)->count();

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
        $this->view = 'show';
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

}
