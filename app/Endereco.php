<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{

	protected $fillable = [
		'cep',
		'endereco',
		'numero',
		'complemento',
		'bairro',
		'municipio',
		'uf'
	];

	protected $guarded = ['id'];

    public function infratores()
    {
    	return $this->belongsTo('App\Endereco');
    }
}
