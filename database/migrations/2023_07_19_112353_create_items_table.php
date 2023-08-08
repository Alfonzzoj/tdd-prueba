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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo_etiqueta', ['Tejida', 'Estampada', 'Transfer', 'Impresa', 'Impreso']);
            $table->string('tipo_cliente');
            $table->string('clave');
            $table->string('nombre_etiqueta');
            $table->integer('ancho');
            $table->integer('alto');
            $table->string('image_path')->nullable();
            $table->boolean('tallas');
            $table->enum('estado', ['activo', 'inactivo', 'descontinuado']);
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
        Schema::dropIfExists('items');
    }
};
