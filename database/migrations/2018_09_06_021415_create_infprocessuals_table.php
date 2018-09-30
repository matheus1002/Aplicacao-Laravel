<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfprocessualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infprocessuals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('infrator_id')->unsigned();
            $table->string('situacao', 15);
            $table->string('classeDeliquente', 15);
            $table->string('unidadeDeOrigem', 60)->nullable();
            $table->date('dataDeRecolhimento')->nullable();
            $table->longText('observacao', 800)->nullable();
            $table->longText('historico', 800);
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
        Schema::dropIfExists('infprocessuals');
    }
}
