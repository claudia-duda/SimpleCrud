@extends('templates.template')

@section('content')
  <h1 class="text-center">Tabela Clientes</h1>
  <div class="text-center">
    <a href="{{ url('clients/create') }}">
      <button class="btn btn-success mt-3 mb-4">Cadastrar</button>
    </a>    
  </div>
  <div class="col-8, m-auto">
   @csrf
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome Fantasia</th>
        <th scope="col">Razão Social</th>
        <th scope="col">Tipo</th>
        <th scope="col">Identificação</th>
        <th scope="col">Endereço</th>
        <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
    
    @foreach($clients as $client)
        <tr>
          <th scope="row">{{ $client->id }}</th>
          <td>{{ $client->nome_fantasia }}</td>
          <td>{{ $client->razao_social }}</td>
          <td>{{ $client->tipo }}</td>
          <td>{{ $client->identificacao }}</td>
          <td>
            {{ $client->rua }} -{{ $client->numero }}</br>
            {{ $client->cidade }}-{{ $client->estado }}</br>
            {{ $client->CEP }} -{{ $client->pais }}
          </td>
          <td>
            <a href="{{ url("clients/$client->id") }}">
              <button class="btn btn-dark">Visualizar</button>
            </a>  
            <a href="{{ url("clients/$client->id/edit") }}">
              <button class="btn btn-primary">Editar</button>
            </a>
            <a class="js-del" href="{{ url("clients/$client->id") }}">
              <button class="btn btn-danger">Deletar</button>
            </a>
          </td>
        </tr>       
    @endforeach
    </tbody>
    </table>
    {{ $clients->links() }}
  </div>
@endsection