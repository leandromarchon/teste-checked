<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Checked</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		
		<div class="container">
			<h1 class="page-header">Teste JQuery</h1>
			<form class="form-horizontal" action="processa.php" method="post">
				<fieldset>
				<legend>Cidadão</legend>
				<div class="form-group">
					<label class="col-md-4 control-label" for="nome">Nome:</label>  
					<div class="col-md-5">
						<input id="nome" name="nome" type="text" placeholder="" class="form-control input-md">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="endereco_cidadao">Endereço:</label>  
						<div class="col-md-6">
					<input id="endereco_cidadao" name="endereco_cidadao" type="text" placeholder="" class="form-control input-md">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="numero_cidadao">Número:</label>  
					<div class="col-md-1">
						<input id="numero_cidadao" name="numero_cidadao" type="text" placeholder="" class="form-control input-md">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="complemento_cidadao">Complemento:</label>  
					<div class="col-md-5">
						<input id="complemento_cidadao" name="complemento_cidadao" type="text" placeholder="" class="form-control input-md">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="bairro_cidadao">Bairro:</label>  
					<div class="col-md-5">
						<input id="bairro_cidadao" name="bairro_cidadao" type="text" placeholder="" class="form-control input-md">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="cidade_cidadao">Cidade:</label>  
						<div class="col-md-5">
					<input id="cidade_cidadao" name="cidade_cidadao" type="text" placeholder="" class="form-control input-md">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="marcar_endereco">Usar o mesmo endereço para a manifestação?</label>
					<div class="col-md-4">
						<label class="checkbox-inline" for="marcar_endereco">
						<input type="checkbox" name="marcar_endereco" id="marcar_endereco" value="">
						</label>
					</div>
				</div>
				</fieldset>
				
				<br>
				<fieldset>
				<legend>Manifestação</legend>
				<div class="form-group">
					<label class="col-md-4 control-label" for="motivo">Motivo</label>  
					<div class="col-md-5">
						<input id="motivo" name="motivo" type="text" placeholder="" class="form-control input-md">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="descricao_manifestacao">Descrição</label>
					<div class="col-md-4">                     
						<textarea class="form-control" id="descricao_manifestacao" name="descricao_manifestacao"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="endereco_cidadao">Endereço:</label>  
						<div class="col-md-6">
					<input id="endereco_manifestacao" name="endereco_manifestacao" type="text" placeholder="" class="form-control input-md">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="numero_cidadao">Número:</label>  
					<div class="col-md-2">
						<input id="numero_manifestacao" name="numero_manifestacao" type="text" placeholder="" class="form-control input-md">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="complemento_cidadao">Complemento:</label>  
					<div class="col-md-5">
						<input id="complemento_manifestacao" name="complemento_manifestacao" type="text" placeholder="" class="form-control input-md">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="bairro_cidadao">Bairro:</label>  
					<div class="col-md-5">
						<input id="bairro_manifestacao" name="bairro_manifestacao" type="text" placeholder="" class="form-control input-md">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="cidade_cidadao">Cidade:</label>  
						<div class="col-md-5">
					<input id="cidade_manifestacao" name="cidade_manifestacao" type="text" placeholder="" class="form-control input-md">
					</div>
				</div>
				</fieldset>
				<div class="form-group">
					<label class="col-md-4 control-label" for="btnCadastro"></label>
					<div class="col-md-8">
						<button id="btnCadastro" name="btnCadastro" class="btn btn-primary">Cadastrar</button>
						<button id="btnCancela" name="btnCancela" class="btn btn-danger">Cancelar</button>
					</div>
				</div>
			</form>
		</div>
		
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="app.js"></script>
	</body>
</html>