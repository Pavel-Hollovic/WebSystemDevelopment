<?php
require_once "database.php";
$id = filter_var($_GET['image_id'], FILTER_SANITIZE_STRING);
$query = "SELECT logo FROM Company WHERE id='$id'";

$result = $conn->query($query, PDO::FETCH_ASSOC);

foreach($result as $row) {
    header("Content-type: .png");
    echo $row["logo"];
}
?>