@extends('template'){{--Extenção do arquivo template--}}

@section('title', $event->titulo){{--Extenção do arquivo template--}}

@section('content'){{--Extenção do arquivo template--}}

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->titulo }}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $event->titulo }}</h1>
            <p class="event-cidade"><icon-icon name="location-outline">{{ $event->cidade }}</icon-icon></p>
            <p class="events-participants"><icon-icon name="people-outline"></icon-icon> X participantes </p>
            <p class="event-owner"><icon-icon name="star-outline"></icon-icon> Dono do Evento </p>
            <a href="#" class="btn btn-primary" id="event-submit"> Confirmar Presença </a>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre o Evento:</h3>
            <p class="event-description">{{ $event->description }}</p>
        </div>
    </div>
</div>


@endsection {{--Extenção do arquivo template--}}
