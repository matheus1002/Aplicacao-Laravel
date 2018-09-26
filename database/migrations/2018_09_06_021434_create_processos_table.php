<?php 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numeroDoProcesso')->unique();
            $table->string('nomeDoInfrator', 45);
            $table->string('artigo', 45);
            $table->string('delegacia', 45);
            $table->string('vitima', 60);
            $table->date('dataDeIniProc');
            $table->date('dataDoResult');
            $table->string('resultDoProc', 45);
            $table->longText('obsResultProc', 255);
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
        Schema::dropIfExists('processos');
    }
}
