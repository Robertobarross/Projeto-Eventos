@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Dashboard'){{--Extenção do arquivo template--}}

@section('content'){{--Extenção do arquivo template--}}

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus eventos</h1>
</div>

{{--Criando div com a tabela de inserção de dados--}}
<div class="col-md-10 offser-md-1 dashboard-events-container">
    @if(count($events) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Açoes</th>
            </tr>
        </thead>

    <tbody>
        @foreach ($events as $event){{--Declarando as variáveis--}}
        <tr>
            <td scropt="row">{{ $loop->index + 1 }}</td>
            <td><a href="/events/{{ $event->id }}">{{ $event->titulo }}</a></td>
            <td>{{ count($event->users) }}</td>

            <td>{{--Botões de editar e deletar--}}
              <a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn">Editar</a>
              <form action="/events/{{ $event->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
            </form>
            </tr>

        @endforeach
    </tbody>
</table>


    @else{{--Se não tiver nem uma informação, será emitida a mensagem a baixo--}}
    <p>Você ainda não tem eventos, <a href="/events/create">Criar evento</a></p>
    @endif

</div>


<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Eventos que estou participando</h1>
</div>
<div class="col-md-10 offser-md-1 dashboard-events-container">
    @if(count($eventsAsParticipant) > 0 );

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Açoes</th>
            </tr>
        </thead>

    <tbody>
        @foreach ($eventsAsParticipant as $event){{--Declarando as variáveis--}}
        <tr>
            <td scropt="row">{{ $loop->index + 1 }}</td>
            <td><a href="/events/{{ $event->id }}">{{ $event->titulo }}</a></td>
            <td>{{ count($event->users) }}</td>

            <td>
                <form action="/events/leave/{{ $event->id }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger delete-btn">Sair do evento</button>

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

    @else
    <p>Você ainda não está participando de nem um evento, <a href="/">Veja todos os eventos</a></p>
    @endif
</div>

@endsection {{--Extenção do arquivo template--}}
