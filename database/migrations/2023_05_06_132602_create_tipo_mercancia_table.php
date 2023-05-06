<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoMercanciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoMercancia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mercancia_id')->unsigned();
            $table ->string('descripcion', 175)->nullable();
            $table->timestamps();

            $table->foreign('mercancia_id')->references('id')->on('mercancia')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipoMercanciaSeeder');
    }
}
