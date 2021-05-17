<?php require_once "database.php";

if(!isset($_SESSION['company_id'])) {
    header("Location: login.php");
    die();
}

$companyId = $_SESSION['company_id'];
$query = "SELECT * FROM jobs WHERE companyId = '$companyId'";
$result = $conn->query($query, PDO::FETCH_ASSOC);
$companyQuery = "SELECT * FROM Company WHERE id = '$companyId'";
$companyInfo = $conn->query($companyQuery, PDO::FETCH_ASSOC);
?>


<?php require_once "header.php";?>

<h2>My Profile:</h2>

<a href="updateprofile.php">Update profile</a><br>

<?php


foreach($companyInfo as $row) {
    echo "<img src=imageView.php?image_id=" . $row["id"] . " width='50' />" . "<br> Company Name: <b>" . $row["name"] . "</b><br> Company Address: <b>" . $row["city"] . "</b>";
}
?>



<h2>My job openings:</h2>

<a href="addform.php">Add new Job</a><br>
    <div>
        <ul>
            <?php
            foreach($result as $row) {
                echo "<a href='job.php?id=" . $row["id"] . "'><li>" . $row["title"] . "</a></li>"; 
            }
            ?>
        </ul>
    </div>
</body>
</html>