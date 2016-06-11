@extends('app')

@section('htmlheader_title')
   Personal
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Personal </div>

                <div class="panel-body">
                <div class="table-responsive">

    <h1>Editar Personal {{ $personal->id }}</h1>

    {!! Form::model($personal, [
        'method' => 'PATCH',
        'url' => ['/sis/personal', $personal->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
                {!! Form::label('nombre', trans('personal.nombre'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('a_paterno') ? 'has-error' : ''}}">
                {!! Form::label('a_paterno', trans('personal.a_paterno'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('a_paterno', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('a_paterno', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('a_materno') ? 'has-error' : ''}}">
                {!! Form::label('a_materno', trans('personal.a_materno'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('a_materno', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('a_materno', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ci') ? 'has-error' : ''}}">
                {!! Form::label('ci', trans('personal.ci'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('ci', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('ci', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fecha_de_nac') ? 'has-error' : ''}}">
                {!! Form::label('fecha_de_nac', trans('personal.fecha_de_nac'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fecha_de_nac', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('fecha_de_nac', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('matricula') ? 'has-error' : ''}}">
                {!! Form::label('matricula', trans('personal.matricula'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('matricula', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('matricula', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
                {!! Form::label('telefono', trans('personal.telefono'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
                {!! Form::label('direccion', trans('personal.direccion'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Actulizar', ['class' => 'btn btn-primary form-control']) !!}
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
