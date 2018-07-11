<?php
/**
 * Created by PhpStorm.
 * User: bohdanliango
 * Date: 11.07.18
 * Time: 13:38
 */

//1. Connect
$pdo = new PDO("mysql:host=localhost; dbname=tasksphp", "root", "1234");
//2. Prepare statement
$sql = "SELECT * FROM tasks";
$statement = $pdo->prepare($sql);
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
?>


<!doctype html>
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
            <h1>All Tasks</h1>
            <a href="create.php" class="btn btn-success">Add Task</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tasks as $task):?>
                <tr>
                    <td><?= $task['id'];?></td>
                    <td><?= $task['title'];?></td>
                    <td>
                        <a href="show.php?id=<?= $task['id'];?>" class="btn btn-info">Show</a>
                        <a href="edit.php?id=<?= $task['id'];?>" class="btn btn-warning">Edit</a>
                        <a onclick="return confirm('Are you sure?')" href="delete.php?id=<?= $task['id'];?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>

