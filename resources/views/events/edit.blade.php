@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Editando:' . $event->titulo){{--Extenção do arquivo template--}}

@section('content'){{--Extenção do arquivo template--}}

<div id="evento-create-container" class="col-md-6.offset-md-3">
    <h1>Editando evento: {{ $event->titulo }}</h1>
    <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="image">Imagem do Evento</label>
        <input type="file" id="image" name="image" class="form-control-file">
        <img src="/img/events/{{ $event->image }}" alt="{{ $event->titulo }}" class="img-preview">
    </div>

    <div class="form-group">
      <label for="title">Evento</label>
      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do evento" value="{{ $event->titulo }}">
    </div>

    <div class="form-group">
        <label for="date">Data do evento:</label>
        <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('y-m-d') }}">
      </div>

    <div class="form-group">
        <label for="title">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Nome da cidade" value="{{ $event->cidade }}">
      </div>

      <div class="form-group">
        <label for="title">Descrição</label>
        <textarea name="informe" id="informe" class="form-control" placeholder="Informações sobre o evento?">{{ $event->informe }}</textarea>
      </div>

      <div class="form-group">
        <label for="title">adicione itens de infraestrtura:</label>
        <div class="form-group">
            <input type="checkbox" name="itens[]" value="Cadeiras"> Cadeiras
        </div>
        <div class="form-group">
            <input type="checkbox" name="itens[]" value="Palco"> Palco
        </div>
        <div class="form-group">
            <input type="checkbox" name="itens[]" value="Cerveja gratis"> Cerveja gratis
        </div>
        <div class="form-group">
            <input type="checkbox" name="itens[]" value="Open Food"> Open Food
        </div>
        <div class="form-group">
            <input type="checkbox" name="itens[]" value="Brindes"> Brindes
        </div>
      </div>

      <div class="form-group">
        <label for="title">O evento é privado?</label>
        <select name="privado" id="privado" class="form-control">
        <option value="0">Não</option>
        <option value="1" {{ $event->privado == 1 ? "selected='selected'" : "" }}>Sim</option>
        </select>
      </div>

      <input type="Submit" class="btn btn-primary" value="Editar Evento">

    </form>
</div>

@endsection {{--Extenção do arquivo template--}}
