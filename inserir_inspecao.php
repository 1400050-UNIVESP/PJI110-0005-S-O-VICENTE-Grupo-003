<?php

include "conectar.php";

$extintorID = $_POST['extintorID'];
$dataInspecao = $_POST['dataInspecao'];
$responsavel = $_POST['responsavel'];
$observacoes = $_POST['observacoes'];

mysqli_query($con, "INSERT INTO inspecoes(ext_ID,data_inp,resp,obs) VALUES ('{$extintorID}','{$dataInspecao}','{$responsavel}','{$observacoes}')");
header('location:vistorias.php');