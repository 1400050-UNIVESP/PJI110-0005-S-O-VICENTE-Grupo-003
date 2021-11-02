<?php

include "conectar.php";

if ($con->connect_error) {
	die("A conexão falhou: " . $con->connect_error);
}

$sql = "SELECT ext_ID, ext_local, tipo, capacidade,TH,recarga FROM equipamentos";
/*$sql = "SELECT ext_ID, data_inp, resp, obs, FROM inspecoes";
$sql = "SELECT ext_ID, dataman, empresa, troca FROM manutencao";*/

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
				<h1>Relatórios de Extintores</h1>
				</hgroup>
			<nav id="menu">
				<h1>Menu Principal</h1>
				<ul>
					<input type="button" value="Imprimir" onClick="window.open('pdfextintores.php')"/>
					<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
				</ul>
				</ul>
			</nav>
			<div class="tabela_extintores">
				<?php

				if ($result !== false && $result->num_rows > 0) {
					echo '
				<table border="1" cellspacing="2" cellpadding="3" style="width: 50%">
					<tr>
						<th>Extintor</th>
						<th>Localização</th>
						<th>Tipo</th>
						<th>Capacidade</th>
						<th>Teste Hidrostático</th>
						<th>Recarga</th>
					</tr>';

					while ($row = $result->fetch_assoc()) {
						echo '
						<tr> 
							<td>' . $row['ext_ID'] . '</td> 
							<td>' . $row['ext_local'] . '</td> 
							<td>' . $row['tipo'] . '</td> 
							<td>' . $row['capacidade'] . '</td> 
							<td>' . $row['TH'] . '</td>
							<td>' . $row['recarga'] . '</td>							
						</tr>';
					}
					echo "</table>";
				} else {
					echo "Não há registros";
				}
				$con->close();
				?>

		
	</div>
	<script src="_javascript/funcoes.js"></script>
</body>

</html>