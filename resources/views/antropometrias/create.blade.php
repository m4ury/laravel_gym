@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            {{ Form::open(['action' => 'AntropometriaController@store', 'method' => 'POST', 'class' => 'form-horizontal -sx-12 col-sm-12 col-lg-8']) }}
            <div class="form-group">
                <label for="">Paciente</label>
                <select name="paciente_id" class="form-control" id="select-paciente" required>
                    <option value=""> -- seleccione paciente --</option>
                    @foreach ($pacientes as $paciente)
                        <option value="{{ $paciente->id }}">
                            {{ $paciente->fullName() }} - {{ $paciente->rut }}
                        </option>
                    @endforeach
                </select>
                <p class="helper-block">
                </p>
            </div>
            <div class="form-group row">
                {!! Form::label('descripcion', 'Descripción', ['class' => 'col-sm-4 col-form-label']) !!}
                <div class="col-sm-12">
                    {!! Form::text('descripcion', null, ['class' => 'form-control form-control-sm'.($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' =>
                    'Descripción']) !!}
                    @if ($errors->has('descripcion'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('descripcion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('fecha', 'Fecha', ['class' => 'col-sm-3 col-form-label']) !!}
                <div class="col-sm-9">
                    {!! Form::date('fecha_examen', null, ['class' => 'form-control form-control-sm'.($errors->has('fecha_examen') ? ' is-invalid' : '')]) !!}
                    @if ($errors->has('fecha_examen'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('fecha_examen') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('peso_actual', 'Peso Actual', ['class' => 'col-sm-4 col-form-label']) !!}
                <div class="col-sm-8">
                    {!! Form::number('peso_actual', null, ['class' => 'form-control form-control-sm'.($errors->has('peso_actual') ? ' is-invalid' : ''), 'placeholder' => 'Peso en kg.']) !!}
                    @if ($errors->has('peso_actual'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('peso_actual') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 py-3">
                    {!! Form::number('triceps',null, ['class' => 'form-control form-control-sm'.($errors->has('triceps') ? '
                    is-invalid' : ''), 'placeholder' => 'Triceps', 'step' => 'any']) !!}
                    @if ($errors->has('triceps'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('triceps') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-sm-6">
                    {!! Form::number('subescapular',null, ['class' => 'form-control form-control-sm'.($errors->has('subescapular') ? '
                    is-invalid' : ''), 'placeholder' => 'Subescapular', 'step' => 'any']) !!}
                    @if ($errors->has('subescapular'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('subescapular') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 py-3">
                    {!! Form::number('suprailiaco',null, ['class' => 'form-control form-control-sm'.($errors->has('suprailiaco') ? '
                    is-invalid' : ''), 'placeholder' => 'Suprailiaco', 'step' => 'any']) !!}
                    @if ($errors->has('suprailiaco'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('suprailiaco') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-sm-6">
                    {!! Form::number('cuadriceps',null, ['class' => 'form-control form-control-sm'.($errors->has('cuadriceps') ? '
                    is-invalid' : ''), 'placeholder' => 'Cuadriceps', 'step' => 'any']) !!}
                    @if ($errors->has('cuadriceps'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('cuadriceps') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 py-3">
                    {!! Form::number('pantorrilla',null, ['class' => 'form-control form-control-sm'.($errors->has('pantorrilla') ? '
                    is-invalid' : ''), 'placeholder' => 'Pantorrilla', 'step' => 'any']) !!}
                    @if ($errors->has('pantorrilla'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('pantorrilla') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-sm-6">
                    {!! Form::number('abdominal',null, ['class' => 'form-control form-control-sm'.($errors->has('abdominal') ? '
                    is-invalid' : ''), 'placeholder' => 'Abdominal', 'step' => 'any']) !!}
                    @if ($errors->has('abdominal'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('abdominal') }}</strong>
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
                    <a href="{{ url('antropometrias') }}" style="text-decoration:none">
                        {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
                    </a>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('#select-paciente').select2({
                theme: "classic",
                placeholder: "Seleccione un Paciente",
                width: '100%'
            });
        });
    </script>
@endsection
