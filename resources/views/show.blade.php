@extends('templates.template')

@section('content')
<h1 class="text-center">Visualizar Produto</h1>

<div class="col-8, m-auto">

    Nome: {{ $product->nome }}</br>
    Codigo Estoque: {{ $product->codigo_estoque}}</br>
    tipo do Item: {{ $product->tipo_item}}</br>
    preço da compra: {{$product->preco_compra}}</br>
    Preço da Venda: {{$product->preco_venda}}</br>
    Data de criação: {{$product->created_at}}</br>
    Data de atualização: {{$product->updated_at}}</br>
</div>

@endsection