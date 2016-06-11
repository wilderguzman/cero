@extends('app')

@section('htmlheader_title')
    Medicamento
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Medicamento</div>

                <div class="panel-body">
                <div class="table-responsive">

    <h1>Medicamento {{ $medicamento->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $medicamento->id }}</td>
                </tr>
                <tr><th> {{ trans('medicamento.codigo') }} </th><td> {{ $medicamento->codigo }} </td></tr><tr><th> {{ trans('medicamento.nombre') }} </th><td> {{ $medicamento->nombre }} </td></tr><tr><th> {{ trans('medicamento.cantidad') }} </th><td> {{ $medicamento->cantidad }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('sis/medicamento/' . $medicamento->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Medicamento"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['sis/medicamento', $medicamento->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Medicamento',
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
