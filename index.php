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
        <h1>A to-do-list</h1>
        <br>
        <section class="add-section">
            <form action="create.php" method="get"> <!-- Is it connected to mariadb now? and does my totdolist stuff gets created and deleted in DB? -->
                <input class="write-field" type="text" 
                       name="title" 
                       placeholder="Please fill in your task here"> <br> 
                <button type="submit">Add task &nbsp; <span>&#43;</span></button>
            </form>
        </section>
        <div class="todo-section">
            <div class="todo-item">
                <input class="task-list" type="submit" value="Done"> <!--Done-->
                <div class="article-style">
                <form action="read.php" method="get">
                <input class="write-field" type="text" 
                       name="title" 
                       placeholder="Your task is shown here"> <br>
                </div>
                <input class="task-list" type="submit" value="Edit"> <!--Delete-->
                <input class="task-list" type="submit" value="Delete"> <!--Delete-->
            </div>
        </div>
    </main>

</body>
</html>