@extends('templates.template')

@section('content')
<h1 class="text-center">Cadastrar
<div class="col-8, m-auto">
    <form action="{{url('clients')}}" method="post" name='formCad' if="formCad">
        @csrf
        
        <input class="form-control" type="text" name="nome_fantasia" id="nome" placeholder="Nome fantasia"><br>
        <input class="form-control" type="text" name="razao_social" id="codigo_estoque" placeholder="razao social" ><br>
        <input class="form-control" type="text" name="tipo" id="preco_compra" placeholder="tipo"><br>
        <input class="form-control" type="text" name="identificacao"  id="preco_compra" placeholder=identificacao">     
        <input class="btn btn-primary" type="submit" value="Cadastrar">
  
    
    </form>

</div>
@endsection