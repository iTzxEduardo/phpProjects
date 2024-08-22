<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Http\Controllers\Controller;
use App\Models\Inscricao;
use Illuminate\Support\Facades\Auth;

class InscricaoController extends Controller
{
    public function add(Request $request, Projeto $projeto)
    {
        // Verifica se o usuário está autenticado
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Você precisa estar logado para se inscrever em um projeto.');
        }

        // Cria a inscrição
        Inscricao::create([
            'id_projeto' => $projeto->id,
            'id_user' => Auth::id(),
        ]);

        return redirect()->route('projetos.show', $projeto)
            ->with('success', 'Projeto adicionado à inscrição.');
    }
}
