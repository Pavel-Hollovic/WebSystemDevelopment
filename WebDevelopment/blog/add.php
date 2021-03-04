<<?php
require_once("database.php");

$title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
$article = filter_var($_POST['Article'], FILTER_SANITIZE_STRING);

$sql = "INSERT INTO blog (title, content) VALUES ('$title','$article')";
$conn->exec($sql);

header("Location: index.php");
die();