<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracfisicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracfisicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fotoCaracFisica');
            $table->string('etnia', 45)->nullable();
            $table->string('olho', 45)->nullable();
            $table->string('barba', 45)->nullable();
            $table->string('dente', 45)->nullable();
            $table->string('orelha', 45)->nullable();
            $table->string('boca', 45)->nullable();
            $table->string('nariz', 45)->nullable();
            $table->string('sombrancelha', 45)->nullable();
            $table->string('altura');
            $table->string('corDoCabelo', 60)->nullable();
            $table->string('tipoDeCabelo', 60)->nullable();
            $table->string('cicMarcTatu', 200)->nullable();
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
        Schema::dropIfExists('caracfisicas');
    }
}
