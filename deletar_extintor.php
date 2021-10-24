<?php

include "conectar.php";

$consultadelete = $_POST['consultadelete'];

mysqli_query($con, "DELETE FROM equipamentos WHERE ext_ID = '$consultadelete'");
header('location:index.php');