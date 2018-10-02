<div class="panel panel-primary">
	<div class="panel-heading">Informações do Processo</div>
	<div class="panel-body">

		<div class="form-group col-md-3">
			<label>Número do Processo</label>
			<p>{{ ($processo->numeroDoProcesso) }}</p>
		</div>

		<div class="form-group col-md-3">
			<label>Nome do Infrator</label>
			<p>{{ ($processo->nomeDoInfrator) }}</p>
		</div>

		<div class="form-group col-md-3">
			<label>Artigo</label>
			<p>{{ ($processo->artigo) }}</p>
		</div>

		<div class="form-group col-md-3">
			<label>Delegacia</label>
			<p>{{ ($processo->delegacia) }}</p>
		</div>

		<div class="form-group col-md-3">
			<label>Vítima</label>
			<p>{{ ($processo->vitima) }}</p>
		</div>

		<div class="form-group col-md-3">
			<label>Data de Início do Processo</label>
			<p>{{ ($processo->dataDeIniProc) }}</p>
		</div>

		<div class="form-group col-md-3">
			<label>Data do Resultado do Processo</label>
			<p>{{ ($processo->dataDoResult) }}</p>
		</div>

		<div class="form-group col-md-3">
			<label>Resultado do Processo</label>
			<p>{{ ($processo->resultDoProc) }}</p>
		</div>

		<div class="form-group col-md-3">
			<label>Adicionado em:</label>
			<p align="justify">{{ ($processo->created_at) }}</p>
		</div>

		<div class="form-group col-md-3">
			<label>Atualizado em:</label>
			<p align="justify">{{ ($processo->updated_at) }}</p>
		</div>

		<div class="form-group col-md-12">
			<label>Observações do Resultado do Processo</label>
			<p align="justify">{{ ($processo->obsResultProc) }}</p>
		</div>

		

	</div>
</div>
