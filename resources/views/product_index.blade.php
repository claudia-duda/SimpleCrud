@extends('templates.template')

@section('content')
<h1 class="text-center">Tabela Produtos</h1>
<div class="text-center">
    <a href="{{url('products/create')}}">
      <button class="btn btn-success mt-3 mb-4">Cadastrar</button>
    </a>    
  </div>
<div class="col-8, m-auto">
    <table class="table">
      <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Código</th>
            <th scope="col">Tipo Item</th>
            <th scope="col">Preço de Compra</th>
            <th scope="col">Preço de Venda</th>
            <th scope="col">Ação</th>
          </tr>
      </thead>
      <tbody>
      
      @foreach($products as $product)
          <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->nome }}</td>
            <td>{{ $product->codigo_estoque }}</td>
            <td>{{ $product->tipo_item }}</td>
            <td>{{ $product->preco_compra }}<strong>R$</strong></td>
            <td>{{ $product->preco_venda }}<strong>R$</strong></td>
            <td>
              <a href="{{url("products/$product->id")}}">
                <button class="btn btn-dark">Visualizar</button>
              </a>  
              <a href="{{url("products/$product->id/edit")}}">
                <button class="btn btn-primary">Editar</button>
              </a>
              <a href="">
                <button class="btn btn-danger">Deletar</button>
              </a>
            </td>
          </tr>       
      @endforeach
      </tbody>
    </table>
</div>
@endsection