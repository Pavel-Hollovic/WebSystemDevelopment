<?php
require_once "database.php";
$id = filter_var($_GET['id'], FILTER_SANITIZE_STRING);
$query = "SELECT * FROM blog WHERE id='$id'";
$result = $conn->query($query, PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PavelsBlog</title>
    <style>
body {
  max-width: 500px;
  margin: auto;
}
</style>


</head>
<body>

    <a href="index.php">Back to articles selection</a>
    
    <div>
            <?php
            foreach($result as $row) {
                echo "<h1>" . $row["title"] . "</h1><p>" . $row["content"] . "</p";
                echo "<br> <hr> <a href='delete.php?id=" . $row[id] . "'>DELETE ARTICLE</a>"; 
            }
            ?>
    </div>

</body>
</html>