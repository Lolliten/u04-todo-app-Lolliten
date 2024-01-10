<?php

function create($conn, $param)
{
    try {

        $sql = "INSERT INTO todo_list(task) 
        VALUES ('Learn PHP')"; // do prepare stmt and bind data from create.php

        $conn->exec($sql);

        echo "New task created!";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function read($conn)
{
    try {

        $sql = "SELECT task FROM todo_list";

        $stmt = $conn->prepare($sql);
        $stmt->execute();


        echo "<ul id=`myUL`>";
        // Med fetchAll får vi en array av arrayer.
        // Foreach kan enkelt hämta ut alla element https://www.w3schools.com/php/php_looping_foreach.asp
        foreach ($stmt->fetchAll() as $row) {
            echo "<li>";
            print($row["task"]); //print lättare att använda när man har variabler
            echo "</li>";
        }
        echo "</ul>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} //if checked true add a line through into list element if not checked dont add

function update($conn, $param)
{

    try {
        $sql = "UPDATE todo_list(task) WHERE id=:id"; //Hårdkodat?? Annat sätt göra på??

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(":task", $param); //Hårdkodat?? Annat sätt göra på??

        $stmt->exec();

        echo $stmt->rowCount() . " UPDATED successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function delete($conn){
    try {
        // sql to delete a record
        $sql = "DELETE FROM task WHERE id=3";
    
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    
        echo "Person deleted successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    } 
}
