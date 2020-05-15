<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecursosRutaComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recursos_ruta_compras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ruta');
            $table->string('titulo');
            $table->string('descripcion')->nullable();
            $table->string('url')->nullable();
            $table->string('file');
            $table->string('ext');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('recursos_ruta_compras');
    }
}
