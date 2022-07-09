<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <h1>Algum título</h1>
        @if(10 > 5)
        <p>A condição é true</p>
        @endif

        @if($nome == "Pedro")
        <p>O nome é Pedro</p>
        @elseif($nome == "Milton")
        <p>O nome é {{$nome}} e tem idade {{$idade}}, e trabalha como {{$profissao}}. </p>
        @else
        <p>O nome não é Pedro</p>
        @endif

        @for($i = 0 ; $i < count($arr) ; $i++)
        <p>{{ $arr[$i]}} - {{$i}} </p>
            @if($i == 2)
                <p>O i é 2</p>
            @endif
        @endfor

        @foreach($nomes as $nome)
            <p> {{$loop->index}} </p>
            <p> {{$nome}} </p>
        @endforeach

        @php
            $name = "José";
            echo $name;    
        @endphp
        <!-- Comentário -->
        {{-- Este é o comentário do Blade --}}
    </body>
</html>
