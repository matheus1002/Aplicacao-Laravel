@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row" align="center">
       <h2>Admin</h2>
    </div>

       @include('admin._caminho')

    <div class="row" >
    @can('usuario-view')
      <div class="col-sm-12 col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">Usuários</div>
          <div class="panel-body">
            <p>Usuários do sistema</p>
          </div>
          <div class="panel-footer">
            <a href="{{route('usuarios.index')}}">Visualizar</a>
          </div>
        </div>
       </div>
    @endcan
    @can('infrator-view')
        <div class="col-sm-12 col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">Infratores</div>
          <div class="panel-body">
            <p>Lista de infratores</p>
          </div>
          <div class="panel-footer">
            <a href="{{route('infratores.index')}}">Visualizar</a>
          </div>
        </div>
        </div>
    @endcan
    @can('processo-view')
        <div class="col-sm-12 col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">Processos</div>
          <div class="panel-body">
            <p>Lista de processos</p>
          </div>
          <div class="panel-footer">
            <a href="{{route('processos.index')}}">Visualizar</a>
          </div>
        </div>
       </div>
    @endcan
    @can('papel-view')
        <div class="col-sm-12 col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">Papéis</div>
          <div class="panel-body">
            <p>Listar papéis do sistema</p>
          </div>
           <div class="panel-footer">
              <a href="{{route('papeis.index')}}">Visualizar</a>
           </div>
        </div>
       </div>
    @endcan
     </div>
</div>
@endsection
