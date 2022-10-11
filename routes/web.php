<?php

use Illuminate\Support\Facades\Route;

// Inclusão de arquivos PHP8
use \App\Http\Controllers\VendasController;
use \App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/login/{dia}/{mes}/{ano?}', function ($dia, $mes, $ano = 2026) {
    return view('site/login', ['dia' => $dia, 'mes' => $mes, 'ano' => $ano]);
});

Route::get('/jumbo', function () {
    return view('site/sobre');
});

Route::get('/vendas', [VendasController::class, 'index']);
Route::get('/vendas/relatorio/{mes}/{departamento}', [VendasController::class, 'relatorio']);

//1° Passo: Criar a rota
//2° Passo: Criar o controler --> php artisan make:controller UsuarioController
Route::any('/insere', [UsuarioController::class, 'insere']);
Route::any('/lista', [UsuarioController::class, 'lista']);
Route::any('/update', [UsuarioController::class, 'update']);
Route::any('/delete', [UsuarioController::class, 'delete']);
Route::any('/destroy', [UsuarioController::class, 'destroy']);
Route::any('/update2', [UsuarioController::class, 'update2']);
Route::any('/contato', [UsuarioController::class, 'contato']);
Route::any('/leitura/{modo}', [UsuarioController::class, 'leitura']);

//rota para pagina ecommerce
Route::any('/produtos', [VendasController::class, 'produtos']);
