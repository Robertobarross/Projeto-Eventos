@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Projeto-Eventos'){{--Extenção do arquivo template--}}

@section('content'){{--Extenção do arquivo template--}}

        <h1 class="titulo">Home aula 14</h1>
        <img src="img/img-event.jpg" alt="banner">

        @foreach ($eventos as $evento)
        <p>{{ $evento->titulo }} -- {{ $evento->descricao }} -- {{ $evento->cidade }}</p>{{--Declarando variáveis na página home--}}
        @endforeach

@endsection {{--Extenção do arquivo template--}}
