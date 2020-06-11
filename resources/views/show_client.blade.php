@extends('templates.template')

@section('content')
<h1 class="text-center">Visualizar Clientes</h1>
<div class="col-8, m-auto">
   <p><strong>Nome fantasia:</strong> {{ $client->nome_fantasia }}</p>
   <p><strong>Tipo:</strong> {{ $client->tipo }}</p>
   <p><strong>Identificacao: </strong>{{ $client->identificacao }}</p>
   <p><strong>Razao social: </strong> {{ $client->razao_social }}</p>    
   <p><strong>Pais: </strong> {{ $client->pais }}</p>    
   <p><strong>Cidade: </strong> {{ $client->cidade }}</p>  
   <p><strong>Bairro: </strong> {{ $client->bairro }}</p>  
   <p><strong>Rua: </strong> {{ $client->rua }}</p>  
   <p><strong>numero:  </strong> {{ $client->numero }}</p>  
</div>

@endsection