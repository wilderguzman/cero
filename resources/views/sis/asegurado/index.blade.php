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

    <h1>Asegurado <a href="{{ url('/sis/asegurado/create') }}" class="btn btn-primary btn-xs" title="Add New Asegurado"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> {{ trans('asegurado.nombre') }} </th><th> {{ trans('asegurado.a_paterno') }} </th><th> {{ trans('asegurado.a_materno') }} </th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($asegurado as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre }}</td><td>{{ $item->a_paterno }}</td><td>{{ $item->a_materno }}</td>
                    <td>
                        <a href="{{ url('/sis/asegurado/' . $item->id) }}" class="btn btn-success btn-xs" title="View Asegurado"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/sis/asegurado/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Asegurado"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/sis/asegurado', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Asegurado" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Asegurado',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $asegurado->render() !!} </div>
    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
