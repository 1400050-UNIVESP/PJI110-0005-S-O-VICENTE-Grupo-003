<?php

include "conectar.php";

$idUpdate = $_POST['idUpdate'];
$dataUpdate = $_POST['dataUpdate'];
$empresaUpdate = $_POST['empresaUpdate'];
$trocaUpdate = $_POST['trocaUpdate'];

mysqli_query($con, "UPDATE manutencao SET ext_ID = '{$idUpdate}',dataman = '{$dataUpdate}',empresa = '{$empresaUpdate}',troca = '{$trocaUpdate}' WHERE ext_ID = '$idUpdate'");
header('location:manutencao.php');