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

        $infratores = Infrator::all();
        $enderecos = Endereco::all(); 
        $infpessoals = Infpessoal::all();
        $infprocessuals = Infprocessual::all();
        $caracfisicas = Caracfisica::all();
        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>'','titulo'=>'Infratores'], 
        ];
        return view('admin.infratores.index', array('infratores' => $infratores,'enderecos' => $enderecos,'infpessoals' => $infpessoals,'infprocessuals' => $infprocessuals,'caracfisicas' => $caracfisicas,'caminhos' => $caminhos));

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

        $infpessoals = Infpessoal::all();
        $infprocessuals = Infprocessual::all();
        $enderecos = Endereco::all();

        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>route('infratores.index'),'titulo'=>'Infratores'],
            ['url'=>'', 'titulo'=>'Adicionar'], 
        ];

        return view('admin.infratores.adicionar', array('caminhos' => $caminhos,'infpessoals' => $infpessoals, 'infprocessuals' => $infprocessuals,'enderecos' => $enderecos));

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
