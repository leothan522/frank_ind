<?php

namespace App\Exports;

use App\Models\Localizacion;
use App\Models\Promotor;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithProperties;
use Maatwebsite\Excel\Concerns\WithTitle;

class PromotoresExport implements FromView, WithTitle, WithProperties, ShouldAutoSize
{
    public function view(): View
    {
        // TODO: Implement view() method.
        $promotores = Promotor::orderBy('created_at', 'ASC')->get();
        $promotores->each(function ($promotor) {
           $promotor->verEstado = '';
           $promotor->municipio = '';
           $promotor->parroquia = '';
           $promotor->direccion = '';
           $promotor->acceso_internet = '';
           $promotor->dispositivo_electronico = '';
           $promotor->observacion = 'Localización Pendiente';

           $localizacion = Localizacion::where('users_id', $promotor->users_id)->first();
           if ($localizacion) {
               $promotor->verEstado = $localizacion->estado->nombre;
               $promotor->municipio = $localizacion->municipio->nombre;
               $promotor->parroquia = $localizacion->parroquia->nombre;
               $promotor->direccion = $localizacion->direccion;
               $promotor->acceso_internet = $localizacion->acceso_internet;
               $promotor->dispositivo_electronico = $localizacion->dispositivo_electronico;
               $promotor->observacion = '';
           }

        });
        return view('dashboard._export.export_excel_promotores')
            ->with('promotores', $promotores)
            ->with('items', 0);
    }

    public function title(): string
    {
        // TODO: Implement title() method.
        return "PROMOTORES REGISTRADOS";
    }

    public function properties(): array
    {
        // TODO: Implement properties() method.
        return [
            'creator'        => 'Registro IND',
            'lastModifiedBy' => Auth::user()->name,
            'title'          => 'Promotores Registrados',
            'company'        => 'Intituto Nacional del Deporte',
        ];
    }
}
