@extends('layout.app', ["current" => "produtos"])
@section('body')
    <div class="card border">
        <div class="card-body">
        <form action="{{ route('produtos.store') }}" method="POST">
            @csrf
            <div class="form-group">
            <label for="nomeProduto">Nome do Produto</label>
            <input type="text" class="form-control" name="nomeProduto"
            id="nomeProduto" placeholder="Produto">
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
        </div>
    </div>
@endsection