@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Dashboard'){{--Extenção do arquivo template--}}

@section('content'){{--Extenção do arquivo template--}}

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus eventos</h1>
</div>

<div class="col-md-10 offser-md-1 dashboard-events-container">
    @if(count($events) > 0)
    @else
    <p>Você ainda não tem eventos, <a href="/events/create">Criar evento</a></p>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Açoes</th>
            </tr>
        </thead>
    </table>
    <tbody>

        <tr>
            <th scope="row"></th>
            <td><a href=""</a></td>
        </tr>

    </tbody>

</div>

@endsection {{--Extenção do arquivo template--}}
