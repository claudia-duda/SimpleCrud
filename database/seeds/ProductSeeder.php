<?php

use Illuminate\Database\Seeder;
use App\Models\ModelProduct;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelPRoduct $product)
    {
        $product->create([
            'nome'=>'Exemplo Produto',
            'codigo_estoque'=>'12345689',
            'tipo_item'=>'Limpeza',
            'preco_compra'=>'19.90',
            'preco_venda'=>'25.90'
        ]);

        $product->create([
            'nome'=>'Exemplo Produto 2',
            'codigo_estoque'=>'656548675',
            'tipo_item'=>'Limpeza',
            'preco_compra'=>'20.90',
            'preco_venda'=>'35.90'
        ]);
    }
}
