<?php

include_once("db_conn.php");
include_once("CRUD.php");

read($conn);

$conn = null; //bra practise att alltid stänga connection i slutet

?>