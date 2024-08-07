<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("home");
});

Route::get('/produto', [ProdutoController::class,"index"] ); {
};

Route::get('/contato', function () {
    return view("contato");
});
