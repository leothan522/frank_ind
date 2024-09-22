<div class="card card-navy">

    <div class="card-header">
        <h3 class="card-title">Datos Personales</h3>
        <div class="card-tools">
            {{--<button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
            </button>--}}
            {{--<span class="btn btn-tool"><i class="fas fa-list"></i></span>--}}
            <button type="button" class="btn btn-tool" wire:click="limpiar">
                <i class="fas fa-arrow-circle-left"></i> Volver
            </button>
        </div>
    </div>

    <div class="card-body">


        <form {{--wire:submit="store"--}}>

            <div class="form-group">
                <label for="name">Nombre:</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                    </div>
                    <input type="text" class="form-control" wire:model="nombre" placeholder="Nombre">
                    @error('nombre')
                    <span class="col-sm-12 text-sm text-bold text-danger">
                        <i class="icon fas fa-exclamation-triangle"></i>
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group text-right">
                <button type="submit" class="btn btn-block btn-success">
                    <i class="fas fa-save"></i> Guardar
                </button>
            </div>

        </form>


    </div>

    {{--{!! verSpinner() !!}--}}

</div>
