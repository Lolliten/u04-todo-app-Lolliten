<!-- kolla tidighare php-pdo uppgifter för skapa bra struktur och få inspo -->

<?php error_reporting(E_ALL); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do List</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <main class="main-section">
        <div>

        </div>
        <div id="myDIV" class="header"> <!-- count(unfinished tasks)  ??-->
            <h2>My To Do List</h2>
            <form action="create.php" method="post">
                <input name="title" type="text" placeholder="Write your title here..." required><br>
                <input name="param" type="text" id="myInput" placeholder="Write you task here..." required>
                <input type="submit" class="addBtn" value="ADD">
            </form>
        </div>
        <?php require("read.php");
        ?>
    </main>
    <script src="javscript.js"></script>
</body>

</html>