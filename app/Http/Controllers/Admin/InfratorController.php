<?php   

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Infrator;
use App\Endereco;
use App\Infpessoal;
use App\Infprocessual;
use App\Caracfisica;
use Illuminate\Support\Facades\Gate;

class InfratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if (Gate::denies('infrator-view')) {
            abort(403, "Não autorizado!");
        }

        $infratores = Infrator::with('infpessoal')->with('infprocessual')->paginate(2);

        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>'','titulo'=>'Infratores'], 
        ];
        return view('admin.infratores.index', compact('infratores','caminhos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::denies('infrator-create')) {
            abort(403, "Não autorizado!");
        }

        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>route('infratores.index'),'titulo'=>'Infratores'],
            ['url'=>'', 'titulo'=>'Adicionar'], 
        ];

        return view('admin.infratores.adicionar', compact('caminhos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Gate::denies('infrator-create')) {
            abort(403, "Não autorizado!");
        }

        $infrator = New Infrator();

        $infrator->infpessoal()->create([
            'nome' => $request['nome'],
            'vulgo' => $request['vulgo'],
            'dataDeNascimento' => $request['dataDeNascimento'],
            'nomeDaMae' => $request['nomeDaMae'],
            'nomeDoPai' => $request['nomeDoPai'],
            'sexo' => $request['sexo'],
            'nacionalidade' => $request['nacionalidade'],
            'naturalidade' => $request['naturalidade'],
            'estadoCivil' => $request['estadoCivil'],
            'profissao' => $request['profissao'],
            'estadoEconomico' => $request['estadoEconomico'],
            'instrucao' => $request['instrucao'],
            'cpf' => $request['cpf'],
            'rg' => $request['rg'],
            'cnh' => $request['cnh'],
            'fotoDePerfil' => $request['fotoDePerfil'],
        ]); 

        $infrator->infprocessual()->create([
            'situacao' => $request['situacao'],
            'classeDeliquente' => $request['classeDeliquente'],
            'unidadeDeOrigem' => $request['unidadeDeOrigem'],
            'dataDeRecolhimento' => $request['dataDeRecolhimento'],
            'observacao' => $request['observacao'],
            'historico' => $request['historico'],
        ]);

        $infrator->endereco()->create([
            'cep' => $request['cep'],
            'endereco' => $request['endereco'],
            'numero' => $request['numero'],
            'complemento' => $request['complemento'],
            'bairro' => $request['bairro'],
            'municipio' => $request['municipio'],
            'uf' => $request['uf'],
        ]);

        $infrator->caracfisica()->create([
            'fotoCaracFisica' => $request['fotoCaracFisica'],
            'etnia' => $request['etnia'],
            'olho' => $request['olho'],
            'barba' => $request['barba'],
            'dente' => $request['dente'],
            'orelha' => $request['orelha'],
            'boca' => $request['boca'],
            'nariz' => $request['nariz'],
            'sombrancelha' => $request['sombrancelha'],
            'altura' => $request['altura'],
            'corDoCabelo' => $request['corDoCabelo'],
            'tipoDeCabelo' => $request['tipoDeCabelo'],
            'cicMarcTatu' => $request['cicMarcTatu'],
        ]);

        return redirect()->route('infratores.index');      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
