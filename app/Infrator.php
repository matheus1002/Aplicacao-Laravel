<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infrator extends Model
{

	protected $guarded = ['id'];

    public function Infpessoal()
	{
		return $this->HasOne("App\Infpessoal");
	} 

	public function Infprocessual()
	{
		return $this->HasOne("App\Infprocessual");
	} 

	public function Endereco()
	{
		return $this->HasOne("App\Endereco");
	} 

	public function Caracfisica()
	{
		return $this->HasOne("App\Caracfisica");
	} 

}
