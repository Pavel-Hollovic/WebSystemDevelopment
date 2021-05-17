<?php
require_once "database.php";
if(!isset($_SESSION['company_id'])) {
    header("Location: login.php");
    die();
}
$query = "SELECT title FROM jobs";
$result = $conn->query($query, PDO::FETCH_ASSOC);
?>


<?php require_once "header.php"; ?>
<body>
    <h1>Add Job Post</h1>

<div>
    <form method="post" action="add.php">
        <input type="text" name="Title" placeholder="Title">
        <br>
        <label for="Category">Choose a job category:</label>
            <select name="Category" id="Category">
                <option value="Accounting">Accounting</option>
                <option value="Programing">Programing</option>
                <option value="Paramedic">Paramedic</option>
            </select>
        <br>
         <textarea rows = "5" cols = "60" name = "Description" placeholder="Enter the description here.."></textarea>
         <br>
        <input type="submit" name="Publish">
    </form>
</div>







</body>
</html>