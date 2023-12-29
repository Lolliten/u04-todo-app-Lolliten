<?php

include_once("db_conn.php")

try {

    $sql = "SELECT * FROM task"; //Hämtar all data i tabellen (Read)

    $stmt = $conn->prepare(); //Förberder prepare statement

    $stmt->execute(); //Executar prepeare statement

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); //Hämtar varje rad som en array, vanligt att man gör så här


    echo "<ul>"; //fetchAll skapar en array av arrayer

    //foreach loopen hämtar alla element
    foreach ($stmt->fetchAll() as $row) {
        echo "<li>";
        print($row["id"] . " " . $row["task"]);
        echo "</li>";
    }
    echo "</ul>";

} catch (PDOException $e) {
    echo "Error" . $e->getMessage();
}

$conn = null;

?>