<?php
require_once "database.php";
$log = array();
if(isset($_POST['submit'])) {
    $log['username'] = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $log['city'] = filter_var($_POST['city'], FILTER_SANITIZE_EMAIL);
    $log['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $repeat = filter_var($_POST['repeat'], FILTER_SANITIZE_STRING);

    if(empty($log['username']) || empty($log['city']) ||
        empty($log['name']) || empty($password)) {
        $log['error'] = "All values must be completed";
    }
    else if($password != $repeat) {
        $log['error'] = "Password does not much";
    }
    else {
        $result = $conn->query("SELECT * FROM Company WHERE username='{$log['username']}'");
        if($result->rowCount() > 0) {
            $log['error'] = "Username already in use";
        }

        else {
            // WE can register
            $query = "INSERT INTO Company(username, city, name, password)
                      VALUES('{$log['username']}', '{$log['city']}', 
                             '{$log['name']}', '$password')";
            $conn->exec($query);
            header("Location: login.php");
            die();
        }
    }
    $_SESSION['log'] = $log;
    header("Location: register.php");
    die();
}
else {
    echo "Invalid access";
}