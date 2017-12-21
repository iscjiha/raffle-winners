<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administración de Ganadores</title>

    {{--Bootstrap--}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <style>
        body { padding: 20px }
    </style>
</head>
<body>

<div class="container-fluid">

    @include('partials.errors')

    @if (session('message'))
        <div class="alert alert-success">
            {!! session('message') !!}
        </div>
    @endif

    <div class="row">
        <div class="col-md-6">
            {{ Form::open(['route' => 'winners.store', 'autocomplete' => 'off', 'novalidate']) }}

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Datos de Ganador y Premio</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control input-lg', 'maxlength' => 255, 'placeholder' => 'Nombre de Ganador', 'required', 'autofocus']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('prize', null, ['id' => 'prize', 'class' => 'form-control input-lg', 'maxlength' => 255, 'placeholder' => 'Premio', 'required']) !!}
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-success">
                        <i class="glyphicon glyphicon-floppy-disk"></i> Guardar Ganador
                    </button>
                </div>
            </div>

            {{ Form::close() }}
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Ganadores</h3>
                </div>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Premio</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($winners as $winner)
                        <tr>
                            <td>{{ $winner->name }}</td>
                            <td>{{ $winner->prize }}</td>
                            <td class="text-center">
                                {!! Form::open(['route' => ['winners.destroy', $winner], 'method' => 'DELETE']) !!}
                                <button class="btn btn-danger btn-xs" onclick="return confirm('¿Seguro que desea eliminar este ganador?')">
                                    Borrar
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div> <!-- /.container -->

</body>
</html>