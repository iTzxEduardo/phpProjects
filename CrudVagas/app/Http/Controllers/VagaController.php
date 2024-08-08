<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaga;


class VagaController extends Controller
{
    
    public function index()
    {
        $vagas = Vaga::all();
        return view('vagas.index',compact('vagas'));
        }

   
    public function create()
    {
        return view('vagas.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'setor' => 'required',
            'remuneracao' => 'required|numeric',
            'empresa' => 'required',
            
        ]);
        Vaga::create($request->all());
        return redirect()->route('vagas.index')->with('success','Vaga criada com sucesso!');
    }

    
    public function show(string $id)
    {
        return view('vagas.show',compact('vaga'));
    }

  
    public function edit(string $id)
    {
        return view('vagas.edit',compact('vaga'));
    }

  
    public function update(Request $request, Vaga $vaga)
    {
        $request->validate([
        'titulo' => 'required',
		'descricao' => 'required',
		'setor' => 'required',
        'remuneracao' => 'required|numeric',
		'empresa' => 'required',


        ]);
        $vaga->update($request->all());
        return redirect()->route('vagas.index')
            ->with('success', 'Vaga atualizado com sucesso.');
    }


   
    public function destroy(Vaga $Vaga)
    {
        $Vaga->delete();
        return redirect()->route('vagas.index')->with('success','Vaga excluída com sucesso!');
    }
}
