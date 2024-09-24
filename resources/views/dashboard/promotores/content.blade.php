<div class="row">
    <div class="col-md-4">
        @include('dashboard.promotores.cards')
    </div>
    <div class="col-md-8">

        <div class="@if($view != 'table') d-none @endif">
            @include('dashboard.promotores.table')
        </div>

        <div class="@if($view != 'show') d-none @endif">
            @include('dashboard.promotores.show')
        </div>

        <div class="@if($view != 'form') d-none @endif">
            @include('dashboard.promotores.form')
        </div>

    </div>
</div>




