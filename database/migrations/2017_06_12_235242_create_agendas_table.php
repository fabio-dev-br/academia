<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            //  $table->increments('id');
            $table->increments('id');
            $table->string('personaltrainer', 60);
            $table->string('data', 15);
            $table->string('hoarioinicio', 15);
            $table->string('hoariofim', 15);
            $table->string('tipotreino', 60);
            $table->string('unidade', 20);

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
        Schema::dropIfExists('agendas');
    }
}
