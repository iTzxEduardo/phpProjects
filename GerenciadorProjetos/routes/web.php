<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\http\Controllers\ProjetoController;
use App\Http\Middleware\ProjetosMiddleware;
use App\http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/registro', [UserController::class, 'showRegistroForm'])->name('usuarios.registro');
Route::post('/registro', [UserController::class, 'registro'])->name('usuarios.registro');


Route::get('/login', [UserController::class, 'showLoginForm'])->name('usuarios.login');
Route::post('/login', [UserController::class, 'login'])->name('usuarios.login');

//rota para pagina interna
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth')->name('dashboard');

Route::post('/logout', [UserController::class, 'logout']);

//rota para produtos
Route::resource('/projetos', ProjetoController::class)->middleware(ProjetosMiddleware::class)->except('show');

//rota para adicionar projeto no carrinho
Route::get('projetos/{projeto}',[ProjetoController::class,'show'])
->middleware('auth')->name('projetos.show');

Route::post('carrinho/add/{projeto}',[CarrinhoController::class,'add'])
->middleware('auth')->name('carrinho.add');

