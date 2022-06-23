@extends('layouts.app')
@section('title','Editar')
@section('content')
    <div class="container mt-5">
        <h1>Editar jogo</h1>
        <hr>
        <form action="{{route('jogos-update',['id'=>$jogos->id])}}" method="POST">
        @method('PUT')
        @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" value="{{$jogos->nome}}" placeholder="Digite o nome do jogo...">
            </div>
            <br>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" class="form-control" name="categoria" value="{{$jogos->categoria}}" placeholder="Digite a categoria do jogo...">
            </div>
            <br>
            <div class="form-group">
                <label for="ano_criacao">Ano de criacao:</label>
                <input type="number" class="form-control" name="ano_criacao" value="{{$jogos->ano_criacao}}" placeholder="Digite o de criação do jogo...">
            </div>
            <br>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="number" class="form-control" name="valor" value="{{$jogos->valor}}" placeholder="Digite o valor do jogo...">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-success" name="submit" value="Atualizar">
            </div>
        </form>
    </div>
@endsection