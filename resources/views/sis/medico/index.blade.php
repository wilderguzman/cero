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

    <h1>Medico <a href="{{ url('/sis/medico/create') }}" class="btn btn-primary btn-xs" title="Add New Medico"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> {{ trans('medico.horario') }} </th><th> {{ trans('medico.especialidad') }} </th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($medico as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->horario }}</td><td>{{ $item->especialidad }}</td>
                    <td>
                        <a href="{{ url('/sis/medico/' . $item->id) }}" class="btn btn-success btn-xs" title="View Medico"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/sis/medico/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Medico"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/sis/medico', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Medico" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Medico',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $medico->render() !!} </div>
    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
