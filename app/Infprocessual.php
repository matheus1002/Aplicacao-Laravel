<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infprocessual extends Model
{
    protected $fillable = [
        'situacao',
    	'classeDeliquente',
    	'unidadeDeOrigem',
    	'dataDeRecolhimento',
    	'observacao',
    	'historico'
    ];

	protected $guarded = ['id'];

	public function infratores()
    {
    	return $this->belongsTo('App\Infprocessual');
    }

}
