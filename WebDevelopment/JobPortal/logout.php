<?php require_once "database.php"; ?>
<?php
    unset($_SESSION['company_id']);
    unset($_SESSION['company_username']);
    header("Location: index.php");
    die();
?>