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
                <th scope="col">Nº</th>
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
            <td>0</td>

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

@endsection {{--Extenção do arquivo template--}}
