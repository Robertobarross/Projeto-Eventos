@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Projeto-Eventos'){{--Extenção do arquivo template--}}

@section('content'){{--Extenção do arquivo template--}}

        <h1 class="titulo">Home aula 19</h1>

        <div id="search-container" class="col-md-12">
               <h1>Busque um evento</h1>
               <form action="">
               <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
               </form>
        </div>

        <div id="eventos-container" class="col-md-12">
                <h2>Proximos eventos</h2>
                <p class="subtitulo">Veja os eventos dos próximos dias!</p>
                <div id="cards-container" class="row">
                    @foreach ($events as $event)
                    <div class="card col-md-2">
                        <img src="/img/events/{{ $event->image }}" alt="{{ $event->titulo }}">{{--img/img-event.jpg--}}
                        </div>
                        <div class="card-body">
                        <p class="card-date"></p>
                        <h5 class="card-title">{{ $event->titulo }}</h5>
                        <p class="card-participantes">X participantes</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                        </div>
                        </div>
                    @endforeach
                </div>
        </div>



@endsection {{--Extenção do arquivo template--}}
