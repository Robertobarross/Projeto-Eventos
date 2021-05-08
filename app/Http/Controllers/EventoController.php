<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento; // Incluindo Model Evento //

class EventoController extends Controller
{
    public function index(){ // Rota da página principal, "Home" //
        $eventos = Evento::all(); // Pegando arquivos do bd //
        return view('home', ['eventos' => $eventos]); // Desclando variáveis //
}

    public function create(){
        return view('eventos.create');
    }
}
