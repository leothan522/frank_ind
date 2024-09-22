<div class="card {{ $classPersonales }} card-outline">
    <div class="card-body">
        <h5 class="card-title">Datos Personales</h5>

        <div class="row card-text justify-content-end">
            <img class="rounded mr-4" src="{{ asset('img/web/personal.png') }}" width="100px" height="100px"
                 alt="Datos Personales">
        </div>

        <a class="card-link" style="cursor: pointer;" wire:click="irPersonal">
            <i class="fas fa-edit"></i> Verificar
        </a>
    </div>
</div>

<div class="card {{ $classLocalizacion }} card-outline">
    <div class="card-body">
        <h5 class="card-title">Datos de Localización</h5>

        <div class="row card-text justify-content-end">
            <img class="rounded mr-4" src="{{ asset('img/web/location-pin.png') }}" width="100px" height="100px"
                 alt="Datos de Localización">
        </div>

        <a class="card-link" style="cursor: pointer;" wire:click="irLocalizacion">
            <i class="fas fa-edit"></i> Verificar
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="card-title m-0">Descargar Registro</h5>
    </div>
    <div class="card-body">
        <p class="card-text text-justify">
            Para descargar tu planilla de registro primero debes llenas todos los datos incluidos el las
            secciones <b>Datos personales</b> y <b>Datos de Localización</b>.
        </p>
        <button type="button" class="btn btn-primary" wire:click="descargar" @if(!$completo) disabled @endif>
            <i class="fas fa-cloud-download-alt"></i> Descargar Planilla
        </button>
    </div>
</div>
