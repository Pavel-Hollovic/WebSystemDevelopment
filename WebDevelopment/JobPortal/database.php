<?php
session_start();

// db , username, password
$conn = new PDO("mysql:host=localhost;dbname=WebSysDev",
    "test", "test");

