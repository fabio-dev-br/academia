<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

<<<<<<< HEAD
class CreateSalasTable extends Migration
=======
class CreatePatrimoniosTable extends Migration
>>>>>>> master
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
<<<<<<< HEAD
=======
            $table->string('quantidade', 60);
>>>>>>> master
            $table->timestamps();
        });
    }

<<<<<<< HEAD
=======
    /**
     * Reverse the migrations.
     *
     * @return void
     */
>>>>>>> master
    public function down()
    {
        Schema::dropIfExists('patrimonios');
    }
}