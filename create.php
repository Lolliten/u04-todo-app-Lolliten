<?php

header('Location: index.php');
exit;

include_once("db_conn.php"); //connection till databas genom db_conn.php setup-filen -->
include_once("CRUD.php");

$taskData = $_GET['param'];
create($conn, $taskData);


 $conn = null; //avslutar connection till databas


error_reporting(E_ALL)

 ?>
