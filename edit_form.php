<?php 

include_once("db_conn.php");
include_once("CRUD.php");

$taskData = readById($conn, 2);

var_dump($taskData);

?>

<h2>Update My To Do List</h2>
            <form action="create.php" method="post">
                <input value=<?php $taskData["title"]; ?> name="title" type="text" placeholder="Write new title here..." required>
                <input value=<?php $taskData["task"]; ?> name="task" type="text" id="myInput" placeholder="Write new task here..." required>
                <input type="submit" class="addBtn" value="SAVE">
            </form>
        </div>

        <!-- Redirect back to index -->