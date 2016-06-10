@extends('app')

@section('htmlheader_title')
    Asegurado
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Asegurado</div>

                <div class="panel-body">
                <div class="table-responsive">

    <h1>Asegurado {{ $asegurado->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $asegurado->id }}</td>
                </tr>
                <tr><th> {{ trans('asegurado.nombre') }} </th><td> {{ $asegurado->nombre }} </td></tr><tr><th> {{ trans('asegurado.a_paterno') }} </th><td> {{ $asegurado->a_paterno }} </td></tr><tr><th> {{ trans('asegurado.a_materno') }} </th><td> {{ $asegurado->a_materno }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('sis/asegurado/' . $asegurado->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Asegurado"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['sis/asegurado', $asegurado->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Asegurado',
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
