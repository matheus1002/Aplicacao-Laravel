<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infrator extends Model
{
	protected $fillable = ['endereco_id'];

	protected $guarded = ['id'];

    public function endereco()
    {
    	return $this->hasOne('App\Endereco','infrator_id','id');
    }

    public function infpessoal()
    {
    	return $this->hasOne('App\Infpessoal','infrator_id','id');
    }

    public function infprocessual()
    {
        return $this->hasOne('App\Infprocessual','infrator_id','id');
    }

    public function caracfisica()
    {
        return $this->hasOne('App\Caracfisica','infrator_id,','id');
    }

}
