<?php

use Illuminate\Database\Seeder;
use App\Models\ModelClient;
class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelClient $client)
    {
        $client->create([
            'nome_fantasia'=>'Exemplo Cliente',
            'razao_social'=>'Exemplo Lida',
            'tipo'=>'Pessoa Física',
            'identificacao'=>'123456789',
            'pais'=>'BR',
            'estado'=>'SP',
            'cidade'=>'Olinda',
            'bairro'=>'Jardim Atlantico',
            'rua'=>'rua c',
            'CEP'=>'123456789',
            'numero'=>'156'
        ]);

        $client->create([
            'nome_fantasia'=>'Exemplo Cliente 2',
            'razao_social'=>'Exemplo Lida 2',
            'tipo'=>'Pessoa Jurídica',
            'identificacao'=>'123456789',
            'pais'=>'BR',
            'estado'=>'SP',
            'cidade'=>'Olinda',
            'bairro'=>'Jardim Atlantico',
            'rua'=>'rua c',
            'CEP'=>'123458789',
            'numero'=>'456'
        ]);
    }
}
