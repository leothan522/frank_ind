<div class="card card-navy">

    <div class="card-header">
        <h3 class="card-title">Datos de Localización</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" wire:click="limpiar">
                <i class="fas fa-arrow-circle-left"></i> Volver
            </button>
        </div>
    </div>

    <div class="card-body">


        <form wire:submit="saveLocalizacion">


            <div class="form-group">
                <label for="name">Estado:</label>
                <div wire:ignore>
                    <div class="input-group mb-3" id="div_select_estado">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                        </div>
                        <select class="custom-control custom-select">
                            <option>Seleccione</option>
                        </select>
                    </div>
                </div>
                @error('estados_id')
                <span class="col-sm-12 text-sm text-bold text-danger">
                    <i class="icon fas fa-exclamation-triangle"></i>
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">Municipio:</label>
                <div wire:ignore>
                    <div class="input-group mb-3" id="div_select_municipio">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                        </div>
                        <select class="custom-control custom-select">
                            <option>Seleccione</option>
                        </select>
                    </div>
                </div>
                @error('municipios_id')
                <span class="col-sm-12 text-sm text-bold text-danger">
                    <i class="icon fas fa-exclamation-triangle"></i>
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">Parroquia:</label>
                <div wire:ignore>
                    <div class="input-group mb-3" id="div_select_parroquia">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                        </div>
                        <select class="custom-control custom-select">
                            <option>Seleccione</option>
                        </select>
                    </div>
                </div>
                @error('parroquias_id')
                <span class="col-sm-12 text-sm text-bold text-danger">
                    <i class="icon fas fa-exclamation-triangle"></i>
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">Dirección:</label>
                <div class="input-group">
                    <textarea class="form-control" wire:model="direccion" placeholder="Dirección"></textarea>
                    @error('direccion')
                    <span class="col-sm-12 text-sm text-bold text-danger">
                        <i class="icon fas fa-exclamation-triangle"></i>
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="name">¿Tienes Acceso a Internet?</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                    </div>
                    <select class="custom-control custom-select" wire:model="acceso_internet">
                        <option value="">Seleccione</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                    @error('acceso_internet')
                    <span class="col-sm-12 text-sm text-bold text-danger">
                        <i class="icon fas fa-exclamation-triangle"></i>
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="name">¿Posees Dispositivo Electronico?</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                    </div>
                    <select class="custom-control custom-select" wire:model="dispositivo_electronico">
                        <option value="">Seleccione</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                    @error('dispositivo_electronico')
                    <span class="col-sm-12 text-sm text-bold text-danger">
                        <i class="icon fas fa-exclamation-triangle"></i>
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group text-right">
                @if($localizacion_id)
                    <button type="submit" class="btn btn-block btn-primary">
                        <i class="fas fa-save"></i> Actualizar
                    </button>
                @else
                    <button type="submit" class="btn btn-block btn-success">
                        <i class="fas fa-save"></i> Guardar
                    </button>
                @endif
            </div>

        </form>


    </div>

    {{--{!! verSpinner() !!}--}}

</div>
