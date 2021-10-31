<?php

include "conectar.php";

$idExtintor = $_POST['idExtintor'];
$localExtintor = $_POST['localExtintor'];
$tipo = $_POST['tipo'];
$capacidade = $_POST['capacidade'];
$TH = $_POST['TH'];
$recarga = $_POST['recarga'];

mysqli_query($con, "INSERT INTO equipamentos(ext_ID,ext_local,tipo,capacidade,TH,recarga) VALUES ('{$idExtintor}','{$localExtintor}','{$tipo}','{$capacidade}','{$TH}','{$recarga}')");
header('location:extintores.php');