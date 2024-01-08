<?php

include_once("db_conn.php"); //connection till databas genom db_conn.php setup-filen
include_once("CRUD.php");

create($conn);

 $conn = null; //avslutar connection till databas

 ?>