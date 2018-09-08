<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracfisica extends Model
{
    protected $table = 'caracfisicas';
    protected $fillable = ['fotoCaracFisica','etnia','olho','barba','bigode','dente','orelha','boca','nariz','labio','sombrancelhas','altura','corDoCabelo','tipoDeCabelo','cicMarcTatu'];

    public function infratores()
	{
		return $this->belongsTo(Infrator::class);
	}
}
