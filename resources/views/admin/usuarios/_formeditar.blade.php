@if(count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif
<div class="panel panel-primary">
	<div class="panel-heading">Editar Usuário</div>
	<div class="panel-body">

		<div class="form-group col-md-6">
			<label>Nome</label>
			<input type="text" name="name" class="form-control" readonly="true" value="{{ isset($usuarios->name) ? $usuarios->name : '' }}" required>
		</div>

		<div class="form-group col-md-6">
			<label>E-mail</label>
			<input type="text" name="email" class="form-control" readonly="true" value="{{ isset($usuarios->email) ? $usuarios->email : '' }}" required>
		</div>

		<div class="form-group col-md-12">
			<label>Senha</label>
			<input type="password" name="password" class="form-control" value="{{ isset($usuarios->password) ? $usuarios->password : '' }}" required>
		</div>

	</div>
</div>

