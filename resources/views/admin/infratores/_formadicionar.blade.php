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
		
		<div class="form-group col-md-6">
			<label>Nome</label>
			<input type="text" name="nome" class="form-control" placeholder="Digite o nome do infrator..." required>
		</div>

		<div class="form-group col-md-3">
			<label>Vulgo</label>
			<input type="text" name="vulgo" class="form-control" placeholder="Digite o vulgo do infrator...">
		</div>

		<div class="form-group col-md-3">
			<label>Data de Nascimento</label>
			<input type="date" name="dataDeNascimento" class="form-control" placeholder="Data de Nascimento..." required>
		</div> 

		<div class="form-group col-md-6">
			<label>Nome da Mãe</label>
			<input type="text" name="nomeDaMae" class="form-control" placeholder="Digite o nome da Mãe..." required>
		</div>

		<div class="form-group col-md-6">
			<label>Nome do Pai</label>
			<input type="text" name="nomeDoPai" class="form-control" placeholder="Digite o nome do Pai...">
		</div>

		<div class="form-group col-md-4">
			<label>Sexo</label>
			<select name="sexo" class="form-control" required>
				<option value="masculino">Masculino</option>
				<option value="feminino">Feminino</option>
			</select>
		</div>

		<div class="form-group col-md-4">
			<label>Nacionalidade</label>
			<input type="text" name="nacionalidade" class="form-control" placeholder="Digite a nacionalidade do infrator...">
		</div>

		<div class="form-group col-md-4">
			<label>Naturalidade</label>
			<input type="text" name="naturalidade" class="form-control" placeholder="Digite a naturalidade do infrator..." required>
		</div>

		<div class="form-group col-md-4">
			<label>Estado Civil</label>
			<select name="estadoCivil" class="form-control" required>
				<option value="solteiro(a)">Solteiro(a)</option>
				<option value="casado(a)">Casado(a)</option>
				<option value="divorciado(a)">Divorciado(a)</option>
				<option value="viuvo(a)">Viúvo(a)</option>
				<option value="separado(a)">Separado(a)</option>
			</select>
		</div>

		<div class="form-group col-md-4">
			<label>Profissão</label>
			<input type="text" name="profissao" class="form-control" placeholder="Digite a profissão do infrator...">
		</div>

		<div class="form-group col-md-4">
			<label>Estado Econômico</label>
			<div class="input-group">
				<div class="input-group-addon">R$</div>
				<input type="text" name="estadoEconomico" id="txtEstEcon" class="form-control" required>
			</div>
		</div>

		<div class="form-group col-md-4">
			<label>Instrução</label>
			<select name="instrucao" class="form-control" required>
				<option value="ensinoFundamentalIncompleto">Ensino Fundamental Incompleto</option>
				<option value="ensinoFundamentalCompleto">Ensino Fundamental Completo</option>
				<option value="ensinoMedioIncompleto">Ensino Médio Incompleto</option>
				<option value="ensinoMedioCompleto">Ensino Médio Completo</option>
				<option value="ensinoSuperiorIncompleto">Ensino Superior Incompleto</option>
				<option value="ensinoSuperiorCompleto">Ensino Superior Completo</option>
				<option value="posGraduacao">Pós Graduação</option>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label>CPF</label>
			<input type="text" name="cpf" id="txtCpf" class="form-control" placeholder="000.000.000-00" required>
		</div>

		<div class="form-group col-md-3">
			<label>RG</label>
			<input type="text" name="rg" class="form-control" required>
		</div>

		<div class="form-group col-md-2">
			<label>CNH</label>
			<input type="text" name="cnh" id="txtCnh" class="form-control">
		</div>

		<div class="form-group col-md-12">
			<label>Foto de Perfil</label>
			<input type="file" name="fotoDePerfil" required>
		</div>
	</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">Informações Processuais</div>
	<div class="panel-body">
		<div class="form-group col-md-3">
			<label>Situação</label>
			<select name="situacao" class="form-control" >
				<option value="preso">Preso</option>
				<option value="foragido">Foragido</option>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label>Classe Deliquente</label>
			<select name="classeDeliquente" class="form-control" >
				<option value="primario">Primário</option>
				<option value="reincidente">Reincidente</option>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label>Unidade de Origem</label>
			<input type="text" name="unidadeDeOrigem" class="form-control" >
		</div>

		<div class="form-group col-md-3">
			<label>Data de Recolhimento</label>
			<input type="date" name="dataDeRecolhimento" class="form-control" >
		</div>

		<div class="form-group col-md-12">
			<label>Observação</label>
			<textarea name="observacao" class="form-control" style="padding-bottom: 70px;"></textarea>
		</div>

		<div class="form-group col-md-12">
			<label>Histórico</label>
			<textarea name="historico" class="form-control" style="padding-bottom: 100px;"></textarea>
		</div>
	</div>
	</div>

<div class="panel panel-primary">
	<div class="panel-heading">Endereço</div>
	<div class="panel-body">
		<div class="form-group col-md-3">
			<label>CEP</label>
			<input type="text" name="cep" id="txtCep" class="form-control" placeholder="00000-000">
		</div>

		<div class="form-group col-md-7">
			<label>Rua</label>
			<input type="text" name="endereco" id="txtRua" class="form-control" required>
		</div>

		<div class="form-group col-md-2">
			<label>Número</label>
			<input type="number" name="numero" id="" class="form-control" required>
		</div>
		
		<div class="form-group col-md-5">
			<label>Complemento</label>
			<input type="text" name="complemento" id="txtComplemento" class="form-control">
		</div>

		<div class="form-group col-md-3">
			<label>Bairro</label>
			<input type="text" name="bairro" id="txtBairro" class="form-control" required>
		</div>

		<div class="form-group col-md-3">
			<label>Cidade</label>
			<input type="text" name="municipio" id="txtCidade" class="form-control" required>
		</div>

		<div class="form-group col-md-1">
			<label>Estado</label>
			<input type="text" name="uf" id="txtEstado" class="form-control" required>
		</div>
	</div>
	</div>

<div class="panel panel-primary">
	<div class="panel-heading">Características Físicas</div>
	<div class="panel-body">			
		<div class="form-group col-md-3">
			<label>Étnia</label>
			<input type="text" name="etnia" class="form-control" >
		</div>

		<div class="form-group col-md-3">
			<label>Olho</label>
			<input type="text" name="olho" class="form-control" >
		</div>

		<div class="form-group col-md-3">
			<label>Barba</label>
			<input type="text" name="barba" class="form-control" >
		</div>

		<div class="form-group col-md-3">
			<label>Dente</label>
			<input type="text" name="dente" class="form-control" >
		</div>

		<div class="form-group col-md-3">
			<label>Orelha</label>
			<input type="text" name="orelha" class="form-control" >
		</div>

		<div class="form-group col-md-3">
			<label>Boca</label>
			<input type="text" name="boca" class="form-control" >
		</div>

		<div class="form-group col-md-3">
			<label>Nariz</label>
			<input type="text" name="nariz" class="form-control" >
		</div>

		<div class="form-group col-md-3">
			<label>Sobrancelha</label>
			<input type="text" name="sobrancelha" class="form-control" >
		</div>

		<div class="form-group col-md-2">
			<label>Altura</label>
			<input type="text" name="altura" id="txtAltura" class="form-control" >
		</div>

		<div class="form-group col-md-5">
			<label>Cor do Cabelo</label>
			<input type="text" name="corDoCabelo" class="form-control" >
		</div>

		<div class="form-group col-md-5">
			<label>Tipo de Cabelo</label>
			<input type="text" name="tipoDeCabelo" class="form-control" >
		</div>

		<div class="form-group col-md-7">
			<label>Cicatriz/Marcas/Tatuagens</label>
			<input type="text" name="cicMarcTatu" class="form-control" >
		</div>

		<div class="form-group col-md-5">
			<label>Fotos de características físicas</label>
			<input type="file" name="fotoCaracFisica">
		</div>
	</div>
	</div>
