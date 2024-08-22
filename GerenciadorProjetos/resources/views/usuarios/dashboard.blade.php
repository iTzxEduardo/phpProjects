@extends('layouts.app')


@section('content')

    <div class="container my-4">
        <div class="row">
            @foreach ($projetos as $projeto)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h2 class="card-title">{{ $projeto->nome }}</h2>
                            <p class="card-text">{{ $projeto->descricao }}</p>
                            <p class="card-text"><strong>Dias:</strong> {{ $projeto->tempo }}</p>
                            <form method="POST" action="{{ route('inscricao.add', $projeto->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-primary w-100">Ver Deltalhe do Projeto</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endsection
    
    <style>
    /* Customização dos cards */
    .card {
        border-radius: 10px;
        border: 1px solid #ddd;
        transition: transform 0.2s ease-in-out;
    }
    
    .card:hover {
        transform: translateY(-5px);
    }
    
    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #343a40;
    }
    
    .card-text {
        font-size: 1rem;
        color: #6c757d;
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
    </style>
