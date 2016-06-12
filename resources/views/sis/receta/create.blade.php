@extends('app')

@section('htmlheader_title')
    Recetum 
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Recetum </div>

                <div class="panel-body">
                <div class="table-responsive">

    <h1>Crear Nuevo Recetum</h1>
    <hr/>

    {!! Form::open(['url' => '/sis/receta', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('n_receta') ? 'has-error' : ''}}">
                {!! Form::label('n_receta', trans('receta.n_receta'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('n_receta', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('n_receta', '<p class="help-block">:message</p>') !!}
                </div>
            </div>





             <div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
                {!! Form::label('medico', trans('receta.medico'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">

                {!! Form::hidden('medico_id', $user=Auth::user()->id , ['class' => 'form-control']) !!}

                    {!! Form::label('medico', $user=Auth::user()->name , ['class' => 'form-control', 'required' => 'required','readonly' => 'true']) !!}
                    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('grupo') ? 'has-error' : ''}}">
                {!! Form::label('asegurado', trans('receta.asegurado'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('asegurado_id', $asegurado, null, ['class' => 'form-control']) !!}
                    {!! $errors->first('asegurado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


            <div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
                {!! Form::label('fecha', trans('receta.fecha'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fecha', $datem, ['class' => 'form-control', 'required' => 'required','readonly' => 'true']) !!}
                    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('modo_uso') ? 'has-error' : ''}}">
                {!! Form::label('modo_uso', trans('receta.modo_uso'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('modo_uso', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('modo_uso', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('estado_receta') ? 'has-error' : ''}}">
                {!! Form::label('estado_receta', trans('receta.estado_receta'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('estado_receta', [ 'registrado' => 'Registrar', 'borrador' => 'Borrador' ],null, ['class' => 'form-control']) !!}


                    
                    {!! $errors->first('estado_receta', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('f_ini_tra') ? 'has-error' : ''}}">
                {!! Form::label('f_ini_tra', trans('receta.f_ini_tra'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('f_ini_tra', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('f_ini_tra', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('f_fin_tra') ? 'has-error' : ''}}">
                {!! Form::label('f_fin_tra', trans('receta.f_fin_tra'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('f_fin_tra', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('f_fin_tra', '<p class="help-block">:message</p>') !!}
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
