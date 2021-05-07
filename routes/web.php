<?php

use Illuminate\Support\Facades\Route;

/*
Rotas da aplicação. Tem conexão direta com a pasta resources/views.
Na pasta Public foi criado as pastas css, img e js.
*/

Route::get('/', function () { // Rota da página principal, "Home" //
    return view('home');
});

Route::get('/contato', function () { // Rota da página de contatos //
    return view('contato');
});
