@extends('layouts.app') 

@section('content')
	<div class="container">
		<h2 align="center">Lista de Usuários</h2>

		@include('admin._caminho') 

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
									<a title="Editar" class="btn btn-warning" href="{{ route('usuarios.edit', $usuario->id) }}"><i class="">edit</i></a>
									<a title="Usuários" class="btn btn-primary" href="{{route('usuarios.papel', $usuario->id)}}"><i class="">lock_outline</i></a>
								@endcan
								@can('usuario-delete')
									{{ method_field('DELETE') }}
									{{ csrf_field() }}
									<button title="Deletar" class="btn btn-danger"><i class=""></i>delete</button>
								@endcan
							</form>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
		<div class="row">
			@can('usuario-create')
				<a class="btn btn-primary" href="{{route('usuarios.create')}}">Adicionar</a>
			@endcan
		</div>
	</div>
@endsection