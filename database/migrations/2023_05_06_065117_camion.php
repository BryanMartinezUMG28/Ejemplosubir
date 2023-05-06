<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camion', function (Blueprint $table) {

            //Llave primaria id_placa
            $table ->integer('id_placa')->primary();

            $table ->string('placa_camion', 6);
            $table ->string('marca', 45)->nullable();
            $table ->string('color', 25)->nullable();
            $table ->date('modelo')->nullable();
            $table ->integer('capacidad_toneladas');

            //Llave foranea
            $table->foreignId('id_transporte')->references('id')->on('transporte');

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
        Schema::dropIfExists('camion');
    }
}
