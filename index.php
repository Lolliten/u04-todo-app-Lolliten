<!-- kolla tidighare php-pdo uppgifter för skapa bra struktur och få inspo -->

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

        <div id="myDIV" class="header">
            <h2>My To Do List</h2>
            <form action="update.php" method="get">
            <!-- <label>Write you task here</label> -->
            <input name="param" type="text" id="myInput" placeholder="Write you task here...">
            <input type="submit" onclick="newElement()" class="addBtn" value="ADD">
            </form>
        </div>

        <ul id="myUL">
            <li class="checked"></li>
            <li></li>
            <li></li>
        </ul>
    </main>
    <script src="javscript.js"></script>
</body>

</html>