<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('a_paterno');
            $table->string('a_materno');
            $table->integer('ci');
            $table->date('fecha_de_nac');
            $table->integer('matricula');
            $table->integer('telefono');
            $table->string('direccion');
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
        Schema::drop('personals');
    }
}
