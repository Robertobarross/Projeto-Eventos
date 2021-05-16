<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // Incluindo Model Event //
use Input;

class EventController extends Controller
{
    public function index(){ // Rota da página principal, "Home" //

        $search = request('search');
        if($search){
            $events = Event::where([
                ['titulo', 'like', '%' .$search. '%']
            ])->get();

        } else {
            $events = Event::all(); // Pegando arquivos do bd, tabela events//
        }


    return view('home', ['events' => $events, 'search' => $search]); // Desclarando variáveis //
    }


    public function create(){ // Rota da página criar eventos //
        return view('events.create');

    }

    public function store(Request $request){

        $event = new Event();

        $event->titulo = $request->titulo;
        $event->date = $request->date;
        $event->informe = $request->informe;
        $event->cidade = $request->cidade;
        $event->privado = $request->privado;
        $event->itens = $request->itens;

        // Fazeno uplowads da imagem no banco de dados //
        if($request->hasFile('image') ** $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }

        $user = auth()->user(); // Para separar evento por usuário //
        $event->user_id = $user->id;


        $event->save();// Para que a postagem fique gravada no banco de dados //

        /* Após a postagem, o usuário será redirecionado para página criar eventos. Aparecerá a mensagem 'Evento criado com sucesso!'  */
        return redirect('/events/create')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id){
        $event = Event::findOrFail($id);
        return view('events.show', ['event' => $event]);

    }

}

