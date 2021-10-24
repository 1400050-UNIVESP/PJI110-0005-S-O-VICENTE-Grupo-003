<?php

include "conectar.php";

$idExtintor = $_POST['idExtintor'];
$localExtintor = $_POST['localExtintor'];
$tipo = $_POST['tipo'];
$capacidade = $_POST['capacidade'];

mysqli_query($con, "INSERT INTO equipamentos(ext_ID,ext_local,tipo,capacidade) VALUES ('{$idExtintor}','{$localExtintor}','{$tipo}','{$capacidade}')");
header('location:extintores.php');