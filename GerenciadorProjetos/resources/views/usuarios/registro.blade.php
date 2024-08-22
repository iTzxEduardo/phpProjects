@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Registrar-se</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('usuarios.registro') }}">
                        @csrf

                        <div class="form-group mb-4">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="password_confirmation">Confirme a Senha</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Registrar-se</button>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <p class="mb-0">Já tem uma conta? <a href="{{ route('usuarios.login') }}" class="text-primary">Faça login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .card {
        border-radius: 8px;
        overflow: hidden;
        min-height: 500px; /* Ajusta a altura mínima do card */
    }

    .card-header {
        font-size: 1.5rem; /* Tamanho maior para o título */
        font-weight: bold;
        padding: 20px; /* Aumenta o padding do cabeçalho */
    }

    .form-group label {
        font-weight: 600;
    }

    .form-control {
        border-radius: 0.25rem;
        box-shadow: none;
        border-color: #ced4da;
        height: 50px; /* Aumenta a altura dos campos de entrada */
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 0.25rem;
        padding: 12px; /* Aumenta o padding do botão */
        font-size: 1.1rem; /* Tamanho maior da fonte */
        transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .card-footer {
        background-color: #f8f9fa;
        padding: 20px; /* Aumenta o padding do rodapé */
    }

    .card-footer a {
        text-decoration: none;
        font-weight: bold;
    }

    .card-footer a:hover {
        text-decoration: underline;
    }
</style>
    