@extends('layout.app', ["current" => "categorias"])
@section('body')
<div class="card border">
 <div class="card-body">
 <h5 class="card-title">Cadastro de Categorias</h5>

@if(count($cats) > 0)
    <table style="border: 1px solid #dee2e6" class="table table-bordered table-ordered table-hover table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome da Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

 @foreach($cats as $cat)
    <tr>
    <td>{{$cat->id}}</td>
    <td>{{$cat->nome}}</td>
    <td>
    <a href="{{ route('categorias.edit', $cat['id']) }}" class="btn btn-sm btn-primary">Editar</a>
    <form style="margin: 0; align-self: center;" action="{{ route('categorias.destroy', $cat['id']) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-sm btn-danger" value="Apagar">
    </form>
    </td>
    </tr>
 @endforeach
 </tbody>
 </table>
 @endif
 <div class="card-footer">
    <a href="/categorias/create" class="btn btn-sm btn-primary" role="button">Nova Categoria</a>
 </div>
@endsection