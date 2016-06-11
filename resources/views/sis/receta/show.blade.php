@extends('app')

@section('htmlheader_title')
    Recetum
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Recetum</div>

                <div class="panel-body">
                <div class="table-responsive">

    <h1>Recetum {{ $recetum->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $recetum->id }}</td>
                </tr>
                <tr><th> {{ trans('receta.n_receta') }} </th><td> {{ $recetum->n_receta }} </td></tr><tr><th> {{ trans('receta.fecha') }} </th><td> {{ $recetum->fecha }} </td></tr><tr><th> {{ trans('receta.modo_uso') }} </th><td> {{ $recetum->modo_uso }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('sis/receta/' . $recetum->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Recetum"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['sis/receta', $recetum->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Recetum',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
