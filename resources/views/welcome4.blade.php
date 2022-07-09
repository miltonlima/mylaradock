<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <h1>Algum título</h1>
        <img src="/img/palestra1.jpg" alt="">
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
