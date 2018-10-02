 <div class="panel panel-primary">
	<div class="panel-heading">Informações do Infrator</div>
	<div class="panel-body">

		<div class="row">
			
				<!-- Coluna da esquerda-->
			<div class="form-group col-md-5">
				
				<!-- Imagem de perfil aqui -->
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<a href="#" class="thumbnail">
							<img src="" alt="">
						</a>
					</div>
				</div>

				<div class="form-group">
					<ul>
						<li><strong>Adicionado em:</strong>{{ $infrator->created_at }}</li>
						<li><strong>Atualizado em:</strong>{{ $infrator->updated_at }}</li>
					</ul>
				</div>

			</div>

			<!-- Coluna da direita-->
			<div class="form-group col-md-7">

				<div class="form-group col-md-12">
					<label>Informações Pessoais</label>
				</div>

				<ul>
					<li><strong>Nome do Infrator:</strong> {{ $infrator->infpessoal->nome }}</li>
					<li><strong>Vulgo do Infrator:</strong> {{ $infrator->infpessoal->vulgo }}</li>
					<li><strong>Data de Nascimento:</strong> {{ $infrator->infpessoal->dataDeNascimento }}</li>
					<li><strong>Nome da Mãe:</strong> {{ $infrator->infpessoal->nomeDaMae }}</li>
					<li><strong>Nome do Pai:</strong> {{ $infrator->infpessoal->nomeDoPai }}</li>
					<li><strong>Sexo:</strong> {{ $infrator->infpessoal->sexo }}</li>
					<li><strong>Nacionalidade:</strong> {{ $infrator->infpessoal->nacionalidade }}</li>
					<li><strong>Naturalidade:</strong> {{ $infrator->infpessoal->naturalidade }}</li>
					<li><strong>Estado Civil:</strong> {{ $infrator->infpessoal->estadoCivil }}</li>
					<li><strong>Profissão:</strong> {{ $infrator->infpessoal->profissao }}</li>
					<li><strong>Estado Econômico:</strong> {{ $infrator->infpessoal->estadoEconomico }}</li>
					<li><strong>Instrução:</strong> {{ $infrator->infpessoal->instrucao }}</li>
					<li><strong>CPF:</strong> {{ $infrator->infpessoal->cpf }}</li>
					<li><strong>RG:</strong> {{ $infrator->infpessoal->rg }}</li>
					<li><strong>CNH:</strong> {{ $infrator->infpessoal->cnh }}</li>
				</ul>

			</div>

		</div>

		<div class="row">

			<div class="form-group col-md-12">
				<label>Informações Processuais</label>
			</div>

			<div class="form-group col-md-3">
				<label>Situação</label>
				<p>{{ ($infrator->infprocessual->situacao) }}</p>
			</div>

			<div class="form-group col-md-3">
				<label>Classe Deliquente</label>
				<p>{{ ($infrator->infprocessual->classeDeliquente) }}</p>
			</div>

			<div class="form-group col-md-3">
				<label>Unidade de Origem</label>
				<p>{{ ($infrator->infprocessual->unidadeDeOrigem) }}</p>
			</div>

			<div class="form-group col-md-3">
				<label>Data de Recolhimento</label>
				<p>{{ ($infrator->infprocessual->dataDeRecolhimento) }}</p>
			</div>

			<div class="form-group col-md-12">
				<label>Observação</label>
				<p align="justify">{{ ($infrator->infprocessual->observacao) }}</p>
			</div>

			<div class="form-group col-md-12">
				<label>Histórico</label>
				<p align="justify">{{ ($infrator->infprocessual->historico) }}</p>
			</div>

		</div>

		<div class="row">

			<!-- Coluna da esquerda-->
			<div class="form-group col-md-6">

				<div class="form-group col-md-12">
					<label>Endereço</label>
				</div>
				
				<ul>
					<li><strong>CEP:</strong> {{ $infrator->endereco->cep }}</li>
					<li><strong>Rua:</strong> {{ $infrator->endereco->rua }}</li>
					<li><strong>Número:</strong> {{ $infrator->endereco->numero }}</li>
					<li><strong>Complemento:</strong> {{ $infrator->endereco->ccomplemento }}</li>
					<li><strong>Bairro:</strong> {{ $infrator->endereco->bairro }}</li>
					<li><strong>Cidade:</strong> {{ $infrator->endereco->cidade }}</li>
					<li><strong>Estado:</strong> {{ $infrator->endereco->estado }}</li>
				</ul>

			</div>

			<!-- Coluna da direita-->
			<div class="form-group col-md-6">

				<div class="form-group col-md-12">
					<label>Características Físicas</label>
				</div>
				
				<ul>
					<li><strong>Étnia:</strong> {{ $infrator->caracfisica->etnia }}</li>
					<li><strong>Olho:</strong> {{ $infrator->caracfisica->olho }}</li>
					<li><strong>Barba:</strong> {{ $infrator->caracfisica->barba }}</li>
					<li><strong>Dente:</strong> {{ $infrator->caracfisica->dente }}</li>
					<li><strong>Orelha:</strong> {{ $infrator->caracfisica->orelha }}</li>
					<li><strong>Boca:</strong> {{ $infrator->caracfisica->boca }}</li>
					<li><strong>Nariz:</strong> {{ $infrator->caracfisica->nariz }}</li>
					<li><strong>Sobrancelha:</strong> {{ $infrator->caracfisica->sobrancelha }}</li>
					<li><strong>Altura:</strong> {{ $infrator->caracfisica->altura }}</li>
					<li><strong>Cor do Cabelo:</strong> {{ $infrator->caracfisica->corDoCabelo }}</li>
					<li><strong>Tipo de Cabelo:</strong> {{ $infrator->caracfisica->TipoDeCabelo }}</li>
					<li><strong>Cicatriz/Marcas/Tatuagens:</strong> {{ $infrator->caracfisica->cicMarcTatu }}</li>
				</ul>

			</div>
			
		</div>

		<div class="row">

			<div class="form-group col-md-12">
				<label>Fotos das Características Físicas</label>
			</div>
			
			<!-- Imagens de características físicas aqui -->
			<div class="col-sm-6 col-md-4">
				<a href="#" class="thumbnail">
					<img src="" alt="">
				</a>
			</div>

		</div>
		

	</div>
</div>