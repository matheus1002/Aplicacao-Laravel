@extends('adminlte::page')

@section('title', 'AdminLTE - Início')

@section('content_header')
    <h1>Painel Administrativo</h1>
@stop

@section('content')
    
    <div class="row">
    @can('usuario-view')
        <div class="col-lg-3 col-xs-12">
            <div class="small-box bg-green">   
                <div class="inner">
                    <h3>{{$usuarios}}</h3>
                    <h4>Usuários do sistema</h4>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{route('usuarios.index')}}" class="small-box-footer">
                    Visualizar
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    @endcan
    @can('papel-view')
        <div class="col-lg-3 col-xs-12">
            <div class="small-box bg-red">   
                <div class="inner">
                    <h3>{{$papeis}}</h3>
                    <h4>Papéis do sistema</h4>
                </div>
                <div class="icon">
                    <i class="fa fa-lock"></i>
                </div>
                <a href="{{route('papeis.index')}}" class="small-box-footer">
                    Visualizar
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    @endcan
    </div>

@stop

