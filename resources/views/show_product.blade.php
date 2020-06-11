@extends('templates.template')

@section('content')
<h1 class="text-center">Visualizar Produto</h1>

<div class="col-8, m-auto">
    <p><strong>Nome: </strong>{{ $product->nome }}</p>
    <p><strong>Codigo Estoque: </strong>{{ $product->codigo_estoque}}</p>
    <p><strong>tipo do Item: </strong>{{ $product->tipo_item}}</p>
    <p><strong>Preço da compra: </strong>{{$product->preco_compra}}</p>    
    <p><strong>Preço da Venda:</strong>{{$product->preco_venda}}</p>    
    <p><strong>Data de criação: </strong>{{$product->created_at}}</p>  
    <p><strong>Data de atualização: </strong>{{$product->updated_at}}</p>  
   
</div>

@endsection