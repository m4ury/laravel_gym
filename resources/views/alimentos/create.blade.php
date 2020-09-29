@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            {{ Form::open(['action' => 'AlimentoController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
            <div class="form-group row">
                {!! Form::label('alimento', 'Alimento', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-10">
                    {!! Form::text('alimento_nombre', null, ['class' => 'form-control form-control-sm'.($errors->has('alimento_nombre') ? ' is-invalid' : ''), 'placeholder' =>
                    'nombre/porcion en gramos']) !!}
                    @if ($errors->has('alimento_nombre'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('alimento_nombre') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('calorias-proteinas', 'Cal./Prote.', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-5">
                    {!! Form::number('calorias',null, ['class' => 'form-control form-control-sm'.($errors->has('calorias') ? '
                    is-invalid' : ''), 'placeholder' => 'Cant. Calorias', 'step' => 'any']) !!}
                    @if ($errors->has('calorias'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('calorias') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-sm-5">
                    {!! Form::number('proteinas',null, ['class' => 'form-control form-control-sm'.($errors->has('proteinas') ? '
                    is-invalid' : ''), 'placeholder' => 'Cant. Proteinas', 'step' => 'any']) !!}
                    @if ($errors->has('proteinas'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('proteinas') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('carbo-fibras', 'Carb./Fibra.', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-5">
                    {!! Form::number('carbo',null, ['class' => 'form-control form-control-sm'.($errors->has('carbohidratos') ? '
                    is-invalid' : ''), 'placeholder' => 'Cant. Carbohidratos', 'step' => 'any']) !!}
                    @if ($errors->has('carbo'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('carbo') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-sm-5">
                    {!! Form::number('fibras',null, ['class' => 'form-control form-control-sm'.($errors->has('fibras') ? '
                    is-invalid' : ''), 'placeholder' => 'Cant. Fibras', 'step' => 'any']) !!}
                    @if ($errors->has('fibras'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('fibras') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('grasas', 'Grasa./Satu.', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-5">
                    {!! Form::number('grasas',null, ['class' => 'form-control form-control-sm'.($errors->has('grasas') ? '
                    is-invalid' : ''), 'placeholder' => 'Cant. Grasas', 'step' => 'any']) !!}
                    @if ($errors->has('grasas'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('grasas') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-sm-5">
                    {!! Form::number('grasas_satur',null, ['class' => 'form-control form-control-sm'.($errors->has('grasas_satur') ? '
                    is-invalid' : ''), 'placeholder' => 'Cant. Grasas Sat.', 'step' => 'any']) !!}
                    @if ($errors->has('grasas_satur'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('grasas_satur') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('grasas_otras', 'Mono./Poli.', ['class' => 'col-sm-2 col-form-label']) !!}
                <div class="col-sm-5">
                    {!! Form::number('mono',null, ['class' => 'form-control form-control-sm'.($errors->has('mono') ? '
                    is-invalid' : ''), 'placeholder' => 'Cant. Monoinsaturadas', 'step' => 'any']) !!}
                    @if ($errors->has('mono'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('mono') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-sm-5">
                    {!! Form::number('poli',null, ['class' => 'form-control form-control-sm'.($errors->has('poli') ? '
                    is-invalid' : ''), 'placeholder' => 'Cant. Grasas Polinsaturadas', 'step' => 'any']) !!}
                    @if ($errors->has('poli'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('poli') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block']) }}
                </div>
                <div class="col">
                    <a href="{{ url('alimentos') }}" style="text-decoration:none">
                        {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
                    </a>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection
