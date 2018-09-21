@extends('layouts.app')  

@section('content')
	<div class="container">
		<h2 align="center">Lista de Usuários</h2>

		@include('admin._caminho') 

		<div class="row" style="padding-bottom: 25px;">
			<form action="{{ url('admin/usuarios/busca') }}" method="post">
				{{ csrf_field() }}		
				<div class="input-group">			
					<input type="text" class="form-control" id="busca" name="busca" placeholder="Digite o nome do usuário..." value="{{$buscar}}">
					<div class="input-group-btn">
						<button class="btn btn-success">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						</button>
					</div>
				</div>
			</form>
		</div>

		<div class="row">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Ação</th>
					</tr>
				</thead> 
				<tbody>
				@foreach($usuarios as $usuario)
					<tr>
						<td>{{ $usuario->id }}</td>
						<td>{{ $usuario->name }}</td>
						<td>{{ $usuario->email }}</td>
						<td>
							<form action="{{route('usuarios.destroy', $usuario->id)}}" method="post"> 
								@can('usuario-edit')
									<a title="Editar" class="btn btn-warning" href="{{ route('usuarios.edit', $usuario->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
									<a title="Usuários" class="btn btn-primary" href="{{route('usuarios.papel', $usuario->id)}}"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></a>
								@endcan
								@can('usuario-delete')
									{{ method_field('DELETE') }}
									{{ csrf_field() }}
									<button title="Deletar" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
								@endcan
							</form>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>

			<div class="row" align="center">
				{!! $usuarios !!}
			</div>

		</div>
		<div class="row">
			@can('usuario-create')
				<a class="btn btn-primary" href="{{route('usuarios.create')}}">Adicionar</a>
			@endcan
		</div>
	</div>
@endsection