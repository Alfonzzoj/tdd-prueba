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
        Schema::create('tax_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            // $table->foreign('client_id')->references('id')->on('clients');
            $table->string('calle');
            $table->string('numero_externo');
            $table->string('numero_interno')->nullable();
            $table->string('codigo_postal');
            $table->string('colonia');
            $table->string('delegacion');
            $table->string('estado');
            $table->string('pais');
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
        Schema::dropIfExists('tax_address');
    }
};
