<?php

include "conectar.php";

$idUpdate = $_POST['idUpdate'];
$localUpdate = $_POST['localUpdate'];
$tipoUpdate = $_POST['tipoUpdate'];
$capacidadeUpdate = $_POST['capacidadeUpdate'];

mysqli_query($con, "UPDATE equipamentos SET ext_ID = '{$idUpdate}',ext_local = '{$localUpdate}',tipo = '{$tipoUpdate}',capacidade = '{$capacidadeUpdate}' WHERE ext_ID = '$idUpdate'");
header('location:extintores.php');