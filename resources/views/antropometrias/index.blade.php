@extends('layouts.master')
@section('content')

    <div class="col-md-12">
        @if(session()->has('success'))
            <div id="alert" class="alert alert-success text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
    </div>
    <div class="col-sm-6">
        <a class="btn bg-gradient-success btn-sm my-3" title="Nueva Antropometria" href="{{ route('antropometrias.create') }}">
            <i class="fas fa-user-plus">

            </i>
            Nueva antropometria
        </a>
    </div>
    <div class="col-md-12 table-responsive">
        <table class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Paciente</th>
                <th>Descripción</th>
                <th>Fecha examen</th>
                <th>% Grasa</th>
                <th>Peso graso</th>
                <th>Peso magro</th>

                <th colspan="2" class="text-center">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($antropometrias as $antropometria)
                <tr>
                    <td>{{ $antropometria->paciente->fullName() }} </td>
                    <td><a href="{{ route('antropometrias.show', $antropometria->id) }}">{{ $antropometria->descripcion }}</a></td>
                    <td>{{ \Carbon\Carbon::parse($antropometria->fecha_examen)->format('d-m-Y') }}</td>
                    <td>{{ $antropometria->porcentaje_grasa }}</td>
                    <td>{{ $antropometria->peso_graso }}</td>
                    <td>{{ $antropometria->peso_magro }}</td>
                    <td>
                        <a class="btn bg-gradient-secondary btn-sm" data-toggle="tooltip" data-placement="bottom"
                           title="Editar"
                           href="{{ route('antropometrias.edit', $antropometria->id) }}"><i class="fas fa-pen"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $antropometrias->links() }}
    </div>
@endsection
