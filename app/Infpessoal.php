<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infpessoal extends Model
{

	protected $guarded = ['id','infrator_id'];

	protected $fillable = [
		'nome',
		'vulgo',
		'dataDeNascimento',
		'nomeDaMae',
		'nomeDoPai',
		'sexo',
		'nacionalidade',
		'naturalidade',
		'estadoCivil',
		'profissao',
		'estadoEconomico',
		'instrucao',
		'cpf',
		'rg',
		'cnh',
		'fotoDePerfil',
	];

    public function Infratores()
	{
		return $this->BelongsTo("App\Infratores");
	} 

}
