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
	<div class="panel-heading">Informações Pessoais</div>
	<div class="panel-body">

	
			<input type="hidden" name="infrator_id" value="{{ isset($infrator->infpessoal->infrator_id) ? $infrator->infpessoal->infrator_id : '' }}">
	
		
		<div class="form-group col-md-6">
			<label>Nome</label>
			<input type="text" name="nome" class="form-control" value="{{ isset($infrator->infpessoal->nome) ? $infrator->infpessoal->nome : '' }}" readonly="" required>
		</div>

		<div class="form-group col-md-3">
			<label>Vulgo</label>
			<input type="text" name="vulgo" class="form-control" value="{{ isset($infrator->infpessoal->vulgo) ? $infrator->infpessoal->vulgo : '' }}">
		</div>

		<div class="form-group col-md-3">
			<label>Data de Nascimento</label>
			<input type="date" name="dataDeNascimento" class="form-control" value="{{ isset($infrator->infpessoal->dataDeNascimento) ? $infrator->infpessoal->dataDeNascimento : '' }}" readonly="" required>
		</div> 

		<div class="form-group col-md-6">
			<label>Nome da Mãe</label>
			<input type="text" name="nomeDaMae" class="form-control" value="{{ isset($infrator->infpessoal->nomeDaMae) ? $infrator->infpessoal->nomeDaMae : '' }}" readonly="" required>
		</div>

		<div class="form-group col-md-6">
			<label>Nome do Pai</label>
			<input type="text" name="nomeDoPai" class="form-control" value="{{ isset($infrator->infpessoal->nomeDoPai) ? $infrator->infpessoal->nomeDoPai : '' }}" readonly="">
		</div>

		<div class="form-group col-md-4">
			<label>Sexo</label>
			<select name="sexo" class="form-control" readonly="" required>
				<option value="{{ isset($infrator->infpessoal->sexo) ? $infrator->infpessoal->sexo : '' }}">{{ $infrator->infpessoal->sexo }}</option>
			</select>
		</div>

		<div class="form-group col-md-4">
			<label>Nacionalidade</label>
			<input type="text" name="nacionalidade" class="form-control" value="{{ isset($infrator->infpessoal->nacionalidade) ? $infrator->infpessoal->nacionalidade : '' }}">
		</div>

		<div class="form-group col-md-4">
			<label>Naturalidade</label>
			<input type="text" name="naturalidade" class="form-control" value="{{ isset($infrator->infpessoal->naturalidade) ? $infrator->infpessoal->naturalidade : '' }}" readonly="" required>
		</div>

		<div class="form-group col-md-4">
			<label>Estado Civil</label>
			<select name="estadoCivil" class="form-control" readonly="" required>
				<option value="{{ isset($infrator->infpessoal->estadoCivil) ? $infrator->infpessoal->estadoCivil : '' }}">{{ $infrator->infpessoal->estadoCivil }}</option>
			</select>
		</div>

		<div class="form-group col-md-4">
			<label>Profissão</label>
			<input type="text" name="profissao" class="form-control" value="{{ isset($infrator->infpessoal->profissao) ? $infrator->infpessoal->profissao : '' }}">
		</div>

		<div class="form-group col-md-4">
			<label>Estado Econômico</label>
			<div class="input-group">
				<div class="input-group-addon">R$</div>
				<input type="text" name="estadoEconomico" id="txtEstEcon" class="form-control" value="{{ isset($infrator->infpessoal->estadoEconomico) ? $infrator->infpessoal->estadoEconomico : '' }}" required>
			</div>
		</div>

		<div class="form-group col-md-4">
			<label>Instrução</label>
			<select name="instrucao" class="form-control" readonly="" required>
				<option value="{{ isset($infrator->infpessoal->instrucao) ? $infrator->infpessoal->instrucao : '' }}" >{{ $infrator->infpessoal->instrucao }}</option>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label>CPF</label>
			<input type="text" name="cpf" id="txtCpf" class="form-control" value="{{ isset($infrator->infpessoal->cpf) ? $infrator->infpessoal->cpf : '' }}" readonly="" required>
		</div>

		<div class="form-group col-md-3">
			<label>RG</label>
			<input type="text" name="rg" class="form-control" value="{{ isset($infrator->infpessoal->rg) ? $infrator->infpessoal->rg : '' }}" readonly="" required>
		</div>

		<div class="form-group col-md-2">
			<label>CNH</label>
			<input type="text" name="cnh" id="txtCnh" class="form-control" value="{{ isset($infrator->infpessoal->cnh) ? $infrator->infpessoal->cnh : '' }}" readonly="">
		</div>

		<div class="form-group col-md-4">
			<label>Foto de Perfil</label>
			<input type="text" name="fotoDePerfil" class="form-control" value="{{ isset($infrator->infpessoal->fotoDePerfil) ? $infrator->infpessoal->fotoDePerfil : '' }}" readonly="">
		</div>
	</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">Informações Processuais</div>
	<div class="panel-body">
		<div class="form-group col-md-3">
			<label>Situação</label>
			<select name="situacao" class="form-control" >
				<option value="Preso">Preso</option>
				<option value="Foragido">Foragido</option>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label>Classe Deliquente</label>
			<select name="classeDeliquente" class="form-control" >
				<option value="Primário">Primário</option>
				<option value="Reincidente">Reincidente</option>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label>Unidade de Origem</label>
			<input type="text" name="unidadeDeOrigem" class="form-control" value="{{ isset($infrator->infprocessual->unidadeDeOrigem) ? $infrator->infprocessual->unidadeDeOrigem : '' }}">
		</div>

		<div class="form-group col-md-3">
			<label>Data de Recolhimento</label>
			<input type="date" name="dataDeRecolhimento" class="form-control" value="{{ isset($infrator->infprocessual->dataDeRecolhimento) ? $infrator->infprocessual->dataDeRecolhimento : '' }}">
		</div>

		<div class="form-group col-md-12">
			<label>Observação</label>
			<textarea name="observacao" class="form-control" rows="6">{{ $infrator->infprocessual->observacao }}</textarea>
		</div>

		<div class="form-group col-md-12">
			<label>Histórico</label>
			<textarea name="historico" class="form-control" rows="6">{{ $infrator->infprocessual->historico }}</textarea>
		</div>
	</div>
	</div>

<div class="panel panel-primary">
	<div class="panel-heading">Endereço</div>
	<div class="panel-body">
		<div class="form-group col-md-3">
			<label>CEP</label>
			<input type="text" name="cep" id="txtCep" class="form-control" value="{{ isset($infrator->endereco->cep) ? $infrator->endereco->cep : '' }}">
		</div>

		<div class="form-group col-md-7">
			<label>Rua</label>
			<input type="text" name="rua" id="txtRua" class="form-control" value="{{ isset($infrator->endereco->rua) ? $infrator->endereco->rua : '' }}"  required>
		</div>

		<div class="form-group col-md-2">
			<label>Número</label>
			<input type="number" name="numero" id="" class="form-control" value="{{ isset($infrator->endereco->numero) ? $infrator->endereco->numero : '' }}" required>
		</div>
		
		<div class="form-group col-md-5">
			<label>Complemento</label>
			<input type="text" name="complemento" id="txtComplemento" class="form-control" value="{{ isset($infrator->endereco->complemento) ? $infrator->endereco->complemento : '' }}">
		</div>

		<div class="form-group col-md-3">
			<label>Bairro</label>
			<input type="text" name="bairro" id="txtBairro" class="form-control" value="{{ isset($infrator->endereco->bairro) ? $infrator->endereco->bairro : '' }}" required>
		</div>

		<div class="form-group col-md-3">
			<label>Cidade</label>
			<input type="text" name="cidade" id="txtCidade" class="form-control" value="{{ isset($infrator->endereco->cidade) ? $infrator->endereco->cidade : '' }}" required>
		</div>

		<div class="form-group col-md-1">
			<label>Estado</label>
			<input type="text" name="estado" id="txtEstado" class="form-control" value="{{ isset($infrator->endereco->estado) ? $infrator->endereco->estado : '' }}" required>
		</div>
	</div>
	</div>

<div class="panel panel-primary">
	<div class="panel-heading">Características Físicas</div>
	<div class="panel-body">			
		<div class="form-group col-md-3">
			<label>Étnia</label>
			<input type="text" name="etnia" class="form-control" value="{{ isset($infrator->caracfisica->etnia) ? $infrator->caracfisica->etnia : '' }}">
		</div>

		<div class="form-group col-md-3">
			<label>Olho</label>
			<input type="text" name="olho" class="form-control" value="{{ isset($infrator->caracfisica->olho) ? $infrator->caracfisica->olho : '' }}">
		</div>

		<div class="form-group col-md-3">
			<label>Barba</label>
			<input type="text" name="barba" class="form-control" value="{{ isset($infrator->caracfisica->barba) ? $infrator->caracfisica->barba : '' }}">
		</div>

		<div class="form-group col-md-3">
			<label>Dente</label>
			<input type="text" name="dente" class="form-control" value="{{ isset($infrator->caracfisica->dente) ? $infrator->caracfisica->dente : '' }}">
		</div>

		<div class="form-group col-md-3">
			<label>Orelha</label>
			<input type="text" name="orelha" class="form-control" value="{{ isset($infrator->caracfisica->orelha) ? $infrator->caracfisica->orelha : '' }}">
		</div>

		<div class="form-group col-md-3">
			<label>Boca</label>
			<input type="text" name="boca" class="form-control" value="{{ isset($infrator->caracfisica->boca) ? $infrator->caracfisica->boca : '' }}">
		</div>

		<div class="form-group col-md-3">
			<label>Nariz</label>
			<input type="text" name="nariz" class="form-control" value="{{ isset($infrator->caracfisica->nariz) ? $infrator->caracfisica->nariz : '' }}">
		</div>

		<div class="form-group col-md-3">
			<label>Sobrancelha</label>
			<input type="text" name="sobrancelha" class="form-control" value="{{ isset($infrator->caracfisica->sobrancelha) ? $infrator->caracfisica->sobrancelha : '' }}">
		</div>

		<div class="form-group col-md-2">
			<label>Altura</label>
			<input type="text" name="altura" id="txtAltura" class="form-control" value="{{ isset($infrator->caracfisica->altura) ? $infrator->caracfisica->altura : '' }}" readonly="">
		</div>

		<div class="form-group col-md-5">
			<label>Cor do Cabelo</label>
			<input type="text" name="corDoCabelo" class="form-control" value="{{ isset($infrator->caracfisica->corDoCabelo) ? $infrator->caracfisica->corDoCabelo : '' }}">
		</div>

		<div class="form-group col-md-5">
			<label>Tipo de Cabelo</label>
			<input type="text" name="tipoDeCabelo" class="form-control" value="{{ isset($infrator->caracfisica->tipoDeCabelo) ? $infrator->caracfisica->tipoDeCabelo : '' }}">
		</div>

		<div class="form-group col-md-7">
			<label>Cicatriz/Marcas/Tatuagens</label>
			<input type="text" name="cicMarcTatu" class="form-control" value="{{ isset($infrator->caracfisica->cicMarcTatu) ? $infrator->caracfisica->cicMarcTatu : '' }}">
		</div>

		<div class="form-group col-md-5">
			<label>Fotos de características físicas</label>
			<input type="text" name="fotoCaracFisica" class="form-control" value="{{ isset($infrator->caracfisica->fotoCaracFisica) ? $infrator->caracfisica->fotoCaracFisica : '' }}" readonly="">
		</div>
	</div>
	</div>