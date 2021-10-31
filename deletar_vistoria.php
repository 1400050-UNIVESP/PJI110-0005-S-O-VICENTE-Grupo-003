<?php

include "conectar.php";

$consultadelete = $_POST['consultadelete'];

mysqli_query($con, "DELETE FROM inspecoes WHERE ext_ID = '$consultadelete'");
header('location:vistorias.php');