<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('infrator_id')->unsigned();
            $table->string('cep')->nullable();
            $table->string('rua', 100);
            $table->string('numero');
            $table->string('complemento', 80)->nullable();
            $table->string('bairro', 45);
            $table->string('cidade', 45);
            $table->string('estado', 3);
            $table->timestamps();
            $table->foreign('infrator_id')->references('id')->on('infrators');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
