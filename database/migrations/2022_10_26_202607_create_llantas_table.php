<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llantas', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->integer('Ancho_de_llanta');
            $table->integer('Diametro_del_rin');
            $table->integer('Presion_max');
            $table->string('Fabricante');
            $table->integer('Stock');
            $table->softDeletes();
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
        Schema::dropIfExists('llantas');
    }
};
