@extends('app')

@section('htmlheader_title')
   Medicamento 
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Medicamento </div>

                <div class="panel-body">
                <div class="table-responsive">

    <h1>Medicamento <a href="{{ url('/sis/medicamento/create') }}" class="btn btn-primary btn-xs" title="Add New Medicamento"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> {{ trans('medicamento.codigo') }} </th><th> {{ trans('medicamento.nombre') }} </th><th> {{ trans('medicamento.cantidad') }} </th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($medicamento as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->codigo }}</td><td>{{ $item->nombre }}</td><td>{{ $item->cantidad }}</td>
                    <td>
                        <a href="{{ url('/sis/medicamento/' . $item->id) }}" class="btn btn-success btn-xs" title="View Medicamento"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/sis/medicamento/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Medicamento"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/sis/medicamento', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Medicamento" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Medicamento',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $medicamento->render() !!} </div>
    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
