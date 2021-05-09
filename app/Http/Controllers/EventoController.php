<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento; // Incluindo Model Evento //

class EventoController extends Controller
{
    public function index(){ // Rota da página principal, "Home" //
        $eventos = Evento::all(); // Pegando arquivos do bd, tabela eventos//
        return view('home', ['eventos' => $eventos]); // Desclando variáveis //
}

    public function create(){ // Rota da página criar eventos //
        return view('eventos.create');
    }


    public function store(Request $request){ // O arquivo a baixo  é responsável por enviar as informações para o bd, e públicar na página de eventos //
        $evento = new Evento;

        $evento->titulo = $request->titulo;
        $evento->cidade = $request->cidade;
        $evento->privado = $request->privado;
        $evento->descricao = $request->descricao;

        $evento->save();

      //  return redirect('/create');

    }
}
