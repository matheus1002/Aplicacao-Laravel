<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infrator extends Model
{
    protected $table = 'infratores';
    //protected $fillable =  [''];

    public function infpessoais() 
    {
    	return $this->hasOne(Infpessoal::class); 
    }

    public function infprocessuais()
    {
    	return $this->hasOne(Infprocessual::class);
    }

    public function enderecos()
    {
    	return $this->hasOne(Endereco::class);
    }

    public function caracfisicas()
    {
    	return $this->hasOne(Caracfisica::class);
    }

}
