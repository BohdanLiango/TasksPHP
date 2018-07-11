<?php
/**
 * Created by PhpStorm.
 * User: bohdanliango
 * Date: 11.07.18
 * Time: 14:51
 */
$pdo = new PDO("mysql:host=localhost; dbname=tasksphp", "root", "1234");
$sql = "INSERT INTO tasks(title, content) VALUE (:title, :content)";
$statement = $pdo->prepare($sql);
//$statement->bindParam(":title", $_POST['title']);
//$statement->bindParam(":content", $_POST['content']);
$statement->execute($_POST);
header("Location: /");exit;