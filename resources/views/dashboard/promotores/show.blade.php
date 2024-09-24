<div class="card card-navy">
    <div class="card-header">
        <h3 class="card-title">Ver Promotor</h3>

        <div class="card-tools">
            {{--<a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
            <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>--}}
            <i class="fas fa-user mr-2"></i>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <div class="mailbox-read-info">
            <h5 class="text-uppercase text-bold m-4">{{ $nombres }} {{ $apellidos }}</h5>
            <h6 class="ml-4 mr-4">
                {{--Email: --}}{{ $email }}
                <span class="mailbox-read-time float-right text-lowercase">
                    {{--15 Feb. 2015 11:03 PM--}}
                    {{ fechaEnLetras($created_at, "dddd D [de] MMMM [de] YYYY") }}
                    {{ getFecha($created_at, 'h:i a') }}
                </span>
            </h6>
        </div>
        <!-- /.mailbox-read-info -->
        <div class="mailbox-read-message">
            <div class="row">
                <div class="col-md-6">
                    <!-- Widget: user widget style 2 -->
                    <div class="card card-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-teal">
                            <div class="row card-text justify-content-center">
                                <img class="rounded mr-4" src="{{ asset('img/web/personal.png') }}" width="48px" height="48" alt="Datos de Localización">
                                <h5 class="widget-user-desc">Datos Personales</h5>
                            </div>
                        </div>
                        <div class="card-footer p-0">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <span class="nav-link">
                                        Cedula: <span class="float-right text-bold">{{ $cedula }}</span>
                                    </span>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link">
                                        Nombres: <span class="float-right text-bold text-capitalize">{{ $nombres }}</span>
                                    </span>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link">
                                        Apellidos: <span class="float-right text-bold text-capitalize">{{ $apellidos }}</span>
                                    </span>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link">
                                        Fecha de Nacimiento: <span class="float-right text-bold text-capitalize">{{ getFecha($nacimiento) }}</span>
                                    </span>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link">
                                        Edad: <span class="float-right text-bold text-capitalize">{{ getEdad($nacimiento) }} Años</span>
                                    </span>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link">
                                        Sexo: <span class="float-right text-bold text-capitalize">{{ $sexo }}</span>
                                    </span>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link">
                                        Teléfono Móvil: <span class="float-right text-bold text-uppercase">{{ $telefono_1 }}</span>
                                    </span>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link">
                                        Teléfono Habitación: <span class="float-right text-bold text-capitalize">{{ $telefono_2 ?? '-' }}</span>
                                    </span>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link">
                                        Estado Civil: <span class="float-right text-bold text-capitalize">{{ $estado_civil }}</span>
                                    </span>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link">
                                        Nivel Académico: <span class="float-right text-bold text-capitalize">
                                            @if($nivel_academico)
                                                {{ listarNivelesAcademicos($nivel_academico) }}
                                            @else
                                                -
                                            @endif
                                        </span>
                                    </span>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link">
                                        Facebook: <span class="float-right text-bold text-capitalize">{{ $facebook ?? '-' }}</span>
                                    </span>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link">
                                        Instagram: <span class="float-right text-bold text-capitalize">{{ $instagram ?? '-' }}</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <div class="col-md-6">
                    <!-- Widget: user widget style 2 -->
                    <div class="card card-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-teal">
                            <div class="row card-text justify-content-center">
                                <img class="rounded mr-4" src="{{ asset('img/web/location-pin.png') }}" width="48px" height="48" alt="Datos de Localización">
                                <h5 class="widget-user-desc">Datos de Localización</h5>
                            </div>
                        </div>
                        <div class="card-footer p-0">
                            <ul class="nav flex-column">
                                @if($verLocalizacion)
                                    <li class="nav-item">
                                        <span class="nav-link">
                                            Estado: <span class="float-right text-bold text-uppercase">{{ $estado }}</span>
                                        </span>
                                    </li>
                                    <li class="nav-item">
                                        <span class="nav-link">
                                            Municipio: <span class="float-right text-bold text-uppercase">{{ $municipio }}</span>
                                        </span>
                                    </li>
                                    <li class="nav-item">
                                        <span class="nav-link">
                                            Parroquia: <span class="float-right text-bold text-uppercase">{{ $parroquia }}</span>
                                        </span>
                                    </li>
                                    <li class="nav-item">
                                        <span class="nav-link">
                                            Dirección: <span class="float-right text-bold text-uppercase">{{ $direccion }}</span>
                                        </span>
                                    </li>
                                    <li class="nav-item">
                                        <span class="nav-link">
                                            ¿Tiene Acceso a Internet? <span class="float-right text-bold text-uppercase">{{ $acceso_internet }}</span>
                                        </span>
                                    </li>
                                    <li class="nav-item">
                                        <span class="nav-link">
                                            ¿Posee Dispositivo Electronico?<span class="float-right text-bold text-uppercase">{{ $dispositivo_electronico }}</span>
                                        </span>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <span class="nav-link">
                                            <i class="far fa-circle text-danger"></i>
                                            Localización Pendiente
                                        </span>
                                    </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
            </div>

        </div>
        <!-- /.mailbox-read-message -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer bg-white">
        <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
            @if($verLocalizacion)
                <li>
                    <span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span>
                    <div class="mailbox-attachment-info">
                        {{--<a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Sep2014-report.pdf</a>--}}
                        <span class="mailbox-attachment-size clearfix mt-1">
                      <span>Descargar Planilla</span>
                      <a href="{{ route('web.planilla', $rowquid ?? '') }}" target="_blank" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                    </span>
                    </div>
                </li>
            @endif
            {{--<li>
                <span class="mailbox-attachment-icon has-img"><img src="../../dist/img/photo1.png" alt="Attachment"></span>

                <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i> photo1.png</a>
                    <span class="mailbox-attachment-size clearfix mt-1">
                          <span>2.67 MB</span>
                          <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                        </span>
                </div>
            </li>--}}
        </ul>
    </div>
    <!-- /.card-footer -->
    {{--<div class="card-footer">
        <div class="float-right">
            <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Reply</button>
            <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Forward</button>
        </div>
        <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete</button>
        <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
    </div>--}}
    <!-- /.card-footer -->
</div>
<!-- /.card -->
