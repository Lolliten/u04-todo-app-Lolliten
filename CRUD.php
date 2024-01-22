<?php

function create($conn, $titleData, $param)
{
    try {

        $insert = $conn->prepare("INSERT INTO todo_list(title, task, checked)
        VALUES (:title, :task, false)");
        $insert->bindParam(":title", $titleData);
        $insert->bindParam(":task", $param);

        $insert->execute();
    } catch (PDOException $e) {
        echo "insert error" . "<br>" . $e->getMessage(); //displays errormessage from db_conn.php
    } //why the $insert variable in this catch?
    //$sql = "INSERT INTO todo_list(task, checked) 
    //VALUES (:task, false)"; // do prepare stmt and bind data from create.php
}

function read($conn)  //Only conn or different variable?
{
    try {

        $slct = $conn->prepare("SELECT title, task, id FROM todo_list");

        $slct->execute();


        //Varför echo innan loop? If/else statement? 
        echo "<ul id=`myUL`>";
        // Med fetchAll får vi en array av arrayer.
        // Foreach kan enkelt hämta ut alla element
        foreach ($slct->fetchAll() as $row) {
            echo "<li>";
            print($row["title"]);
            print($row["task"]); //print lättare att använda när man har variabler
            echo "<button>EDIT</button>";
            echo "<button ($row[`id`])>X</button>";
            
            echo "</li>";
        }
        echo "</ul>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
} //if checked true or false? add a line through into list element if not checked dont add tod
//Pass id data from slct to the delete funtction so delete the right task based on id.


function update($conn, $id, $titleData, $taskData, $checked)
{
    try {
        $stmt = $conn->prepare("UPDATE todo_list SET task=:task WHERE id=:id");

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":task", $titleData);

        $stmt->exec();

    } catch (PDOException $e) {
        echo $stmt . "<br>" . $e->getMessage();
    }
}

function delete($conn, $id)
{
    try {
       
        $dlt = $conn->prepare("DELETE FROM todo_list WHERE id=:id");

        $dlt->bindParam(":id");

        $dlt->execute();

    } catch (PDOException $e) {
        echo $dlt . "<br>" . $e->getMessage();
    }

    $conn = null;
}