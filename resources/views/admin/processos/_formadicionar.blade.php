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
	<div class="panel-heading">Novo Processo</div>
	<div class="panel-body">

		<div class="form-group col-md-3">
			<label>Número do Processo</label>
			<input type="text" name="numeroDoProcesso" class="form-control" required>
		</div>

		<div class="form-group col-md-6">
			<label>Nome do Infrator</label>
			<input type="text" class="typeahead form-control">
		</div>

		<div class="form-group col-md-3">
			<label>Artigo</label>
			<input type="text" name="artigo" class="form-control" required>
		</div>

		<div class="form-group col-md-4">
			<label>Delegacia</label>
			<input type="text" name="delegacia" class="form-control" required>
		</div>

		<div class="form-group col-md-5">
			<label>Vítima</label>
			<input type="text" name="vitima" class="form-control" required>
		</div>

		<div class="form-group col-md-3">
			<label>Data de Início do Processo</label>
			<input type="date" name="dataDeIniProc" class="form-control" required>
		</div>

		<div class="form-group col-md-3">
			<label>Data do Resultado do Processo</label>
			<input type="date" name="dataDoResult" class="form-control" required>
		</div>

		<div class="form-group col-md-9">
			<label>Resultado do Processo</label>
			<input type="text" name="resultDoProc" class="form-control" required>
		</div>

		<div class="form-group col-md-12">
			<label>Observações do Resultado do Processo</label>
			<textarea name="obsResultProc" class="form-control" style="padding-bottom: 100px"; required></textarea>
		</div>

	</div>
</div>
