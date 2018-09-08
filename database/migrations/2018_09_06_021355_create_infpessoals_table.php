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
            $table->date('dataDeNascimento');
            $table->string('nomeDaMae', 100);
            $table->string('nomeDoPai', 100);
            $table->enum('sexo', ['Masculino','Feminino']);
            $table->string('nacionalidade', 45);
            $table->string('naturalidade', 45);
            $table->enum('estadoCivil', ['Solteiro(a)','Casado(a)','Divorciado(a)','Viúvo(a)','Separado(a)']);
            $table->string('profissao', 45);
            $table->decimal('estadoEconomico', 8, 2);
            $table->enum('instrucao',['Analfabeto','Ensino fundamental incompleto','Ensino fundamental completo','Ensino médio incompleto','Ensino médio completo','Superior completo','Pós Gruduação','Mestrado','Doutorado','Pós-Doutorado']);
            $table->integer('cpf')->unique();
            $table->integer('rg')->unique();
            $table->integer('cnh')->unique();
            $table->string('fotoDePerfil');
            $table->string('vulgo', 45);
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
