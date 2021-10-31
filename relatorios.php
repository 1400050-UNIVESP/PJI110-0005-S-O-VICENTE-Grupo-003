<?php

include "conectar.php";

if ($con->connect_error) {
	die("A conexão falhou: " . $con->connect_error);
}

$sql = "SELECT ext_ID, ext_local, tipo, capacidade FROM equipamentos";
$result = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<title> Controle de Extintores</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo2.css" />
</head>

<body>
	<div id="interface">
		<header id="cabecalho">
			<hgroup>
				<h1>Relatórios</h1>
				</hgroup>
			<nav id="menu">
				<h1>Menu Principal</h1>
				<ul>
					<li onmouseover="mudaFoto ()"><a href="index.php">Voltar</a></li>
				</ul>
		</header>
		<figure class="foto-legenda">
			<footer id="rodape">
				<p>Copyright &copy; 2021 - by UNIVESP - Grupo 003 - Projeto Integrador 1 - São Vicente<br />
			</footer>
	</div>
	<script src="_javascript/funcoes.js"></script>
</body>

</html>