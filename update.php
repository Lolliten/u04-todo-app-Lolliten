<?php

include_once("db_conn.php");
include_once("CRUD.php");

//declare variable


$id = $_POST["id"];
$titleData = $_POST["title"];
$taskData = $_POST["task"];
$checked = $_POST["checked"];

update($conn, $id, $titleData, $taskData, $checked);

$conn = null;

?>