<?php

include_once("db_conn.php");
include_once("CRUD.php");


$id = $_POST["id"];
$titleData = $_POST["title"];
$taskData = $_POST["task"];

update($conn, $id, $titleData, $taskData);

$conn = null;

header('Location: index.php');
exit();
?>