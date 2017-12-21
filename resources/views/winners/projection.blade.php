<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ganadores</title>

    {{--Bootstrap--}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <style>
        body {
            background: url('img/background_projection_winners.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family: 'Mountains of Christmas', cursive;
            text-shadow: 2px 0 0 black;
        }

        h1 {
            animation: blinker 2s linear infinite;
            color: yellow;
            font-size: 10em;
        }

        h2 {
            color: white;
            font-size: 6em;
        }

        h2 span {
            color: gold;
            font-size: .5em;
        }

        h3 {
            color: yellow;
            font-size: 2em;
        }

        h3 span { color: lightgray }

        @keyframes blinker {
            50% { opacity: 0; }
        }
    </style>
</head>
<body>

@if($winners->count())
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <h1>¡Felicidades!</h1>
                <h2>
                    {{ $winners->first()->name }}
                    <span>({{ $winners->first()->prize }})</span>
                </h2>
                <hr>
                @if($winners->get(1))
                    <h3>
                        Ganador Anterior:
                        <span>
                        {{ $winners->get(1)->name }} ({{ $winners->get(1)->prize }})
                    </span>
                    </h3>
                @endif
            </div>
        </div>
    </div>
@else
    <h1>
        ¡Bienvenidos!
    </h1>
@endif

<script>
    setTimeout(function() {
        window.location.reload(1);
    }, 10000);
</script>

</body>
</html>