<?php
require_once "database.php";

if(isset($_POST['submit'])) {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    $result = $conn->query("SELECT * FROM Company WHERE username='$username'");

    if($result->rowCount() > 0) {
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if($password == $row['password']) {
            $_SESSION['company_id'] = $row['id'];
            $_SESSION['company_username'] = $username;
            header("Location: index.php");
            die();
        }
        else {
            header("Location: login.php");
            die();
        }
    }
    else {
        header("Location: login.php");
        die();
    }
}