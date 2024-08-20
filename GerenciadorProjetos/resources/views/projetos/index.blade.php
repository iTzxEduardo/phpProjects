@extends('layouts.app')


@section('content')


<div class="container">
    <h1 class="my-4">Projetos</h1>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <a class="btn btn-success mb-2" href="{{ route('projetos.create') }}"> Criar Novo projeto</a>


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Tempo</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($projetos as $projeto)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $projeto->nome }}</td>
            <td>{{ $projeto->descricao }}</td>
            <td>{{ $projeto->tempo}}</td>
            <td>
                <form action="{{ route('projetos.destroy', $projeto->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('projetos.show', $projeto->id) }}">Mostrar</a>
                    <a class="btn btn-primary" href="{{ route('projetos.edit', $projeto->id) }}">Editar</a>


                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
