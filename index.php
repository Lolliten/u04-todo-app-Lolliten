<!-- kolla tidighare php-pdo uppgifter för skapa bra struktur och få inspo -->

<!--require 'db_conn.php'; -->

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
            <form action="">
                <input type="text" 
                       name="title" 
                       placeholder="Please fill in your task here"> <br>
                <button type="submit">Add task &nbsp; <span>&#43;</span></button>
            </form>
        </section>
        <div class="show-todo-section">
            <input type="checkbox">
            <h2>Tasks: </h2>
            <small>created:</small>
        </div>
    </main>

</body>
</html>