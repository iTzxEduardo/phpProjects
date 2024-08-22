<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projeto;


class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //lista todos os projetos
    public function index()
    {
        $projetos = Projeto::all();
        return view('projetos.index',compact('projetos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    //abre o formulario de cadastro
    public function create()
    {
        return view('projetos.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    // envia o formulario de cadastro
    public function store(Request $request)
    {
        $request->validate([
            'nome'=> 'required|string|max:255',
            'descricao'=> 'required',
            'tempo'=> 'required|numeric',
        ]);


        Projeto::create($request->all());


        return redirect()->route('projetos.index')->
        with('success','projeto Criado com Sucesso');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projeto $projeto)
    {
        return view('projetos.edit',compact('projeto'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projeto $projeto)
    {
        $request->validate([
            'nome'=> 'required|string|max:255',
            'descricao'=> 'required',
            'tempo'=> 'required|numeric',
        ]);


        $projeto->update($request->all());


        return redirect()->route('projetos.index')->
        with('success','projeto Atualizado com Sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projeto $projeto)
    {
        $projeto->delete();


        return redirect()->route('projetos.index')->
        with('sucess','projeto Deletado com Sucesso');
    }
    
    public function show(Projeto $projeto){
        return view('projetos.show', compact('projeto'));
    }
}
