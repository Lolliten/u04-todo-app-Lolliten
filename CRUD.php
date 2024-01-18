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
            echo "</li>";
        }
        echo "</ul>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
} //if checked true or false? add a line through into list element if not checked dont add tod
//Pass id data from sql to the delete funtction so delete the right task based on id.


function update($conn, $param)
{
    //where is my stmt declared??
    try {
        $stmt = $conn->prepare("UPDATE todo_list(task) SET :task WHERE id=:id");

        $stmt->bindParam(":id", $param);
        $stmt->bindParam(":task");

        $stmt->exec();

        echo $stmt->rowCount() . " UPDATED successfully";
    } catch (PDOException $e) {
        echo $stmt . "<br>" . $e->getMessage();
    }
}

function delete($conn) //only conn or some other variable??
{
    try {
        // sql to delete a record
        $sql = $conn->prepare("DELETE FROM todo_list WHERE userID=:userId");

        $sql->bindParam(":userId");

        $sql->execute();

        echo "Task deleted successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}
//