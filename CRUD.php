<?php

function create($conn, $param)
{
    try {

        $insert = $conn->prepare("INSERT INTO todo_list(task, checked)
        VALUES (:task, :checked)"); //should value task be false??
        $insert->bindParam(":task", $param);
        $insert->bindParam(":checked", $param);

        $insert->execute();

        echo "New task created!";
    } catch (PDOException $e) {
        echo $insert . "<br>" . $e->getMessage(); //displays errormessage from db_conn.php
    } //why the $insert variable in this catch?
            //$sql = "INSERT INTO todo_list(task, checked) 
            //VALUES (:task, false)"; // do prepare stmt and bind data from create.php
}

function read($conn)  //Only conn or different variable?
{
    try {

        $slct = $conn->prepare("SELECT task FROM todo_list)
        VALUES (task)");
        $slct->bindParam(":task", $conn);
        $slct->execute();

        If/else statement?
        //Funkar loopen? 
        echo "<ul id=`myUL`>";
        // Med fetchAll får vi en array av arrayer.
        // Foreach kan enkelt hämta ut alla element
        foreach ($slct->fetchAll() as $row) {
            echo "<li>";
            print($row["task"]); //print lättare att använda när man har variabler
            echo "</li>";
            echo "</ul>";
        } //line through tasks?
        } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        }
    $conn = null;
} //if checked true or false? add a line through into list element if not checked dont add tod



function update($conn, $param) 
{
    //where is my stmt declared??
    try {
        $stmt = $conn->prepare("UPDATE todo_list(task) SET task WHERE task=:task");

        $stmt->bindParam(":task", $param);

        $stmt->exec();

        echo $stmt->rowCount() . " UPDATED successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function delete($conn) //only conn or some other variable??
{ 
    try {
        // sql to delete a record
        $sql = $conn->prepare("DELETE FROM tasks WHERE userID=:userId");
    
        $sql->bindParam(":userId")

        $ql->execute();
    
        echo "Task deleted successfully";

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    } 

    $conn = null;
}

?>