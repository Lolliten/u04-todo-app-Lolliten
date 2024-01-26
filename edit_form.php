<?php 

include_once("db_conn.php");
include_once("CRUD.php");

$taskData = readById($conn, $_POST["id"]);


?>

<h2>Update My To Do List</h2>
            <form action="update.php" method="post">
                <input value=<?php echo $taskData['title']; ?> name="title" type="text" placeholder="Write new title here..." required>
                <input value=<?php echo $taskData['task']; ?> name="task" type="text" id="myInput" placeholder="Write new task here..." required>
                <button type="submit" name="id" class="addBtn" value=<?php echo $_POST['id']; ?>>SAVE</button>
            </form>
        </div>

        <!-- Redirect back to index -->