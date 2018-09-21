<div class="panel panel-primary">
	<div class="panel-heading">Novo Papel</div>
	<div class="panel-body">

		<div class="form-group col-md-3"> 
			<label>Nome do papel</label>
			<input type="text" name="nome" class="form-control" value="{{ isset($registro->nome) ? $registro->nome : '' }}">
		</div>

		<div class="form-group col-md-9">
			<label>Descrição</label>
			<input type="text" name="descricao" class="form-control" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}">
		</div>

	</div>
</div>