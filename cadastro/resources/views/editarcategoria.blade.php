@extends('layout.app', ["current" => "categorias"])
@section('body')
<div class="card border">
    <div class="card-body">
        <!--Configurar o actions para chamar o método update-->
        <form action="{{ route('categorias.update', $cat['id']) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="form-group">
        <label for="nomeCategoria">Nome da Categoria</label>
        <input type="text" class="form-control" name="nomeCategoria"
            id="nomeCategoria" placeholder="Categoria">
    </div>
        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection