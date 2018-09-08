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
            $table->enum('situacao',['preso','foragido']);
            $table->enum('classeDeliquente',['primario','reincidente']);
            $table->string('unidadeDeOrigem', 60);
            $table->date('dataDeRecolhimento');
            $table->longText('observacao', 800);
            $table->longText('historico', 800);
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
        Schema::dropIfExists('infprocessuals');
    }
}
