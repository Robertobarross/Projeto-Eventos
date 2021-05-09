<?php

use Illuminate\Support\Facades\Route;

/*
Rotas da aplicação. Tem conexão direta com a pasta resources/views.
Na pasta Public foi criado as pastas css, img e js.
*/

use App\Http\Controllers\EventoController;

Route::get('/', [EventoController::class, 'index']); // Rota Controller da página Home //
Route::get('/eventos/create', [EventoController::class, 'create']); // Rota Controller criar eventos
Route::post('/eventos', [EventoController::class, 'store']);

Route::get('/contato', function () { // Rota da página de contatos //
    return view('contato');
});
