<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infrator extends Model
{

	protected $guarded = ['id'];

    public function endereco()
    {
    	return $this->hasOne(endereco::class,'id','infrator_id');
    }

    public function infpessoal()
    {
    	return $this->hasOne(Infpessoal::class,'id','infrator_id');
    }

    public function infprocessual()
    {
        return $this->hasOne(Infprocessual::class,'id','infrator_id');
    }

    public function caracfisica()
    {
        return $this->hasOne(Caracfisica::class,'id','infrator_id');
    }

}
