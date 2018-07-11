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
            <h1>Show Task</h1>
            <hr>
            <h3><?= $task['title']; ?></h3>
            <p>
                <?= $task['content'];?>
            </p>
            <a href="/" class="btn btn-success">Go Back!</a>
        </div>
    </div>
</div>
</body>
</html>