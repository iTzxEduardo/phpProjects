@extends('layouts.app')


@section('content')
    <h1>Dashboard de Projetos</h1>


    <form method="GET" action="{{ route('dashboard') }}">
        <input type="text" name="search" placeholder="Pesquisar projetos..." value="{{ request('search') }}">
        <button type="submit">Pesquisar</button>
    </form>


    <div class="row">
        @foreach ($projetos as $projeto)
            <div class="col-md-4">
                <div class="card">
                    <img src="/assets/img/img0.png" class="card-img-top" alt="{{ $projeto->nome }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $projeto->nome }}</h5>
                        <p class="card-text">{{ $projeto->descricao }}</p>
 <p class="card-text">{{ $projeto->categoria }}</p>
                        <p class="card-text">Preço: R$ {{ $projeto->preco }}</p>
                        <a href="{{ route('projetos.show', $projeto->id) }}" class="btn btn-primary">Ver Projeto</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
