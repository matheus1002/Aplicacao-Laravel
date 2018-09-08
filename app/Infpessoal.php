<?php
 
namespace App; 

use Illuminate\Database\Eloquent\Model;

class Infpessoal extends Model
{
    protected $table = 'infpessoais';
    protected $fillable = ['nome','dataDeNascimento','nomeDaMae','nomeDoPai','sexo','nacionalidade','naturalidade','estadoCivil','profissao','estadoEconomico','instrucao','cpf','rg','cnh','fotoDePerfil','vulgo'];

	public function infratores()
	{
		return $this->belongsTo(Infrator::class);
	}
}
