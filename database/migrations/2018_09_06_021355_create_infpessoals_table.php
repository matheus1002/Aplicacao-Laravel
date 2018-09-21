<?php
 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfpessoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infpessoals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('vulgo', 45)->nullable();
            $table->date('dataDeNascimento');
            $table->string('nomeDaMae', 100);
            $table->string('nomeDoPai', 100)->nullable();
            $table->string('sexo', 15);
            $table->string('nacionalidade', 45);
            $table->string('naturalidade', 45);
            $table->string('estadoCivil', 20);
            $table->string('profissao', 45);
            $table->decimal('estadoEconomico', 8, 2);
            $table->string('instrucao', 60);
            $table->string('cpf')->unique();
            $table->string('rg')->unique();
            $table->string('cnh')->unique();
            $table->string('fotoDePerfil');
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
        Schema::dropIfExists('infpessoals');
    }
}
