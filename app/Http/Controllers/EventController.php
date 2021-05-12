<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // Incluindo Model Event //
use Input;

class EventController extends Controller
{
    public function index(){ // Rota da página principal, "Home" //
        $events = Event::all(); // Pegando arquivos do bd, tabela events//

    return view('home', ['events' => $events]); // Desclarando variáveis //
    }


    public function create(){ // Rota da página criar eventos //
        return view('events.create');

    }

    public function store(Request $request){

        $event = new Event();

        $event->titulo = $request->titulo;
        $event->descricao = $request->descricao;
        $event->cidade = $request->cidade;
        $event->privado = $request->privado;

        $event->save();

        return redirect('/home');
    }
}
