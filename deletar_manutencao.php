<?php

include "conectar.php";

$consultadelete = $_POST['consultadelete'];

mysqli_query($con, "DELETE FROM manutencao WHERE ext_ID = '$consultadelete'");
header('location:manutencao.php');