<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    protected $fillable = [
    	'numeroDoProcesso',
    	'nomeDoInfrator',
    	'artigo',
    	'delegacia',
    	'vitima',
    	'dataDeIniProc',
    	'dataDoResult',
    	'resultDoProc',
    	'obsResultProc'
    ];

    protected $guarded = ['id'];

    public function infpessoal()
    {
    	return $this->belongsToMany('App\Infpessoal');
    }
}
