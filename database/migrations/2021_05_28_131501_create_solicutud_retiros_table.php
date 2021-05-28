<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicutudRetirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicutud_retiros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img_deposito')->nullable();
            $table->string('numero_de_comprobante')->nullable();
            $table->string('email');
            $table->enum('estado', ['pendiente', 'verificado']);
            $table->double('amount',10,2);
            $table->unsignedbigInteger('user_banks_id');
            $table->foreign('user_banks_id')->references('id')->on('user_banks')->onDelete('CASCADE');
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
        Schema::dropIfExists('solicutud_retiros');
    }
}
