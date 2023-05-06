'<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMercanciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mercancia', function (Blueprint $table) {
            $table->increments('id');
            $table ->string('codigo', 50)->nullable();
            $table ->string('nombre', 175)->nullable();
            $table ->string('id_tipo_mercancia', 175)->nullable();
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
        Schema::dropIfExists('mercanciaSeeder');
    }
}
