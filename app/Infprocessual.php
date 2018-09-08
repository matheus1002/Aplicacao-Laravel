<?php  

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infprocessual extends Model
{
    protected $table = 'infprocessuais';
    protected $fillable = ['situacao','classeDeliquente','unidadeDeOrigem','		dataDeRecolhimento','observacao','historico'];

    public function infratores()
    {
    	return $this->belongsTo(Infrator::class);
    }
}
