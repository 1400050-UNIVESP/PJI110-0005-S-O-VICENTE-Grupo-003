<?php

include "conectar.php";

$idUpdate = $_POST['idUpdate'];
$dataUpdate = $_POST['dataUpdate'];
$respUpdate = $_POST['respUpdate'];
$observacoesUpdate = $_POST['observacoesUpdate'];

mysqli_query($con, "UPDATE inspecoes SET ext_ID = '{$idUpdate}',data_inp = '{$dataUpdate}',resp = '{$respUpdate}',obs = '{$observacoesUpdate}' WHERE ext_ID = '$idUpdate'");
header('location:vistorias.php');