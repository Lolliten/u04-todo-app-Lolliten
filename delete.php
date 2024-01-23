<?php

include_once("db_conn.php");
include_once("CRUD.php");

$id = $_POST["id"];

delete($conn, $id);


$conn = null;

?>