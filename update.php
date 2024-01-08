<?php

include_once("db_conn.php");
include_once("CRUD.php");


$param = $_GET["param"]

//if-sats för att kolla parameter?

update($conn, $param);

$conn = null;

?>