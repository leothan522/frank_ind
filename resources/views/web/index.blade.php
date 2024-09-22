@extends('web.layouts.master')

@section('title', 'Inicio')

@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">
            <!--Bienvenido-->
            <small>Registro Nacional de Promotores Deportivos</small>
        </h1>
    </div>
    {{--<div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Layout</a></li>
            <li class="breadcrumb-item active">Top Navigation</li>
        </ol>
    </div>--}}
@endsection

@section('content')
    @livewire('web.home-component')
@endsection

@section('js')
    <script>
        console.log('Hi!')
    </script>
@endsection
