@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/img/img0.png" class="img-fluid" alt="{{ $projeto->nome }}">
            </div>
            <div class="col-md-6">
                <h2>{{ $projeto->nome }}</h2>
                <p>{{ $projeto->descricao }}</p>
                <p>Tempo: {{ $projeto->tempo }}</p>
			
                <form method="POST" action="{{ route('carrinho.add', $projeto->id) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Entrar no Projeto</button>
                </form>
            </div>
        </div>
    </div>
@endsection
