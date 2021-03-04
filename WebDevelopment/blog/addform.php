<?php
require_once "database.php";
$query = "SELECT title FROM blog";
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
    <h1>Add Article</h1>

    <a href="index.php">Go back to article selection</a>
<div>
    <form method="post" action="add.php">
        <input type="text" name="Title" placeholder="Title">
        <br>
         <textarea rows = "5" cols = "60" name = "Article" placeholder="Enter the text here.."></textarea>
         <br>
        <input type="submit" name="Publish">
    </form>
</div>







</body>
</html>