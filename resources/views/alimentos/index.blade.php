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
        <a class="btn bg-gradient-success btn-sm my-3" title="Nuevo Alimento" href="{{ route('alimentos.create') }}">
            <i class="fas fa-apple-alt">

            </i>
            Nuevo Alimento
        </a>
    </div>
    <div class="col-md-12 table-responsive">
        <table class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Alimento</th>
                <th>Calorias</th>
                <th>Proteinas</th>
                <th>Carbohidratos</th>
                <th>Grasas</th>
                <th>Fibra</th>
                <th>Grasas Poli.</th>
                <th>Grasas Mono.</th>
                <th>Grasas Sat.</th>
                <th colspan="2" class="text-center">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($alimentos as $alimento)
                <tr>
                    <td><a href="{{ route('alimentos.show', $alimento->id) }}">{{ $alimento->rut }}</a></td>
                    <td>{{ $alimento->alimento_nombre }}</td>
                    <td>{{ $alimento->calorias }}</td>
                    <td>{{ $alimento->proteinas }}</td>
                    <td>{{ $alimento->carbohidratos }}</td>
                    <td>{{ $alimento->grasas }}</td>
                    <td>{{ $alimento->fibra }}</td>
                    <td>{{ $alimento->grasas_poli }}</td>
                    <td>{{ $alimento->grasas_mono }}</td>
                    <td>{{ $alimento->grasas_satur }}</td>

                    <td>
                        <a class="btn bg-gradient-secondary btn-sm" data-toggle="tooltip" data-placement="bottom"
                           title="Editar"
                           href="{{ route('alimentos.edit', $alimento->id) }}"><i class="fas fa-pen"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $alimentos->links() }}
    </div>
@endsection
