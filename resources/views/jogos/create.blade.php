@extends('layouts.app')
@section('title','Criar')
@section('content')
    <div class="container mt-5">
        <h1>Adicionar novo jogo</h1>
        <hr>
        <form action="{{route('jogos-store')}}" method="POST">
        @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite o nome do jogo...">
            </div>
            <br>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" class="form-control" name="categoria" placeholder="Digite a categoria do jogo...">
            </div>
            <br>
            <div class="form-group">
                <label for="ano_criacao">Ano de criacao:</label>
                <input type="number" class="form-control" name="ano_criacao" placeholder="Digite o de criação do jogo...">
            </div>
            <br>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="number" class="form-control" name="valor" placeholder="Digite o valor do jogo...">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit">
            </div>
        </form>
    </div>
@endsection