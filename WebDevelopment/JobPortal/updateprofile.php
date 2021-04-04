<?php
require_once "database.php";
if(!isset($_SESSION['company_id'])) {
    header("Location: login.php");
    die();
}
$query = "SELECT * FROM Company";
$result = $conn->query($query, PDO::FETCH_ASSOC);
$companyId = $_SESSION['company_id'];
?>

<?php require_once "header.php"; ?>
<body>
    <h1>Update Your Info</h1>


<form   method="post" action="updateprofile_do.php" enctype="multipart/form-data" class="frmImageUpload">
        <label>Upload Image File:</label><br>
        <input name="logo" type="file" class="inputFile" /> 
        <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
</form>

<form method="post" action="updateprofile_do.php">
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone"
                       value="<?= $username; ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
</form>



</body>
</html>