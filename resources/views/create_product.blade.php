@extends('templates.template')

@section('content')
<h1 class="text-center">Cadastrar Produto</h1>

<div class="col-8, m-auto">
    
        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>

                @endforeach
            </div>
        @endif
    

    <form name="formCad" id="formCad" method="post" action="{{url('products/store')}}">
        @csrf
        @method('post')
        <fieldset>
            <legend>
                <h2>Dados do Produto</h2>
            </legend>
            <div class="field">
                <label aria-label="Small" for="nome">Nome do Produto</label>
                <input class="form-control" type="text" name="nome" id="nome" placeholder="ex: Detergente" required><br>
            </div>

            <div class="field">
                <label aria-label="Small" for="codigo_estoque">Código do Produto</label>
                <input class="form-control" type="text" name="codigo_estoque" id="codigo_estoque" placeholder="Código do Produto" required><br>
            </div>

            <div class="field">
                <label aria-label="Small" for="tipo">Tipo do Produto</label>

                <select name="tipo_item" id="tipo_item" required>
                    <option value="">Selecione o Tipo do Produto</option>
                    <option value="limpeza">Limpeza</option>
                    <option value="informatica">Informática</option>
                    <option value="escritorio">Escritorio</option>
                </select>
            </div>

            <div class="field">
                <label aria-label="Small" for="preco_compra">Preço de Compra</label>
                <input class="form-control" type="text" name="preco_compra" id="preco_compra" placeholder="ex: 19.90" required><br>
            </div>

            <div class="field">
                <label aria-label="Small" for="preco_venda">Preço de Venda</label>
                <input class="form-control" type="text" name="preco_venda" id="preco_venda" placeholder="ex: 20.90" required><br>
            </div>
            
        </fieldset>   
    
        <input class="btn btn-primary" type="submit" value="Cadastrar">
  
    </form>

</div>
@endsection