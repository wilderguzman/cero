@extends('app')

@section('htmlheader_title')
   Medico
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Medico </div>

                <div class="panel-body">
                <div class="table-responsive">

    <h1>Editar Medico {{ $medico->id }}</h1>

    {!! Form::model($medico, [
        'method' => 'PATCH',
        'url' => ['/sis/medico', $medico->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('horario') ? 'has-error' : ''}}">
                {!! Form::label('horario', trans('medico.horario'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('time', 'horario', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('horario', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('especialidad') ? 'has-error' : ''}}">
                {!! Form::label('especialidad', trans('medico.especialidad'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('especialidad', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('especialidad', '<p class="help-block">:message</p>') !!}
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
