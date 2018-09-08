<div class="form-group">
	<label>Nome</label>
	<input type="text" name="name" class="form-control" value="{{ isset($usuarios->name) ? $usuarios->name : '' }}">
</div>

<div class="form-group">
	<label>E-mail</label>
	<input type="text" name="email" class="form-control" value="{{ isset($usuarios->email) ? $usuarios->email : '' }}">
</div>

<div class="form-group">
	<label>Senha</label>
	<input type="password" name="password" class="form-control" value="{{ isset($usuarios->password) ? $usuarios->password : '' }}">
</div>

