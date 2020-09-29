@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-users-cog"></i>
                            Paciente
                        </h3>
                    </div>
                    @if(session()->has('info'))
                        <div id="alert" class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>{{ session('info') }}</strong>
                        </div>
                    @endif
                    <div class="card-body">
                        <h4>{{ $paciente->fullName() }}</h4>
                        <div class="row">
                            <div class="col-5 col-sm-3">
                                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                                     aria-orientation="vertical">
                                    <a class="nav-link active" id="vert-tabs-mensajes-tab" data-toggle="pill"
                                       href="#vert-tabs-mensajes" role="tab" aria-controls="vert-tabs-mensajes"
                                       aria-selected="true">Ultimo Mensaje</a>
                                    <a class="nav-link" id="vert-tabs-presupuestos-tab" data-toggle="pill"
                                       href="#vert-tabs-presupuestos" role="tab" aria-controls="vert-tabs-presupuestos"
                                       aria-selected="false">Presupuestos</a>
                                    <a class="nav-link" id="vert-tabs-images-tab" data-toggle="pill"
                                       href="#vert-tabs-images" role="tab" aria-controls="vert-tabs-images"
                                       aria-selected="false">Imagenes</a>
                                    <a class="nav-link" id="vert-tabs-abonos-tab" data-toggle="pill"
                                       href="#vert-tabs-abonos" role="tab" aria-controls="vert-tabs-abonos"
                                       aria-selected="false">Abonos</a>
                                </div>
                            </div>
                            <div class="col col-sm-9">
                                <div class="tab-content" id="vert-tabs-tabContent">
                                    <div class="tab-pane text-left fade show active" id="vert-tabs-mensajes"
                                         role="tabpanel" aria-labelledby="vert-tabs-mensajes-tab">

                                        {{--@include('mensaje.list_mensajes', $paciente)
                                        @if($paciente->mensajes->count() > 0)
                                            <a href="{{ route('mensajes', $paciente->id) }}"><span class="text-bold">Ver Todos los mensajes...</span></a>
                                        @else
                                            <p class="text-muted">No hay Mensajes aun, crea uno <i
                                                    class="far fa-laugh-wink fa-2x"></i></p>
                                        @endif--}}
                                    </div>
                                    <div class="tab-pane fade" id="vert-tabs-presupuestos" role="tabpanel"
                                         aria-labelledby="vert-tabs-presupuestos-tab">

                                        {{--@include('presupuesto.list_presupuestos', $paciente)
                                        @if($paciente->presupuestos->count() > 0)
                                            <a href="{{ route('presupuestos', $paciente->id) }}"><span
                                                    class="text-bold">Ver Todos los presupuestos...</span></a>
                                        @else
                                            <p class="text-muted">No hay Presupuestos aun, crea uno <i
                                                    class="far fa-smile-beam fa-2x"></i></p>
                                        @endif--}}
                                    </div>
                                    <div class="tab-pane fade" id="vert-tabs-images" role="tabpanel"
                                         aria-labelledby="vert-tabs-images-tab">
                                        {{--@include('paciente.list_images')--}}
                                    </div>
                                    <div class="tab-pane fade" id="vert-tabs-abonos" role="tabpanel"
                                         aria-labelledby="vert-tabs-abonos-tab">

                                        {{--@include('abono.list_abonos', $paciente)
                                        @if($paciente->abonos->count() > 0)
                                            <a href="{{ route('abonos', $paciente->id) }}"><span class="text-bold">Ver Todos los abonos...</span></a>
                                        @elseif(!$paciente->presupuestos->count())
                                            <p class="text-muted">No hay Presupuestos para el paciente seleccionado. <i
                                                    class="far fa-grimace fa-2x"></i></p>
                                        @endif--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
