<?php

include "conectar.php";

$extintorID = $_POST['extintorID'];
$dataManutencao = $_POST['dataManutencao'];
$empresa = $_POST['empresa'];
$troca = $_POST['manutencao'];

mysqli_query($con, "INSERT INTO manutencao(ext_ID,dataman,empresa) VALUES ('{$extintorID}','{$dataManutencao}','{$empresa}','{$troca}')");
header('location:manutencao.php');