<?phprequire_once("../plugins/general.php");if (post("submit-login") == "Fazer login") {	$login = post("txt-login");	$senha = MD5(post("pass-senha"));	$data = mysql_query("SELECT txtlogin FROM admin WHERE txtlogin='$login' AND txtsenha='$senha'");	$logado = mysql_fetch_array($data);	$logado = $logado["txtlogin"];	if ($logado != FALSE) {			}}if ($_SESSION["logado"] == TRUE) {}?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html>	<head>		<!-- META -->		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />				<!-- T�TULO -->		<title>Administrador</title>						<!-- jQuery -->		<script type="text/javascript" src="../plugins/js/jquery.js"></script>		<script type="text/javascript" src="../plugins/js/jquery.ui.core.js"></script>		<script type="text/javascript" src="../plugins/js/jquery.ui.widget.js"></script>		<script type="text/javascript" src="../plugins/js/jquery.ui.mouse.js"></script>		<script type="text/javascript" src="../plugins/js/jquery.ui.draggable.js"></script>		<!-- Estilo -->		<link rel="stylesheet/less" type="text/css" href="../plugins/css/admin.css" />		<script type="text/javascript" src="../plugins/js/less-1.3.0.min.js"></script>				<!-- JS Initialize -->		<script type="text/javascript">			$(function(){				$(".window").draggable({					handle: "span.title"				});			});		</script>	</head>	<body>		<div class="window">			<span class="title"><h1>Fa�a o login</h1><b>X</b></span>			<div>				<span><label>Login:</label> <input type="text" id="txt-login" /></span>				<span><label>Senha:</label> <input type="password" id="pass-senha" /></span>				<span><a href="#">Esqueci minha senha.</a></span>				<span><input type="button" class="normal" value="Voltar" id="voltar" /><input type="button" class="normal" value="Fazer login" id="submit-login" /></span>			</div>		</div>	</body></html>