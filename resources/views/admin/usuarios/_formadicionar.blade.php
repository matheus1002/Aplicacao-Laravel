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
	<div class="panel-heading">Novo Usuário</div>
	<div class="panel-body">

		<div class="form-group col-md-6">
			<label>Nome</label>
			<input type="text" name="name" class="form-control" value="{{ isset($usuarios->name) ? $usuarios->name : '' }}" placeholder="Digite o nome do usuário..." required>
		</div>

		<div class="form-group col-md-6">
			<label>E-mail</label>
			<input type="text" name="email" class="form-control" value="{{ isset($usuarios->email) ? $usuarios->email : '' }}" placeholder="Digite o e-mail do usuário..." required>
		</div>

		<div class="form-group col-md-12">
			<label>Senha</label>
			<input type="password" name="password" class="form-control" value="{{ isset($usuarios->password) ? $usuarios->password : '' }}" placeholder="Digite a senha do usuário..." required>
		</div>

	</div>
</div>

