<?php

$pdo = new PDO("mysql:host=localhost; dbname=tasksphp", "root", "1234");
$sql = "SELECT * FROM tasks WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$task = $statement->fetch(PDO::FETCH_ASSOC);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="style/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create Task</h1>
            <hr>
            <form action="update.php?id=<?= $task['id'];?>" method="post">
                <h4 class="text-center">Title</h4>
                <div class="form-group">
                    <input type="text" name="title" class="form-control" value="<?= $task['title'];?>">
                </div>

                <h4 class="text-center">Text</h4>
                <div class="form-group">
                    <textarea name="content" class="form-control"><?= $task['content'];?></textarea>
                </div>

                <div class="form-group">
                    <button class="btn-warning" type="submit">Edit</button>
                </div>

            </form>
            <a href="/" class="btn btn-success">Go Back!</a>
        </div>
    </div>
</div>
</body>
</html>