@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Projetos</h1>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mb-4">
            <p>{{ $message }}</p>
        </div>
    @endif

    <a class="btn btn-create-project mb-3" href="{{ route('projetos.create') }}">
        <i class="fas fa-plus"></i> Criar Novo Projeto
    </a>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Dias</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projetos as $projeto)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $projeto->nome }}</td>
                    <td>{{ $projeto->descricao }}</td>
                    <td>{{ $projeto->tempo }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-custom" href="{{ route('projetos.show', $projeto->id) }}">Mostrar</a>
                            <a class="btn btn-custom" href="{{ route('projetos.edit', $projeto->id) }}">Editar</a>
                        </div>
                        <form action="{{ route('projetos.destroy', $projeto->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-icon">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

<style>
    .table {
        border-collapse: collapse;
        width: 100%;
    }

    thead th {
        background-color: #f8f9fa;
        color: #495057;
        font-weight: bold;
        border-bottom: 2px solid #dee2e6;
    }

    tbody tr:hover {
        background-color: #f1f1f1;
    }

    .table td, .table th {
        padding: 15px;
        text-align: left;
    }

    .btn-custom {
        font-size: 1.1rem;
        padding: 15px 25px; /* Aumentado para maior altura */
        border-radius: 0.5rem;
        font-weight: 700;
        transition: all 0.3s ease;
        border: none;
        display: inline-block;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-custom {
        background-color: #007bff;
        color: #fff;
    }

    .btn-custom:hover {
        background-color: #0056b3;
        color: #fff;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    }

    .btn-create-project {
        background-color: #28a745;
        color: #fff;
        font-size: 1.1rem;
        padding: 15px 25px; /* Aumentado para maior altura */
        border-radius: 0.5rem;
        font-weight: 700;
        transition: all 0.3s ease;
        border: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-create-project:hover {
        background-color: #218838;
        color: #fff;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    }

    .btn-icon {
        font-size: 1.3rem;
        padding: 15px 25px; /* Aumentado para maior altura */
        border-radius: 0.5rem;
        background-color: #dc3545;
        color: #fff;
        border: none;
        transition: all 0.3s ease;
    }

    .btn-icon:hover {
        background-color: #c82333;
        color: #fff;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    }

    .alert {
        border-radius: 0.3rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>

<!-- Certifique-se de ter o Font Awesome incluído no seu layout principal ou cabeçalho -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
