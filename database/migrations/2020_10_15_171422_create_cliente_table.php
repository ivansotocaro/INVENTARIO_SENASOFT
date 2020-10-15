<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_id');
            $table->foreignId('factura_id');
            $table->string('nombre');
            $table->string('tipo_docuemto');
            $table->bigInteger('documento');
            $table->string('direccion');
            $table->string('correo');
            $table->string('ciudad');
            $table->bigInteger('telefono');
            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->foreign('factura_id')->references('id')->on('facturas');
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
        Schema::dropIfExists('cliente');
    }
}
