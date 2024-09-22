<div class="row justify-content-center @if($view != 'show') d-none @endif">
    <div class="col-md-6">
        @include('web.components.show')
    </div>
</div>

<div class="row justify-content-center @if($view != 'personal') d-none @endif">
    <div class="col-md-6">
        @include('web.components.form_personales')
    </div>
</div>

<div class="row justify-content-center @if($view != 'localizacion') d-none @endif">
    <div class="col-md-6">
        @include('web.components.form_localizacion')
    </div>
</div>

{!! verSpinner() !!}
