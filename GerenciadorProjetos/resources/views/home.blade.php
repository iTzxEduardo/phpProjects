@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h1 class="mb-4">Bem-vindo ao Gerenciamento de Projetos</h1>

    <!-- Seção de Visão Geral -->
    <div class="mb-4">
        <h2 class="h4">Visão Geral</h2>
        <p>Gerencie e acompanhe seus projetos de forma eficiente. Abaixo estão os projetos disponíveis para você.</p>
    </div>
    <h1>
        Porjetos em Andamentos
    </h1>

    <!-- Lista de Projetos -->
    <div class="row">
        @foreach ($projetos as $projeto)
            <div class="col-md-4 mb-4">
                <div class="border rounded p-4 shadow-sm h-100">
                    <h3 class="h5">{{ $projeto->nome }}</h3>
                    <p><strong>Descrição:</strong> {{ $projeto->descricao }}</p>
                    <p><strong>Dias:</strong> {{ $projeto->tempo }}</p>
                    <form method="POST" action="{{ route('inscricao.add', $projeto->id) }}">
                        @csrf
                        <button type="submit" class="btn btn-primary w-100">Entrar no Projeto</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    
</div>
@endsection

<style>
/* Estilo geral da página */
.container {
    padding: 20px;
}

/* Título Principal */
h1 {
    font-size: 2rem;
    font-weight: bold;
    color: #343a40;
}

/* Seção de Visão Geral */
.mb-4 {
    margin-bottom: 1.5rem;
}

.h4 {
    font-size: 1.25rem;
    font-weight: bold;
    color: #343a40;
}

/* Estilo dos containers dos projetos */
.border {
    border: 1px solid #ddd;
}

.rounded {
    border-radius: 10px;
}

.p-4 {
    padding: 1.5rem;
}

.shadow-sm {
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
}

/* Botão */
.btn-primary {
    border-radius: 5px;
    font-size: 1rem;
    padding: 10px;
    background-color: #007bff;
    border: none;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-success {
    border-radius: 5px;
    font-size: 1rem;
    padding: 10px;
    background-color: #28a745;
    border: none;
    transition: background-color 0.3s ease;
}

.btn-success:hover {
    background-color: #218838;
}
</style>
