<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Processo;
use App\Infpessoal;
use Illuminate\Support\Facades\Gate;

class ProcessoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('processo-view')) {
            abort(403, "Não autorizado!");
        }

        $processos = Processo::paginate(2);

        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>'','titulo'=>'Processos'], 
        ];

        return view('admin.processos.index', array('processos' => $processos,'caminhos' => $caminhos, 'buscar' => null));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
       if (Gate::denies('processo-create')) {
            abort(403, "Não autorizado!");
        }

        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>route('processos.index'),'titulo'=>'Processos'],
            ['url'=>'', 'titulo'=>'Adicionar'], 
        ];

        return view('admin.processos.adicionar', array('caminhos' => $caminhos));
    }

    public function autocomplete(Request $request)
    {
        $data = Infpessoal::select("nome")
                ->where("nome","LIKE","%{$request->input('query')}%")
                ->get();
   
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Gate::denies('processo-create')) {
            abort(403, "Não autorizado!");
        }

        $this->validate($request,[ 
            'numeroDoProcesso' => 'required|numeric',
            'nomeDoInfrator' => 'required|alpha',
            'vitima' => 'required|alpha',
            'dataDeIniProc' => 'required|date',
            'dataDoResult' => 'required|date',
            'resultDoProc' => 'required|alpha',
        ]);

        Processo::create([
            'numeroDoProcesso' => $request['numeroDoProcesso'],
            'nomeDoInfrator' => $request['nomeDoInfrator'],
            'artigo' => $request['artigo'],
            'delegacia' => $request['delegacia'],
            'vitima' => $request['vitima'],
            'dataDeIniProc' => $request['dataDeIniProc'],
            'dataDoResult' => $request['dataDoResult'],
            'resultDoProc' => $request['resultDoProc'],
            'obsResultProc' => $request['obsResultProc'],
        ]);

        return redirect()->route('processos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) 
    {
        if (Gate::denies('processo-view')) {
            abort(403, "Não autorizado!");
        }

        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>route('processos.index'),'titulo'=>'Processos'],
            ['url'=>'', 'titulo'=>'Visualizar'], 
        ];

        $processo = Processo::find($id);

        return view('admin.processos.visualizar', compact('processo','caminhos'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::denies('processo-edit')) {
            abort(403, "Não autorizado!");
        }

        $processos = Processo::find($id);

        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>route('processos.index'),'titulo'=>'Processos'],
            ['url'=>'', 'titulo'=>'Editar'], 
        ];

        return view('admin.processos.editar',compact('processos','caminhos'));
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
        if (Gate::denies('processo-edit')) {
            abort(403, "Não autorizado!");
        }

        $this->validate($request,[
            'dataDoResult' => 'required|date',
            'resultDoProc' => 'required|alpha',
        ]);

        Processo::find($id)->update([
            'dataDoResult' => $request['dataDoResult'],
            'resultDoProc' => $request['resultDoProc'],
            'obsResultProc' => $request['obsResultProc'],
        ]);
        

        return redirect()->route('processos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Gate::denies('processo-delete')) {
            abort(403, "Não autorizado!");
        }

        Processo::find($id)->delete();
        return redirect()->route('processos.index');
    }

    public function busca(Request $request)
    {   
        $buscaInput = $request->input('busca'); 

        if (empty($buscaInput)) {
            return redirect()->route('processos.index');
        }

        $processos = Processo::where('numeroDoProcesso','LIKE','%'.$buscaInput.'%')
                                ->orwhere('nomeDoInfrator','LIKE','%'.$buscaInput.'%')
                                ->paginate(2);
        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>route('processos.index'),'titulo'=>'Processos'],
            ['url'=>'', 'titulo'=>'Busca'], 
        ];

        return view('admin.processos.index', array('processos' => $processos,'caminhos' => $caminhos, 'buscar' => $buscaInput)); 
    }

}
