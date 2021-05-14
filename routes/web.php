<?php

use Illuminate\Support\Facades\Route;

/*
Rotas da aplicação. Tem conexão direta com a pasta resources/views.
Na pasta Public foi criado as pastas css, img e js.
*/

use App\Http\Controllers\EventController;
//use App\http\Models\Evento;

Route::get('/', [EventController::class, 'index']); // Rota Controller da página Home //
Route::get('/events/create', [EventController::class, 'create']); // Rota Controller criar eventos //
Route::get('/events/{id}', [EventController::class, 'show']); // Rota Controller show //
Route::post('/events', [EventController::class, 'store']); // Rota Controller das postagens //

Route::get('/contato', function () { // Rota da página de contatos //
        return view('contato');
    });
