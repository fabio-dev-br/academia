<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
          //  $table->increments('id');
            $table->increments('id');
            $table->string('nome', 60);
            $table->string('cpf', 15);
            $table->string('rg', 15);
            $table->string('endereço', 60);
            $table->string('telefone');
            $table->string('sexo', 15);
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
