@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Criar Evento'){{--Extenção do arquivo template--}}

@section('content'){{--Extenção do arquivo template--}}

<div id="evento-create-container" class="col-md-6.offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="image">Imagem do Evento</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>

    <div class="form-group">
      <label for="title">Evento</label>
      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do evento">
    </div>

    <div class="form-group">
        <label for="title">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Nome da cidade">
      </div>

      <div class="form-group">
        <label for="title">Descrição</label>
        <textarea name="informe" id="informe" class="form-control" placeholder="Informações sobre o evento?"></textarea>
      </div>

      <div class="form-group">
        <label for="title">O evento é privado?</label>
        <select name="privado" id="privado" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
        </select>
      </div>

      <input type="Submit" class="btn btn-primary" value="Criar Evento">

    </form>
</div>

@endsection {{--Extenção do arquivo template--}}
