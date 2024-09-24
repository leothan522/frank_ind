<?php

namespace App\Http\Controllers\Dashboard;

use App\Exports\PromotoresExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PromotoresController extends Controller
{
    public function index()
    {
        return view('dashboard.promotores.index');
    }

    public function export()
    {
        $label = getFecha(null, 'd-m-Y_His');
        return Excel::download(new PromotoresExport, "Promotores_Deportivos_{$label}.xlsx");
    }
}
