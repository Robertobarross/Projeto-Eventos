<?php

use Illuminate\Support\Facades\Route;

/*
Rotas da aplicação. Tem conexão direta com a pasta resources/views.
Na pasta Public foi criado as pastas css, img e js.
*/

use App\Http\Controllers\EventController;
//use App\http\Models\Evento;

Route::get('/', [EventController::class, 'index']); // Rota Controller da página Home //
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth'); // Rota Controller criar eventos //
Route::get('/events/{id}', [EventController::class, 'show'])->middleware('auth'); // Rota Controller show //
Route::post('/events', [EventController::class, 'store'])->middleware('auth'); // Rota Controller das postagens //
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');// Rota delete //
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');// Rota de Editar //
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth'); // Para fazer a atualização da edição //



Route::get('/contato', function () { // Rota da página de contatos //
        return view('contato');
    })->middleware('auth');

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth'); // Rota Dashboard //

Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth'); // Rota event_user confirmar presença no evento //

Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth'); // Rota sair do evento //


/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard'); // Rota do login //
})->name('dashboard');*/
