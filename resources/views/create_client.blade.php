@extends('templates.template')

@section('content')
<h1 class="text-center">Cadastrar</h1>
<div class="col-8, m-auto">
  
    <form action="{{url('clients/store')}}" method="post" name='formCad' if="formCad">
        @csrf
        
        <fieldset>
        <legend>
            <h2>Dados do entidade</h2>
        </legend>
        <div class="field">
            <label aria-label="Small" for="name">Nome fantasia</label>
            <input class="form-control" type="text" name="nome_fantasia" id="nome" placeholder="Nome fantasia" required>
        </div>
        <div class="field">
            <label aria-label="Small" for="razao_social">Razão Social</label>
            <input class="form-control" type="text" name="razao_social" id="codigo_estoque" placeholder="razao social" required>
        </div>

        <div class="field">
            <label aria-label="Small" for="tipo">Tipo do Cliente</label>
            <select name="tipo" id="tipo" required>
                <option value="">Selecione o tipo do cliente</option>
                <option value="fisica">Pessoa fisica</option>
                <option value="juridica">Pessoa juridica</option>
            </select>
        </div>

        <div class="field">
            <label aria-label="Small" for="identificacao">Digite sua Identificação</label>
            <input type="text" class="form-control" name="identificacao" id="identificacao" placeholder="CNPJ/CPF" required>
        </div>
            
    </fieldset>
    <fieldset>
        <legend>
            <h2>Endereço da entidade</h2>
        </legend>

        <div class="field">
            <label aria-label="Small" for="pais">Digite a sigla do pais</label>
            <input type="text" class="form-control" name="pais" id="pais" placeholder="ex: BR" required>
        </div>

        <div class="field">
            <label aria-label="Small" for="estado">Digite a sigla do estado</label>
            <input type="text" class="form-control" name="estado" id="estado" placeholder="ex: SP" required>
        </div>

        <div class="field">
            <label aria-label="Small" for="cidade">Digite a cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="sua cidade aqui" required>
        </div>

        <div class="field">
            <label aria-label="Small" for="bairro">Digite a bairro</label>
            <input type="text" class="form-control" name="bairro" id="bairro" placeholder="seu bairro aqui" required>
        </div>        
        
        <div class="input-group-prepend">
            <div class="field">
                <label aria-label="Small" for="CEP">Digite o CEP</label>
                <input type="number" class="form-control" name="CEP" id="CEP" placeholder="seu CEP aqui" required>
            </div>

            <div class="field">
                <label aria-label="Small" for="rua">Digite a rua</label>
                <input type="text" class="form-control" name="rua" id="rua" placeholder="sua rua aqui" required>
            </div>

            <div class="field">
                <label aria-label="Small"for="numero">Digite o numero</label>
                <input type="number" class="form-control" name="numero" id="numero" placeholder="ex: 143" required>
            </div>
        </div>
     
    </fieldset>

        <input class="btn btn-primary" type="submit" value="Cadastrar">
  
    </form>

</div>
@endsection