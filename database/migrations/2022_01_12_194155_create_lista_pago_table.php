<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaPagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_pago', function (Blueprint $table) {
            $table->id();

            $table->foreignId('client_id')->constrained('client');
            $table->bigInteger('num_plan');
            $table->bigInteger('valor');
            $table->date('vencimiento');
            $table->integer('vigencia');

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
        Schema::dropIfExists('lista_pago');
    }
}
