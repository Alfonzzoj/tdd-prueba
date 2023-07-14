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
        Schema::create('delivery_zones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->string('nombre_direccion');
            $table->string('zona_entrega');
            $table->string('numero_externo');
            $table->string('numero_interno');
            $table->string('codigo_postal');
            $table->string('colonia');
            $table->string('delegacion');
            $table->string('estado');
            $table->string('pais');
            $table->string('dias_entrega');
            $table->time('horario_entrega_inicio');
            $table->time('horario_entrega_fin');

            $table->string('calle');
            $table->boolean('default')->default(false);
            $table->string('horario_entrega');
            $table->timestamps();

            // $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_zones');
    }
};
