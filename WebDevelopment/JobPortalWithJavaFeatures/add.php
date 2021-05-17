<<?php
require_once("database.php");

$title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
$category = filter_var($_POST['Category'], FILTER_SANITIZE_STRING);
$description = filter_var($_POST['Description'], FILTER_SANITIZE_STRING);
$companyId = $_SESSION['company_id'];

$sql = "INSERT INTO jobs (title, category, description, companyId) VALUES ('$title', '$category','$description', '$companyId')";
$conn->exec($sql);

header("Location: index.php");
die();