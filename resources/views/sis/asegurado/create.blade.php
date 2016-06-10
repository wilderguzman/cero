@extends('app')

@section('htmlheader_title')
    Asegurado 
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Asegurado </div>

                <div class="panel-body">
                <div class="table-responsive">

    <h1>Crear Nuevo Asegurado</h1>
    <hr/>

    {!! Form::open(['url' => '/sis/asegurado', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
                {!! Form::label('nombre', trans('asegurado.nombre'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('a_paterno') ? 'has-error' : ''}}">
                {!! Form::label('a_paterno', trans('asegurado.a_paterno'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('a_paterno', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('a_paterno', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('a_materno') ? 'has-error' : ''}}">
                {!! Form::label('a_materno', trans('asegurado.a_materno'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('a_materno', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('a_materno', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('c_i') ? 'has-error' : ''}}">
                {!! Form::label('c_i', trans('asegurado.c_i'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('c_i', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('c_i', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('beneficiario_ci') ? 'has-error' : ''}}">
                {!! Form::label('beneficiario_ci', trans('asegurado.beneficiario_ci'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('beneficiario_ci', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('beneficiario_ci', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_de_nac') ? 'has-error' : ''}}">
                {!! Form::label('fecha_de_nac', trans('asegurado.fecha_de_nac'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fecha_de_nac', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('fecha_de_nac', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('sexo') ? 'has-error' : ''}}">
                {!! Form::label('sexo', trans('asegurado.sexo'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('sexo', '1') !!} Masculino</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('sexo', '0', true) !!} Feminino</label>
            </div>
                    {!! $errors->first('sexo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('grado') ? 'has-error' : ''}}">
                {!! Form::label('grado', trans('asegurado.grado'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('grado', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('grado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fuerza') ? 'has-error' : ''}}">
                {!! Form::label('fuerza', trans('asegurado.fuerza'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('fuerza', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('fuerza', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('titular') ? 'has-error' : ''}}">
                {!! Form::label('titular', trans('asegurado.titular'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('titular', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('titular', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tipo_de_asegurado') ? 'has-error' : ''}}">
                {!! Form::label('tipo_de_asegurado', trans('asegurado.tipo_de_asegurado'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('tipo_de_asegurado', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('tipo_de_asegurado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('n_historial') ? 'has-error' : ''}}">
                {!! Form::label('n_historial', trans('asegurado.n_historial'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('n_historial', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('n_historial', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Crear', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
