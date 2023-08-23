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
    Schema::create('account_statements', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('pedido_id');
      $table->unsignedBigInteger('client_id');
      $table->date('fecha_creacion');
      $table->date('fecha_entrega');
      $table->float('pagado')->unsigned()->default(0);
      $table->float('pendiente')->unsigned()->default(0);
      $table->timestamps();

      $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('account_statements');
  }
};
