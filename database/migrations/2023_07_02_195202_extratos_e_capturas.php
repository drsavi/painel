<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExtratosECapturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extratos', function (Blueprint $table){
            $table->id();
            $table->string('certidao');
            $table->string('competencia');
            $table->string('quantidadecnd');
            $table->string('quantidadecnpj');
        });

        Schema::create('capturas', function (Blueprint $table){
            $table->id();
            $table->string('certidao');
            $table->string('categoria');
            $table->string('uf');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extratos');
        Schema::dropIfExists('capturas');
    }
}
