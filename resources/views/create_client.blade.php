@extends('templates.template')

@section('content')
    <h1 class="text-center">
        @if(isset($client))
            Editar 
        @else
            Cadastrar 
        @endif
        Cliente
    </h1>
    <div class="col-8, m-auto">
        
        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>

                @endforeach
            </div>
        @endif

        @if(isset($client))       
            <form name="formEdit" id="formEdit" method="post" action="{{ url("clients/$client->id") }}"> 
                @method('PUT')
        @else
            <form action="{{url('clients/store')}}" method="post" name='formCad' id="formCad"> 
        @endif
                @csrf
            
                <fieldset>
                <legend>
                    <h2>Dados do entidade</h2>
                </legend>
                <div class="field">
                    <label aria-label="Small" for="name">Nome fantasia</label>
                    <input class="form-control" type="text" name="nome_fantasia" id="nome" value="{{$client->nome_fantasia ?? ''}}" placeholder="Nome fantasia" required>
                </div>
                <div class="field">
                    <label aria-label="Small" for="razao_social">Razão Social</label>
                    <input class="form-control" type="text" name="razao_social" id="codigo_estoque"  value="{{$client->razao_social ?? ''}}" placeholder="razao social" required>
                </div>

                <div class="field">
                    <label aria-label="Small" for="tipo">Tipo do Cliente</label>
                    <select name="tipo" id="tipo" required>
                        <option value="{{$client->tipo ?? ''}}">{{$client->tipo ?? 'Selecione o tipo do cliente'}}</option>
                        <option value="Pessoa Fisica">Pessoa Fisica</option>
                        <option value="Pessoa jurídica">Pessoa Jurídica</option>
                    </select>
                </div>

                <div class="field">
                    <label aria-label="Small" for="identificacao">Digite sua Identificação</label>
                    <input type="text" class="form-control" name="identificacao" id="identificacao" value="{{$client->identificacao ?? ''}}" placeholder="CNPJ/CPF" required>
                </div>
                    
                </fieldset>
                <fieldset>
                    <legend>
                        <h2>Endereço da entidade</h2>
                    </legend>

                    <div class="field">
                        <label aria-label="Small" for="pais">Digite a sigla do pais</label>
                        <input type="text" class="form-control" name="pais" id="pais" value="{{$client->pais ?? ''}}" placeholder="ex: BR" required>
                    </div>

                    <div class="field">
                        <label aria-label="Small" for="estado">Digite a sigla do estado</label>
                        <input type="text" class="form-control" name="estado" id="estado" value="{{$client->estado ?? ''}}" placeholder="ex: SP" required>
                    </div>

                    <div class="field">
                        <label aria-label="Small" for="cidade">Digite a cidade</label>
                        <input type="text" class="form-control" name="cidade" id="cidade" value="{{$client->cidade ?? ''}}"placeholder="sua cidade aqui" required>
                    </div>

                    <div class="field">
                        <label aria-label="Small" for="bairro">Digite a bairro</label>
                        <input type="text" class="form-control" name="bairro" id="bairro" value="{{$client->bairro ?? ''}}" placeholder="seu bairro aqui" required>
                    </div>        
                    
                    <div class="input-group-prepend">
                        <div class="field">
                            <label aria-label="Small" for="CEP">Digite o CEP</label>
                            <input type="number" class="form-control" name="CEP" id="CEP" value="{{$client->CEP ?? ''}}" placeholder="seu CEP aqui" required>
                        </div>

                        <div class="field">
                            <label aria-label="Small" for="rua">Digite a rua</label>
                            <input type="text" class="form-control" name="rua" id="rua" value="{{$client->rua ?? ''}}" placeholder="sua rua aqui" required>
                        </div>

                        <div class="field">
                            <label aria-label="Small"for="numero">Digite o numero</label>
                            <input type="number" class="form-control" name="numero" id="numero" value="{{$client->numero ?? ''}}" placeholder="ex: 143" required>
                        </div>
                    </div>
                
                </fieldset>

                <input class="btn btn-primary" type="submit" value="@if(isset($client))Editar @else Cadastrar @endif">
            
        </form>

    </div>
@endsection