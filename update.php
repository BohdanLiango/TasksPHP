<?php
/**
 * Created by PhpStorm.
 * User: bohdanliango
 * Date: 11.07.18
 * Time: 21:21
 */

$data = [
    "id"    =>  $_GET['id'],
    "title" =>  $_POST['title'],
    "content"   =>  $_POST['content']
];

$pdo = new PDO("mysql:host=localhost; dbname=tasksphp", "root", "1234");
$sql = 'UPDATE tasks SET title=:title, content=:content WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->execute($data); // true || false

header("Location: /"); exit;