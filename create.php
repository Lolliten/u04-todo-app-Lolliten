<?php

include_once("db_conn.php"); //connection till databas genom db_conn.php setup-filen

try {

    $sql = "INSERT INTO todo_list(task)
    VALUES ('Learn PHP')";

    $conn->exec($sql);

    echo "New task created!";

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

 $conn = null; //avslutar connection till databas

 ?>