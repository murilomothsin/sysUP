<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- INCLUDES -->
	<link href="css/geral.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="scripts/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
	<script type="text/javascript" src="scripts/_index.js"></script>
	<script type="text/javascript" src="scripts/mousewheel.js"></script>
	<script type="text/javascript" src="scripts/easing.js"></script>
	<script src="scripts/jquery.slides.min.js"></script>
	<script type="text/javascript" src="http://sawpf.com/1.0.js"></script>
	<?php 
	include("includes/functions/functions.php");
	require_once("includes/model/index.model.php");
	$infos = getInfoFromBD();
	//pr($infos);
	?>
	<title>sysUP - Tecnologia</title>
</head>
<body>
	<div name="main" class="main">
		<div name="topo" class="topo">
			<div name="logo" class="logo"></div>
			<div name="info" id="info" class="info">
				<div id="slides">
					<span><h3>Teste info 1</h3>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</span>
					<span><h3>Teste info 2</h3>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</span>
					<span><h3>Teste info 3</h3>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</span>
					<span><h3>Teste info 4</h3>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</span>
					<span><h3>Teste info 5</h3>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</span>
				</div>
			</div>
		</div>
		<div name="conteudo" id="content" class="conteudo">
		</div>
		<div name="menu" class="menu"><center>
			<ul class="listMenu">
				<li  class="itemMenu" id="loadHome">
					Inicio
				</li>
				<li class="itemMenu" id="loadSoluction">
					Soluções
				</li>
				<li class="itemMenu" id="loadTech">
					Tecnologias
				</li>
				<li class="itemMenu" id="loadAbout">
					Sobre
				</li>
			</ul></center>
		</div>
		<div style="clear: both;"></div>
		<div name="rodape" class="rodape"><center>
			sysUP Tecnologia<br />
			(51) 3541-1596 <br />
			contato@sysup.com.br </center>
		</div>
		<div style="clear: both;"></div>
	</div>
</body>
</html>