@extends('app')

@section('htmlheader_title')
    Medico
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Medico</div>

                <div class="panel-body">
                <div class="table-responsive">

    <h1>Medico {{ $medico->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $medico->id }}</td>
                </tr>
                <tr><th> {{ trans('medico.horario') }} </th><td> {{ $medico->horario }} </td></tr><tr><th> {{ trans('medico.especialidad') }} </th><td> {{ $medico->especialidad }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('sis/medico/' . $medico->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Medico"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['sis/medico', $medico->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Medico',
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
