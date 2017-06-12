<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            //  $table->increments('id');
            $table->increments('id');
            $table->string('nome', 60);
            $table->string('cpf', 15);
            $table->string('numerocarteira', 15);
            $table->string('cargo', 20);
            $table->string('datanascimento', 15);
            $table->string('endereço', 20);
            $table->string('telefone', 15);
            $table->string('telefonecelular', 15);
            $table->string('email', 20);
            $table->string('sexo', 10);
            $table->string('carga', 20);
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
        Schema::dropIfExists('funcionarios');
    }
}
