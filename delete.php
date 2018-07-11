<?php
/**
 * Created by PhpStorm.
 * User: bohdanliango
 * Date: 11.07.18
 * Time: 22:18
 */


$pdo = new PDO("mysql:host=localhost; dbname=tasksphp", "root", "1234");
$sql = 'DELETE FROM tasks WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
header("Location: /");
