@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <div class="row justify-content-md-center">
            <div class="col-sm-12 col-md-4">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
            </div>
        </div>
    </form>
</div>
<div id="events-container">
    @if($search)
    <h2>Buscando por: {{$search}}</h2>
    @else
    <h2>Próximos eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    @endif
    <div class="row">
        @foreach($events as $event)
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
            <div class="card h-100">
                <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="card-img">
                <div class="card-body">
                    <p class="card-date">{{date('d/m/Y',strtotime($event->date))}}</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">{{ count($event->users) }} Participante(s)</p>
                    <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @if(count($events) == 0 && $search)
    <p>Não foi possível encontrar nenhum evento com {{$search}}! <a href="/">Ver todos</a></p>
    @elseif(count($events) == 0)
    <p>Não há eventos disponíveis</p>
    @endif
</div>



</div>


@endsection
