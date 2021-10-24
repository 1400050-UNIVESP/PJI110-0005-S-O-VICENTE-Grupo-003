<?php

include "conectar.php";

if ($con->connect_error) {
	die("A conexão falhou: " . $con->connect_error);
}

$sql = "SELECT ext_ID, data_inp, resp FROM inspecoes";
$result = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<title> Controle de Vistorias</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo2.css" />
</head>

<body>
	<div id="interface">
		<header id="cabecalho">
			<hgroup>
				<h1>Cadastro de Vistorias</h1>
			</hgroup>
			<nav id="menu">
				<h1>Menu Principal</h1>
				<ul>
					<li onmouseover="mudaFoto ()"><a onclick="cadastrarVistoria()">Cadastrar</a></li>
					<li onmouseover="mudaFoto ()"><a onclick="alterarVistoria()">Alterar</a></li>
					<li onmouseover="mudaFoto ()"><a onclick="deletarVistoria()">Deletar</a></li>
					<li onmouseover="mudaFoto ()"><a href="index.php">Voltar</a></li>
				</ul>
				</ul>
			</nav>
			<div class="tabela_vistorias">
				<?php

				if ($result->num_rows > 0) {
					echo '
				<table border="1" cellspacing="2" cellpadding="4" style="width: 50%">
					<tr>
						<th>ID</th>
						<th>Data</th>
						<th>Responsável</th>
					</tr>
				';
					while ($row = $result->fetch_assoc()) {
						echo '
						<tr> 
							<td>' . $row['ext_ID'] . '</td> 
							<td>' . $row['data_inp'] . '</td> 
							<td>' . $row['resp'] . '</td> 
						</tr>';
					}
					echo "</table>";
				} else {
					echo "Não há registros";
				}
				$con->close();

				?>
				<!-- INSERT -->
				<form class="row g-3" id="inserir_vistoria_formulario" action="inserir_inspecao.php" method="POST" style="display: none;">
					<div class="col-md-6">
						<input class="form-control" type="text" name="extintorID" placeholder="ID">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="date" name="dataInspecao" placeholder="Data da Inspeção">
					</div>
					<div class="col-md-6">
						<textarea class="form-control" type="text" name="responsavel" placeholder="Responsável"></textarea>
					</div>
					<div class="col-md-6">
						<input class="botao cadastrar_vistoria" type="submit" value="Cadastrar">
					</div>
				</form>
				<!-- UPDATE -->
				<form class="row g-3" id="alterar_vistoria_formulario" action="alterar_vistoria.php" method="POST" style="display: none;">
					<div class="col-md-6">
						<input class="form-control" type="text" name="idUpdate" placeholder="ID">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="date" name="dataUpdate" placeholder="Data da Inspeção">
					</div>
					<div class="col-md-6">
						<textarea class="form-control" type="text" name="respUpdate" placeholder="Responsável"></textarea>
					</div>
					<div class="col-md-6">
						<input class="botao alterar_extintor" type="submit" value="Alterar">
					</div>
				</form>
				<!-- DELETE -->
				<form class="row g-3" id="deletar_vistoria_formulario" action="deletar_vistoria.php" method="POST" style="display: none;">
					<div class="col-md-6">
						<input class="form-control" type="text" name="consultadelete" placeholder="ID">
					</div>
					<div class="col-md-6">
						<input class="botao cadastrar_extintor" type="submit" value="Deletar">
					</div>
				</form>
			</div>
		</header>
		<figure class="foto-legenda">
			<footer id="rodape">
				<p>Copyright &copy; 2021 - by UNIVESP - Grupo 003 - Projeto Integrador 1 - São Vicente<br />
			</footer>
	</div>
	<script src="_javascript/funcoes.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>