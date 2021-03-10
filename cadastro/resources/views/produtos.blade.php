@extends('layout.app', ["current" => "produtos"])
@section('body')
<div class="card border">
 <div class="card-body">
 <h5 class="card-title">Cadastro de Produtos</h5>

@if(count($prds) > 0)
    <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Produto</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
 @foreach($prds as $prd)
    <tr>
    <td>{{$prd->id}}</td>
    <td>{{$prd->nome}}</td>
    <td>{{$prd->estoque}}</td>
    <td>{{$prd->preco}}</td>
    <td>{{$prd->categoria_id}}</td>
    <td>
    <a href="{{ route('produtos.edit', $prd['id']) }}" class="btn btn-sm btn-primary">Editar</a>
    <form action="{{ route('produtos.destroy', $prd['id']) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-sm btn-danger" value="Apagar">
    </form>
    </td>
    </tr>
 @endforeach
 </tbody>
 </table>

 <div class="card-footer">
    <a href="/produtos/create" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
 </div>

@endif

@endsection