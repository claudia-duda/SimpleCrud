@extends('templates.template')

@section('content')
    <h1 class="text-center">
        @if(isset($product))
            Editar 
        @else
            Cadastrar 
        @endif
        Produto
    </h1>

    <div class="col-8, m-auto">
        
        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>

                @endforeach
            </div>
        @endif
        
        @if(isset($product))
            <form name="formEdit" id="formEdit" method="post" action="{{ url("products/$product->id") }}">
                @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{ url("products/store") }}">
        
        @endif
       
                @csrf                
                <fieldset>
                    <legend>
                        <h2>Dados do Produto</h2>
                    </legend>
                    <div class="field">
                        <label aria-label="Small" for="nome">Nome do Produto</label>
                        <input class="form-control" type="text" name="nome" id="nome" value="{{$product->nome ?? ''}}" placeholder="ex: Detergente" required>
                    </div>

                    <div class="field">
                        <label aria-label="Small" for="codigo_estoque">Código do Produto</label>
                        <input class="form-control" type="text" name="codigo_estoque" id="codigo_estoque" value="{{$product->codigo_estoque ?? ''}}" placeholder="Código do Produto" required><br>
                    </div>

                    <div class="field">
                        <label aria-label="Small" for="tipo">Tipo do Produto</label>

                        <select name="tipo_item" id="tipo_item" required>
                            <option value="{{$product->tipo_item ?? ''}}">{{$product->tipo_item ?? 'Selecione o Tipo do Produto'}}</option>
                            <option value="Limpeza">Limpeza</option>
                            <option value="Informática">Informática</option>
                            <option value="Escritório">Escritório</option>
                        </select>
                    </div>

                    <div class="field">
                        <label aria-label="Small" for="preco_compra">Preço de Compra</label>
                        <input class="form-control" type="text" name="preco_compra" id="preco_compra" value="{{$product->preco_compra ?? ''}}" placeholder="ex: 19.90" required><br>
                    </div>

                    <div class="field">
                        <label aria-label="Small" for="preco_venda">Preço de Venda</label>
                        <input class="form-control" type="text" name="preco_venda" id="preco_venda" value="{{$product->preco_venda ?? ''}}" placeholder="ex: 20.90" required><br>
                    </div>
                    
                </fieldset>   
            
                <input class="btn btn-primary" type="submit" value="@if(isset($product)) Editar @else Cadastrar @endif">
    
            </form>

    </div>
@endsection