@extends('web._export.master_pdf')

@section('title', 'Planilla Promotor')

@section('content')

    <div class="row mb-1">
        <div class="col-12 text-center">
            <h2 class="m-0">
                <!--Bienvenido-->
                <small>Registro Nacional de Promotores Deportivos</small>
            </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-right">
            {!! qrCodeGenerate($texto) !!}
        </div>
        <div class="col-12 text-center">
            <h4>Planilla de Registro</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-11">


            <div class="card card-navy">

                {{--<div class="card-header">
                    <h3 class="card-title"><b>Datos Personales</b></h3>
                </div>--}}

                <div class="card-body">

                    <label><b>Datos Personales</b></label>

                    <div class="form-group">
                        <label for="name">Cedula:</label>
                        <label class="form-control text-uppercase">{{ $promotor->cedula }}</label>
                    </div>

                    <div class="form-group">
                        <label for="name">Nombres:</label>
                        <label class="form-control text-uppercase">{{ $promotor->nombres }}</label>
                    </div>

                    <div class="form-group">
                        <label for="name">Apellidos:</label>
                        <label class="form-control text-uppercase">{{ $promotor->apellidos }}</label>
                    </div>

                    <div class="form-group">
                        <label for="name">Fecha de Nacimiento:</label>
                        <label class="form-control text-uppercase">
                            {{ getFecha($promotor->nacimiento) }}
                            <span class="float-right">({{ getEdad($promotor->nacimiento) }} AÑOS)</span>
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="name">Sexo:</label>
                        <label class="form-control text-uppercase">{{ $promotor->sexo }}</label>
                    </div>

                    <div class="form-group">
                        <label for="name">Correo Electronico:</label>
                        <label class="form-control text-lowercase">{{ $user->email }}</label>
                    </div>

                    <div class="form-group">
                        <label for="name">Teléfonos:</label>
                        <label class="form-control">
                            {{ $promotor->telefono_1 }}
                            @if($promotor->telefono_2)
                                / {{ $promotor->telefono_2 }}
                            @endif
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="name">Estado Civil:</label>
                        <label class="form-control text-uppercase">{{ $promotor->estado_civil }}</label>
                    </div>

                    <br>

                    <div class="form-group">
                        <label for="name">Nivel Academico:</label>
                        <label class="form-control text-uppercase">{{ listarNivelesAcademicos($promotor->nivel_academico) }}</label>
                    </div>

                    <div class="form-group">
                        <label for="name">¿Eres Profesional?</label>
                        <label class="form-control text-uppercase">{{ $promotor->profesional }}</label>
                    </div>

                    <div class="form-group">
                        <label for="name">Facebook:</label>
                        <label class="form-control text-uppercase">{{ $promotor->facebook ?? '-' }}</label>
                    </div>

                    <div class="form-group">
                        <label for="name">Instagram:</label>
                        <label class="form-control text-uppercase">{{ $promotor->instagram ?? '-' }}</label>
                    </div>

                    <div class="form-group">
                        <label for="name">Pagína Web:</label>
                        <label class="form-control text-uppercase">{{ $promotor->pagina_web ?? '-' }}</label>
                    </div>

                    <label><b>Datos de Localización</b></label>

                    <div class="form-group">
                        <label for="name">Estado:</label>
                        <label class="form-control text-uppercase">{{ $localizacion->estado->nombre }}</label>
                    </div>

                    <div class="form-group">
                        <label for="name">Municipio:</label>
                        <label class="form-control text-uppercase">{{ $localizacion->municipio->nombre }}</label>
                    </div>

                    <div class="form-group">
                        <label for="name">Parroquia:</label>
                        <label class="form-control text-uppercase">{{ $localizacion->parroquia->nombre }}</label>
                    </div>

                    <div class="form-group">
                        <label for="name">Dirección:</label>
                        <label class="form-control text-uppercase text-wrap">{{ $localizacion->direccion }}</label>
                    </div>

                    <div class="form-group">
                        <label for="name">¿Tienes Acceso a Internet?</label>
                        <label class="form-control text-uppercase">{{ $localizacion->acceso_internet }}</label>
                    </div>

                    <div class="form-group">
                        <label for="name">¿Posees Dispositivo Electronico?</label>
                        <label class="form-control text-uppercase">{{ $localizacion->dispositivo_electronico}}</label>
                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
