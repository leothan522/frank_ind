@if($view == 'show' || $view == 'form')
    <button type="button" class="btn btn-primary btn-block mb-3" wire:click="limpiar">
        <i class="fas fa-arrow-left"></i> Volver
    </button>
@else
    {{--<button type="button" class="btn btn-primary btn-block mb-3" wire:click="create">
        <i class="fas fa-file"></i> Nuevo Oficio
    </button>--}}
    <a href="{{ route('dashboard.promotores.excel') }}" target="_blank" class="btn btn-primary btn-block mb-3">
        <i class="fas fa-cloud-download-alt"></i> Descargar Excel
    </a>
@endif

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Localización</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item active">
                @if($items)
                    @foreach($estados as $estado)
                        @if($estado->numero)
                            <a class="nav-link" wire:click="filtrar('{{ $estado->rowquid }}')" style="cursor: pointer;">
                                <i class="far fa-circle text-success"></i> {{ $estado->nombre }}
                                <span class="badge bg-warning float-right">{{ $estado->numero }}</span>
                            </a>
                        @endif
                    @endforeach
                @else
                    <a class="nav-link">
                        <i class="far fa-circle text-danger"></i> Sin Registros
                    </a>
                @endif
            </li>
        </ul>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Leyenda</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link">
                    <i class="far fa-circle text-success"></i>
                    Registros Completos
                </a>
                <a class="nav-link">
                    <i class="far fa-circle text-danger"></i>
                    Localización Pendiente
                </a>
            </li>
        </ul>
    </div>
    <!-- /.card-body -->
</div>
