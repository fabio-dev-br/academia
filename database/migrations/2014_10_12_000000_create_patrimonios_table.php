<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrimonios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('numero', 60);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patrimonios');
    }
}
