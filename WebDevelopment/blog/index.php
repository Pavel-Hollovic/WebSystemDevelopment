<?php
require_once "database.php";
$query = "SELECT * FROM blog";
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
    <h1>PAVEL'S BLOG</h1>

    <a href="addform.php">Add new article</a>

    <br>

    <h2>Articles:</h2>
    <div>
        <ul>
            <?php
            foreach($result as $row) {
                echo "<a href='article.php?id=" . $row[id] . "'><li>" . $row["title"] . "</a></li>"; 
            }
            ?>
        </ul>
    </div>
</body>
</html>