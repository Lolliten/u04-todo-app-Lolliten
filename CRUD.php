<?php

use LDAP\Result; // ??

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
    }
}

function read($conn)
{
    try {
        $slct = $conn->prepare("SELECT title, task, id FROM todo_list");
        $slct->execute();

         // Med fetchAll får vi en array av arrayer.
        // Foreach kan enkelt hämta ut alla element
        echo "<ul id=`myUL`>";
        foreach ($slct->fetchAll() as $row) {
            echo "<li>"; //Hämtar list element
            print($row["title"]); //Hämtar title och skriver ut
            print($row["task"]); //Hämtar task och skriver ut
            //Edit button
            echo "
                <form action='edit_form.php' method='POST'>
                    <button class='buttons' type='submit' name='id' value={$row['id']}>EDIT</button>
                    </form>";
            //Delete button
            echo "
                <form action='delete.php' method='POST'>
                    <button class='buttons' type='submit' name='id' value={$row['id']}>X</button>
                </form>
                ";

            echo "</li>";
        }
        echo "</ul>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}

//if checked true or false? add a line through into list element if not checked dont add tod

function readById($conn, $id)
{
    try {

        $slct = $conn->prepare("SELECT title, task FROM todo_list WHERE id=:id");

        $slct->bindParam(":id", $id);

        $slct->execute();

        $result = $slct->fetchAll();
        return $result[0];
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}

function update($conn, $id, $titleData, $taskData)
{
    try {
        $stmt = $conn->prepare("UPDATE todo_list SET title=:title, task=:task WHERE id=:id");

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":title", $titleData);
        $stmt->bindParam(":task", $taskData);

        $stmt->execute();
    } catch (PDOException $e) {
        echo $stmt . "<br>" . $e->getMessage();
    }
}

function delete($conn, $id)
{
    try {

        $dlt = $conn->prepare("DELETE FROM todo_list WHERE id=:id");

        $dlt->bindParam(":id", $id);

        $dlt->execute();
    } catch (PDOException $e) {
        echo $dlt . "<br>" . $e->getMessage();
    }

    $conn = null;
}
