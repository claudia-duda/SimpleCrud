@extends('templates.template')

@section('content')
<h1 class="text-center">Cadastrar (apenas produtos por enquanto)</h1>
por causa do nome da variavel chamada
<div class="col-8, m-auto">
    <form action="{{url('products')}}" method="post" name='formCad' if="formCad">
        @csrf

        <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome Produto:"><br>
        <input class="form-control" type="text" name="pages" id="codigo_estoque" placeholder="Código Produto:"><br>
        <input class="form-control" type="text" name="preco_compra" id="preco_compra" placeholder="Preço compra:"><br>
        <input class="form-control" type="text" name="preco_venda"  id="preco_compra" placeholder="Preço venda:">     
        <input class="btn btn-primary" type="submit" value="Cadastrar">
        <selected class="form-control" name="tipo"> 
            <option value="">Tipo</option>
            @foreach($product->tipo as $type)
                <option value="{{$type->id}}">{{$type}} </option>
            @endforeach
        </selected></br>
    
    </form>

</div>
@endsection