<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracfisica extends Model
{
    protected $fillable = [
        'fotoCaracFisica',
    	'etnia',
    	'olho',
    	'barba',
    	'dente',
    	'orelha',
    	'boca',
    	'nariz',
    	'sombrancelha',
    	'altura',
    	'corDoCabelo',
    	'tipoDeCabelo',
    	'cicMarcTatu'
    ];

	protected $guarded = ['id'];

	public function infratores()
    {
    	return $this->belongsTo('App\Caracfisica');
    }

}
