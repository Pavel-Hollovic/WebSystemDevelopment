<?php
require_once ("database.php");

$id = filter_var($_GET['id'], FILTER_SANITIZE_STRING);

$sql = "DELETE FROM blog WHERE id=$id";
$conn->exec($sql);

header("Location: index.php");
die();