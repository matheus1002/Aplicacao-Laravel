<?php 

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Infrator;
use App\Infpessoal;
use App\Infprocessual;
use App\Endereco;
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

        $infratores = Infrator::paginate(2);

        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>'','titulo'=>'Infratores'], 
        ];

        return view('admin.infratores.index', array('infratores' => $infratores,'caminhos' => $caminhos,'buscar' => null));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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

        $this->validate($request,[
            'nome' => 'required|alpha',
            'dataDeNascimento' => 'required|date',
            'nomeDaMae' => 'required|alpha',
            'naturalidade' => 'required|alpha',
            'rg' => 'required|numeric|unique:infpessoals,rg',
            'dataDeRecolhimento' => 'required|date',
            'historico' => 'required',
            'rua' => 'required',
            'numero' => 'required|numeric',
            'bairro' => 'required',
            'cidade' => 'required|alpha',
            'estado' => 'required|alpha',
            'altura' => 'required',
        ]);

        $infrator = New Infrator;

        $infrator->id = $request->id;
        $infrator->save();
    
        $infpessoal = New Infpessoal;

        $infpessoal->nome = $request->nome;
        $infpessoal->vulgo = $request->vulgo;
        $infpessoal->dataDeNascimento = $request->dataDeNascimento;
        $infpessoal->nomeDaMae = $request->nomeDaMae;
        $infpessoal->nomeDoPai = $request->nomeDoPai;
        $infpessoal->sexo = $request->sexo;
        $infpessoal->nacionalidade = $request->nacionalidade;
        $infpessoal->naturalidade = $request->naturalidade;
        $infpessoal->estadoCivil = $request->estadoCivil;
        $infpessoal->profissao = $request->profissao;
        $infpessoal->estadoEconomico = $request->estadoEconomico;
        $infpessoal->instrucao = $request->instrucao;
        $infpessoal->cpf = $request->cpf;
        $infpessoal->rg = $request->rg;
        $infpessoal->cnh = $request->cnh;
        $infpessoal->fotoDePerfil = $request->fotoDePerfil;
        $infrator->infpessoal()->save($infpessoal);

        $infprocessual = New Infprocessual;
        $infprocessual->situacao = $request->situacao;
        $infprocessual->classeDeliquente = $request->classeDeliquente;
        $infprocessual->unidadeDeOrigem = $request->unidadeDeOrigem;
        $infprocessual->dataDeRecolhimento = $request->dataDeRecolhimento;
        $infprocessual->observacao = $request->observacao;
        $infprocessual->historico = $request->historico;
        $infrator->infprocessual()->save($infprocessual);

        $endereco = New Endereco;
        $endereco->cep = $request->cep;
        $endereco->rua = $request->rua;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $infrator->endereco()->save($endereco);

        $caracfisica = New Caracfisica;
        $caracfisica->etnia = $request->etnia;
        $caracfisica->olho = $request->olho;
        $caracfisica->barba = $request->barba;
        $caracfisica->dente = $request->dente;
        $caracfisica->orelha = $request->orelha;
        $caracfisica->boca = $request->boca;
        $caracfisica->nariz = $request->nariz;
        $caracfisica->sobrancelha = $request->sobrancelha;
        $caracfisica->altura = $request->altura;
        $caracfisica->corDoCabelo = $request->corDoCabelo;
        $caracfisica->tipoDeCabelo = $request->tipoDeCabelo;
        $caracfisica->cicMarcTatu = $request->cicMarcTatu;
        $caracfisica->fotoCaracFisica = $request->fotoCaracFisica;
        $infrator->caracfisica()->save($caracfisica);
    
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
        if (Gate::denies('infrator-view')) {
            abort(403, "Não autorizado!");
        }

        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>route('infratores.index'),'titulo'=>'Infratores'],
            ['url'=>'', 'titulo'=>'Visualizar'], 
        ];

        $infrator = Infrator::find($id);

        return view('admin.infratores.visualizar', compact('infrator','caminhos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        if (Gate::denies('infrator-edit')) {
            abort(403, "Não autorizado!");
        }

        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>route('infratores.index'),'titulo'=>'Infratores'],
            ['url'=>'', 'titulo'=>'Editar'], 
        ];

        $infrator = Infrator::find($id);

        return view('admin.infratores.editar', compact('infrator','caminhos')); 
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

        $this->validate($request,[
            'dataDeRecolhimento' => 'required|date',
            'historico' => 'required',
            'rua' => 'required',
            'numero' => 'required|numeric',
            'bairro' => 'required|',
            'cidade' => 'required',
            'estado' => 'required|alpha',
        ]);
        
        Infpessoal::find($id)->update([
            'vulgo' => $request['vulgo'],
            'nacionalidade' => $request['nacionalidade'],
            'profissao' => $request['profissao'],
            'estadoEconomico' => $request['estadoEconomico'],

        ]);

        Infprocessual::find($id)->update([
            'situacao' => $request['situacao'],
            'classeDeliquente' => $request['classeDeliquente'],
            'unidadeDeOrigem' => $request['unidadeDeOrigem'],
            'dataDeRecolhimento' => $request['dataDeRecolhimento'],
            'observacao' => $request['observacao'],
            'historico' => $request['historico'],
        ]);

        Endereco::find($id)->update([
            'cep' => $request['cep'],
            'rua' => $request['rua'],
            'numero' => $request['numero'],
            'complemento' => $request['complemento'],
            'cidade' => $request['cidade'],
            'estado' => $request['estado'],
        ]);

        Caracfisica::find($id)->update([
            'etnia' => $request['etnia'],
            'olho' => $request['olho'],
            'barba' => $request['barba'],
            'dente' => $request['dente'],
            'orelha' => $request['orelha'],
            'boca' => $request['boca'],
            'nariz' => $request['nariz'],
            'sobrancelha' => $request['sobrancelha'],
            'corDoCabelo' => $request['corDoCabelo'],
            'tipoDeCabelo' => $request['tipoDeCabelo'],
            'cicMarcTatu' => $request['cicMarcTatu'],
        ]);
        
        return redirect()->route('infratores.index', compact('situacao'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Infrator::destroy($id);

        return redirect()->route('infratores.index');
    }

    public function busca(Request $request)
    {   
        $buscaInput = $request->input('busca'); 

        if (empty($buscaInput)) {
            return redirect()->route('infratores.index');
        }

        $infratores = Infrator::join('infpessoals','infrators.id','=','infpessoals.infrator_id')
                                ->where('nome','LIKE','%'.$buscaInput.'%')
                                ->orwhere('vulgo','LIKE','%'.$buscaInput.'%')
                                ->paginate();

        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>route('infratores.index'),'titulo'=>'Infratores'],
            ['url'=>'', 'titulo'=>'Busca'], 
        ];

        return view('admin.infratores.index', array('infratores' => $infratores,'caminhos' => $caminhos, 'buscar' => $buscaInput)); 
    }

}
