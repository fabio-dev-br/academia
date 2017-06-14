<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreinosTable extends Migration
{
    public function up()
    {
        Schema::create('treinos', function (Blueprint $table) {
            //  $table->increments('id');
            $table->increments('id');
            $table->string('tipo', 60);
            $table->string('exercicio', 100);
            $table->string('repeticao', 50);
            $table->string('frequencia', 60);
            $table->string('personalresponsavel', 100);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('treinos');
    }
}
