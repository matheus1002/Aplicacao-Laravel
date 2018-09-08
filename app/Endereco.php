<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';
    protected $fillable = ['cep','endereco','numero','complemento','bairro','municipio','uf'];

    public function infratores()
	{
		return $this->belongsTo(Infrator::class);
	}
}
