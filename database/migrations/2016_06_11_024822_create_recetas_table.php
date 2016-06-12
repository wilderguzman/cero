<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('n_receta');
            $table->integer('medico_id')->unsigned();
            $table->foreign('medico_id')->references('id')->on('medicos')->onDelete('cascade');
            $table->integer('asegurado_id')->unsigned();
            $table->foreign('asegurado_id')->references('id')->on('asegurados')->onDelete('cascade');
            $table->date('fecha');
            $table->text('modo_uso');
            $table->string('estado_receta');
            $table->date('f_ini_tra');
            $table->date('f_fin_tra');
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
        Schema::drop('recetas');
    }
}
