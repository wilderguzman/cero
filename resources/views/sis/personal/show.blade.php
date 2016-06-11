@extends('app')

@section('htmlheader_title')
    Personal
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Personal</div>

                <div class="panel-body">
                <div class="table-responsive">

    <h1>Personal {{ $personal->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $personal->id }}</td>
                </tr>
                <tr><th> {{ trans('personal.nombre') }} </th><td> {{ $personal->nombre }} </td></tr><tr><th> {{ trans('personal.a_paterno') }} </th><td> {{ $personal->a_paterno }} </td></tr><tr><th> {{ trans('personal.a_materno') }} </th><td> {{ $personal->a_materno }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('sis/personal/' . $personal->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Personal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['sis/personal', $personal->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Personal',
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
