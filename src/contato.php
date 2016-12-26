<?php
require_once("plugins/php/function.php");
require_once("header.php");
?>
<script type="text/javascript" src="plugins/js/mascara/jquery.maskedinput-1.1.4.pack.js"></script>
<script type="text/javascript">
</script>

<form class="form-horizontal " method="POST" action="">
	<div class="control-group">
		<label id="label-email" class="control-label" for="txt-email">Seu E-mail:</label>
		<div class="controls">
			<input type="text" class="input-xlarge" placeHolder="Ex: exemplo@exemplo.com.br" id="txt-email" name="txt-email" />
		</div>
	</div>
	<div class="control-group">
		<label id="label-telefone" class="control-label" for="txt-telefone">Telefone:</label>
		<div class="controls">
			<input type="text" class="input-xlarge" placeHolder="(99) 9999.9999 ou (99) 9999.9999.9" id="txt-telefone" name="txt-telefone">
		</div>
	</div>
	<div class="control-group">
		<label id="label-assunto" class="control-label" for="txt-assunto">Assunto:</label>
		<div class="controls">
			<input type="text" class="input-xlarge" id="txt-assunto" name="txt-assunto">
		</div>
	</div>
	
	<div class="control-group">
		<label id="label-mensagem" class="control-label" for="txtarea-mensagem">Mensagem:</label>
		<div class="controls">
		<textarea class="input-xlarge" id="txtarea-mensagem" name="txtarea-mensagem" rows="5"></textarea>
		</div>
	</div>
	
	<div class="controls">
		<button class="btn btn-success">Enviar</button>
	</div>
</form>
<?php require_once("footer.php"); ?>