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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            // $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');            $table->string('nombre');
            $table->string('puesto');
            $table->string('telefono',50);
            $table->string('extension')->nullable();
            $table->string('correo',100);
            $table->string('celular',50);
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
        // Schema::table('contacts', function (Blueprint $table) {
        //     // $table->dropForeign(['client_id']);
        //     $table->dropColumn('client_id');
        // });
        Schema::dropIfExists('contacts');
    }
};
