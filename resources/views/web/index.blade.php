@extends('web.layouts.master')

@section('title', 'Inicio')

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

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
    <script src="{{ asset('vendor/select2/js/select2.full.js') }}"></script>
    <script src="{{ asset('vendor/select2/js/i18n/es.js') }}"></script>
    <script>

        function select_2(id, data, event) {

            let html = '<div class="input-group-prepend">' +
                '<span class="input-group-text">' +
                '<i class="far fa-bookmark"></i>' +
                '</span>' +
                '</div>' +
                '<select class="custom-control custom-select" id="'+ id +'"></select>';

            $("#div_" + id).html(html);

            $("#" + id).select2({
                theme: 'bootstrap4',
                data: data,
                placeholder: 'Seleccione'
            })
                .val(null)
                .trigger('change')
                .on('change', function () {
                    let value = $(this).val();
                    Livewire.dispatch(event, { rowquid: value });
                });
        }

        Livewire.on('initSelectEstados', ({ data }) => {
            select_2('select_estado', data, 'getSelectEstados');
        });

        Livewire.on('setSelectEstados', ({ rowquid }) => {
            $("#select_estado").val(rowquid).trigger('change');
        });

        Livewire.on('initSelectMunicipios', ({ data }) => {
            select_2('select_municipio', data, 'getSelectMunicipios');
        });

        Livewire.on('setSelectMunicipios', ({ rowquid }) => {
            $("#select_municipio").val(rowquid).trigger('change');
        });

        Livewire.on('initSelectParroquias', ({ data}) => {
            select_2('select_parroquia', data, 'getSelectParroquias');
        });

        Livewire.on('setSelectParroquias', ({ rowquid }) => {
            $("#select_parroquia").val(rowquid).trigger('change');
        });


        $(document).on('select2:open', () => {
            document.querySelector('.select2-search__field').focus();
        });

        console.log('Hi!')
    </script>
@endsection
