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
            $table->string('etnia', 45);
            $table->string('olho', 45);
            $table->string('barba', 45);
            $table->string('bigode', 45);
            $table->string('dente', 45);
            $table->string('orelha', 45);
            $table->string('boca', 45);
            $table->string('nariz', 45);
            $table->string('labio', 45);
            $table->string('sombrancelha', 45);
            $table->decimal('altura', 3, 2);
            $table->string('corDoCabelo', 60);
            $table->string('tipoDeCabelo', 60);
            $table->string('cicMarcTatu', 200);
            $table->timestamps();
        });

        Schema::create('infpessoal_infrator', function(Blueprint $table) {
            $table->integer('infrator_id')->unsigned();
            $table->integer('infpessoal_id')->unsigned();

            $table->foreign('infrator_id')->references('id')->on('infratores')->onDelete('cascade');
            $table->foreign('infpessoal_id')->references('id')->on('infpessoais')->onDelete('cascade');

            $table->primary(['infrator_id','infpessoal_id']);
        });

        Schema::create('infprocessual_infrator', function(Blueprint $table) {
            $table->integer('infrator_id')->unsigned();
            $table->integer('infprocessual_id')->unsigned();

            $table->foreign('infrator_id')->references('id')->on('infratores')->onDelete('cascade');
            $table->foreign('infprocessual_id')->references('id')->on('infprocessuais')->onDelete('cascade');

            $table->primary(['infrator_id','infprocessual_id']);
        });

        Schema::create('endereco_infrator', function(Blueprint $table) {
            $table->integer('infrator_id')->unsigned();
            $table->integer('endereco_id')->unsigned();

            $table->foreign('infrator_id')->references('id')->on('infratores')->onDelete('cascade');
            $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete('cascade');

            $table->primary(['infrator_id','endereco_id']);
        });

        Schema::Create('caracfisica_infrator', function(Blueprint $table) {
            $table->integer('infrator_id')->unsigned();
            $table->integer('caracfisica_id')->unsigned();

            $table->foreign('infrator_id')->references('id')->on('infratores')->onDelete('cascade');
            $table->foreign('caracfisica_id')->references('id')->on('caracfisicas')->onDelete('cascade');

            $table->primary(['infrator_id','caracfisica_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caracfisica_infrator');
        Schema::dropIfExists('endereco_infrator');
        Schema::dropIfExists('infprocessual_infrator');
        Schema::dropIfExists('infpessoal_infrator');
        Schema::dropIfExists('caracfisicas');
    }
}
