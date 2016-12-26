<?php
require_once("plugins/general.php");

$ip = getIp();
$browser = getBrowser();
$system = getSystem();
$cookie = @addslashes($_COOKIE["itamy_identificator"]);
$time = date("H:i:s");
$date = date("Y-m-d");
$string = addslashes($_SERVER["HTTP_USER_AGENT"]);

//Verificando se o visitante já existe cadastrado
$data = mysql_query("SELECT txtcookie FROM visitas WHERE dtdata='$date' AND txtip='$ip' OR dtdata='$date' AND txtcookie='$cookie'");
$visitor = mysql_fetch_array($data);
$GLOBALS["visitor_number"] = mysql_num_rows($data);

//Se o cookie não existir, ele é criado
if ($cookie == "") {
	if ($GLOBALS["visitor_number"] != 0) {
		$cookie = $visitor["txtcookie"];
		setcookie("itamy_identificator", $cookie);
	} else {
		$cookie = MD5(date("YmdHis").rand(-500, 500).$string.$ip);
		setcookie("itamy_identificator", $cookie);
	}
}

//Se o site não tiver sido visitado nenhuma vez por este usuário, ele é cadastrado
if ($GLOBALS["visitor_number"] == 0) {
	mysql_query("INSERT INTO visitas (dtdata, dthora, txtip, txtstring, txtbrowser, txtsistema, txtcookie) VALUES ('$date', '$time', '$ip', '$string', '$browser', '$system', '$cookie')");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<!-- AUTHOR: RICARDO AZZI SILVA -->
		
		<!-- META -->
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<!-- TÍTULO -->
		<title>Casa de Repouso Itacolomy</title>		
		
		<!-- jQuery -->
		<script type="text/javascript" src="plugins/js/jquery.js"></script>
		
		<!-- Bootstrap -->
		<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.js"></script>
		<link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.css">

		<!-- Estilo -->
		<link rel="stylesheet" type="text/css" href="plugins/css/animate.css/animate.css" /> <!-- CSS animate -->
		<link rel="stylesheet/less" type="text/css" href="plugins/css/style.css" />
		<script type="text/javascript" src="plugins/js/less-1.3.0.min.js"></script>
		
		<!-- JS initialize -->
		<script type="text/javascript">
			$(function(){
				<?php if ($GLOBALS["visitor_number"] == 0) { ?>
					setTimeout(function(){
						$("#logotipo").attr("class", "animated shake");
					}, 1000);
				<?php } ?>
				
				$("#content, #content .middle").css("height", screen.height+"px");
				
				$("#menu .menu a").mouseover(function(){
					
				});
				
				$("#menu .menu a").mouseleave(function(){
				
				});
			});
		</script>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<div class='middle'>
					<img src="plugins/img/top.png" id="top-image" />
					<img src="plugins/img/itacolomy_100px.png" id="logotipo" />
					<strong>
						<h1>RESIDENCIAL ITACOLOMY</h5>
						<h4>INSTITUIÇÃO DE LONGA PERMANÊNCIA PARA IDOSOS</h2>
					</strong>
				</div>
			</div>
			<div id="menu">
				<div class='middle'>
					<a href="#"><IMG src="plugins/img/estrela.png"></a>
					<a href="index.php">INICIO</a>
					<a href="page.php">QUEM SOMOS</a>
					<a href="itacolomy1.php">ITACOLOMY I</a>
					<a href="itacolomy2.php">ITACOLOMY II</a>
					<a href="contato.php">CONTATO</a>
				</div>
			</div>
			<div id="content">
				<div class='middle'>