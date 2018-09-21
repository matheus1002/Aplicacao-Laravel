<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infrators', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('endereco_id')->unsigned();
            $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete('cascade');

            
            $table->integer('infpessoal_id')->unsigned();
            $table->foreign('infpessoal_id')->references('id')->on('infpessoals')->onDelete('cascade');
            
            
            $table->integer('infprocessual_id')->unsigned();
            $table->foreign('infprocessual_id')->references('id')->on('infprocessuals')->onDelete('cascade');
 
            $table->integer('caracfisica_id')->unsigned();
            $table->foreign('caracfisica_id')->references('id')->on('caracfisicas')->onDelete('cascade');
            
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
        Schema::dropIfExists('infrators');
    }
}
