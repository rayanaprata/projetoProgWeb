@extends('layout.app', ["current" => "produtos"])
@section('body')
<div class="card border">
    <div class="card-body">
        <!--Configurar o actions para chamar o método update-->
        <form action="{{ route('produtos.update', $prd['id']) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="form-group">
        <label for="nomeProduto">Nome do Porduto</label>
        <input type="text" class="form-control" name="nomeProduto"
            id="nomeProduto" placeholder="Produto">
    </div>
        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection