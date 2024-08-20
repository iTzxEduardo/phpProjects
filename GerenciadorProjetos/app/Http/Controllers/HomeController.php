<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Projeto;


class HomeController extends Controller
{
    public function index()
    {
        // Pegue os 5 produtos mais recentes, por exemplo
        $projetos = Projeto::take(5)->get();
        return view('home', compact('projetos'));
    }
}
