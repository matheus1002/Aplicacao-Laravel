 <div class="panel panel-primary">
	<div class="panel-heading">Editar Infrator</div>
	<div class="panel-body">
	
		<div class="form-group col-md-6">
			<label>Nome</label>
			<input type="text" name="nome" class="form-control" value="{{ isset($infratores->infpessoal()->nome) ? $infratores->infpessoal()->nome : '' }}">
		</div>

	</div>
</div>