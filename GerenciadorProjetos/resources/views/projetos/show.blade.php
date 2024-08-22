@extends('layouts.app')

@section('content')
<br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-header bg-primary text-white">
                        <h2 class="mb-0">{{ $projeto->nome }}</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $projeto->descricao }}</p>
                        <p class="card-text"><strong>Dias:</strong> {{ $projeto->tempo }}</p>
                        <form method="POST" action="{{ route('inscricao.add', $projeto->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">Entrar no Projeto</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Adicione este estilo ao seu arquivo de estilos global ou dentro de uma tag <style> -->
<style>
    .card {
        border-radius: 10px;
        border: 1px solid #ddd;
    }

    .card-header {
        border-bottom: 1px solid #ddd;
    }

    .card-header h2 {
        margin: 0;
    }

    .card-body {
        padding: 20px;
    }

    .card-text {
        font-size: 16px;
        margin-bottom: 15px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
</style>
