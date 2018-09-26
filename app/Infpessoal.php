<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Infpessoal extends Model
{
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
      'fotoDePerfil'
  ];

    protected $guarded = ['id'];

    public function infratores()
    {
    	return $this->belongsTo('App\Infpessoal');
    }

    public function processo()
    {
        return $this->hasMany('App\Processo','infpessoal_id','id');
    }

}
