<?php
error_reporting(E_ALL); //Reports all errors. Can I have on all pages?

include_once("db_conn.php"); //connection till databas genom db_conn.php setup-filen -->
include_once("CRUD.php"); 

$titleData = $_POST['title'];
$taskData = $_POST['param'];

create($conn, $titleData, $taskData);

 $conn = null; //avslutar connection till databas

 header('Location: index.php'); //Header right place??
exit();



 ?>
