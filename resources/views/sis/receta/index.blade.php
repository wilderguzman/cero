@extends('app')

@section('htmlheader_title')
   Receta 
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Receta </div>

                <div class="panel-body">
                <div class="table-responsive">

    <h1>Receta <a href="{{ url('/sis/receta/create') }}" class="btn btn-primary btn-xs" title="Add New Recetum"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> {{ trans('receta.n_receta') }} </th><th> {{ trans('receta.fecha') }} </th><th> {{ trans('receta.modo_uso') }} </th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($receta as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->n_receta }}</td><td>{{ $item->fecha }}</td><td>{{ $item->modo_uso }}</td>
                    <td>
                        <a href="{{ url('/sis/receta/' . $item->id) }}" class="btn btn-success btn-xs" title="View Recetum"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/sis/receta/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Recetum"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/sis/receta', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Recetum" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Recetum',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $receta->render() !!} </div>
    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
