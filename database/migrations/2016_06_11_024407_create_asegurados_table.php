<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAseguradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asegurados', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('a_paterno');
            $table->string('a_materno');
            $table->integer('c_i');
            $table->integer('beneficiario_ci');
            $table->date('fecha_de_nac');
            $table->string('sexo');
            $table->string('grado');
            $table->string('fuerza');
            $table->string('titular');
            $table->string('tipo_de_asegurado');
            $table->string('n_historial');
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
        Schema::drop('asegurados');
    }
}
