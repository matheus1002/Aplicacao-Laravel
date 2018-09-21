<div class="panel panel-primary">
	<div class="panel-heading">Informações Pessoais</div>
	<div class="panel-body">
		<div class="form-group col-md-6">
			<label>Nome</label>
			<input type="text" name="nome" class="form-control" value="" placeholder="Digite o nome do infrator..." required>
		</div>

		<div class="form-group col-md-3">
			<label>Vulgo</label>
			<input type="text" name="vulgo" class="form-control" value="" placeholder="Digite o vulgo do infrator..." required>
		</div>

		<div class="form-group col-md-3">
			<label>Data de Nascimento</label>
			<input type="date" name="dataDeNascimento" class="form-control" value="" placeholder="Data de Nascimento..." required>
		</div> 

		<div class="form-group col-md-6">
			<label>Nome da Mãe</label>
			<input type="text" name="nomeDaMae" class="form-control" value="" placeholder="Digite o nome da Mãe..." required>
		</div>

		<div class="form-group col-md-6">
			<label>Nome do Pai</label>
			<input type="text" name="nomeDoPai" class="form-control" value="" placeholder="Digite o nome do Pai..." required>
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
			<input type="text" name="nacionalidade" class="form-control" value="" placeholder="Digite a nacionalidade do infrator...">
		</div>

		<div class="form-group col-md-4">
			<label>Naturalidade</label>
			<input type="text" name="naturalidade" class="form-control" value="" placeholder="Digite a naturalidade do infrator..." required>
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
			<input type="text" name="profissao" class="form-control" value="" placeholder="Digite a profissão do infrator..." required>
		</div>

		<div class="form-group col-md-4">
			<label>Estado Econômico</label>
			<div class="input-group">
				<div class="input-group-addon">R$</div>
				<input type="number" name="estadoEconomico" class="form-control" value="" placeholder="0,00" required>
			</div>
		</div>

		<div class="form-group col-md-3">
			<label>Instrução</label>
			<select name="instrucao" class="form-control" required>
				<option value="ensinoFundamentalIncompleto">Ensino Fundamental Incompleto</option>
				<option value="ensinoFundamentalCompleto">Ensino Fundamnetal Completo</option>
				<option value="ensinoMedioIncompleto">Ensino Médio Incompleto</option>
				<option value="ensinoMedioCompleto">Ensino Médio Completo</option>
				<option value="posGraduacao">Pós Graduação</option>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label>CPF</label>
			<input type="text" name="cpf" class="form-control" value="" placeholder="000.000.000-00" required>
		</div>

		<div class="form-group col-md-3">
			<label>RG</label>
			<input type="text" name="rg" class="form-control" value="" placeholder="0000000000000" required>
		</div>

		<div class="form-group col-md-3">
			<label>CNH</label>
			<input type="text" name="cnh" class="form-control" value="" placeholder="00000000000">
		</div>

		<div class="form-group col-md-12">
			<label>Foto de Perfil</label>
			<input type="file" name="fotoDePerfil" value="" required>
		</div>
	</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">Informações Processuais</div>
	<div class="panel-body">
		<div class="form-group col-md-3">
			<label>Situação</label>
			<select name="situacao" class="form-control" required>
				<option value="preso">Preso</option>
				<option value="foragido">Foragido</option>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label>Classe Deliquente</label>
			<select name="classeDeliquente" class="form-control" required>
				<option value="primario">Primário</option>
				<option value="reincidente">Reincidente</option>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label>Unidade de Origem</label>
			<input type="text" name="unidadeDeOrigem" class="form-control" required>
		</div>

		<div class="form-group col-md-3">
			<label>Data de Recolhimento</label>
			<input type="date" name="dataDeRecolhimento" class="form-control" required>
		</div>

		<div class="form-group col-md-12">
			<label>Observação</label>
			<textarea name="observacao" class="form-control" style="padding-bottom: 70px;" required></textarea>
		</div>

		<div class="form-group col-md-12">
			<label>Histórico</label>
			<textarea name="historico" class="form-control" style="padding-bottom: 100px;" required></textarea>
		</div>
	</div>
	</div>

<div class="panel panel-primary">
	<div class="panel-heading">Endereço</div>
	<div class="panel-body">
		<div class="form-group col-md-3">
			<label>CEP</label>
			<input type="text" name="cep" class="form-control" placeholder="00000-000" required>
		</div>

		<div class="form-group col-md-6">
			<label>Endereço</label>
			<input type="text" name="endereco" class="form-control" required>
		</div>

		<div class="form-group col-md-3">
			<label>Número</label>
			<input type="number" name="numero" class="form-control" required>
		</div>
		
		<div class="form-group col-md-5">
			<label>Complemento</label>
			<input type="text" name="complemento" class="form-control" required>
		</div>

		<div class="form-group col-md-3">
			<label>Bairro</label>
			<input type="text" name="bairro" class="form-control" required>
		</div>

		<div class="form-group col-md-2">
			<label>Município</label>
			<input type="text" name="municipio" class="form-control" required>
		</div>

		<div class="form-group col-md-2">
			<label>UF</label>
			<select name="uf" class="form-control" required>
				<option>AC</option>
				<option>AL</option>
				<option>AP</option>
				<option>AM</option>
				<option>BA</option>
				<option>CE</option>
				<option>DF</option>
				<option>ES</option>
				<option>GO</option>
				<option>MA</option>
				<option>MT</option>
				<option>MS</option>
				<option>MG</option>
				<option>MS</option>
				<option>PA</option>
				<option>PB</option>
				<option>PR</option>
				<option>PE</option>
				<option>PI</option>
				<option>RJ</option>
				<option>RN</option>
				<option>RS</option>
				<option>RO</option>
				<option>RR</option>
				<option>SC</option>
				<option>SP</option>
				<option>SE</option>
				<option>TO</option>
			</select>
		</div>
	</div>
	</div>

<div class="panel panel-primary">
	<div class="panel-heading">Características Físicas</div>
	<div class="panel-body">			
		<div class="form-group col-md-3">
			<label>Étnia</label>
			<input type="text" name="etnia" class="form-control" required>
		</div>

		<div class="form-group col-md-3">
			<label>Olho</label>
			<input type="text" name="olho" class="form-control" required>
		</div>

		<div class="form-group col-md-3">
			<label>Barba</label>
			<input type="text" name="barba" class="form-control" required>
		</div>

		<div class="form-group col-md-3">
			<label>Dente</label>
			<input type="text" name="dente" class="form-control" required>
		</div>

		<div class="form-group col-md-3">
			<label>Orelha</label>
			<input type="text" name="orelha" class="form-control" required>
		</div>

		<div class="form-group col-md-3">
			<label>Boca</label>
			<input type="text" name="boca" class="form-control" required>
		</div>

		<div class="form-group col-md-3">
			<label>Nariz</label>
			<input type="text" name="nariz" class="form-control" required>
		</div>

		<div class="form-group col-md-3">
			<label>Sobrancelha</label>
			<input type="text" name="sobrancelha" class="form-control" required>
		</div>

		<div class="form-group col-md-2">
			<label>Altura</label>
			<input type="number" name="altura" class="form-control" required>
		</div>

		<div class="form-group col-md-5">
			<label>Cor do Cabelo</label>
			<input type="text" name="corDoCabelo" class="form-control" required>
		</div>

		<div class="form-group col-md-5">
			<label>Tipo de Cabelo</label>
			<input type="text" name="tipoDeCabelo" class="form-control" required>
		</div>

		<div class="form-group col-md-7">
			<label>Cicatriz/Marcas/Tatuagens</label>
			<input type="text" name="cicMarcTatu" class="form-control" required>
		</div>

		<div class="form-group col-md-5">
			<label>Fotos de características físicas</label>
			<input type="file" name="fotoCaracFisica" required>
		</div>
	</div>
	</div>
