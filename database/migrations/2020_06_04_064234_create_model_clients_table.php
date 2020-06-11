<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_fantasia');   
            $table->string('razao_social');
            $table->string('tipo');
            $table->string('identificacao', 18);
            $table->char('pais', 2);
            $table->char('estado',2);
            $table->string('cidade', 20);
            $table->string('bairro', 20);
            $table->string('rua', 20);
            $table->smallInteger('numero');
            $table->string('CEP', 8);         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
