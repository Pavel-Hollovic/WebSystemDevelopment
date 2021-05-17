<?php require_once "database.php";
$query = "SELECT * FROM jobs";
$result = $conn->query($query, PDO::FETCH_ASSOC);
?>


<?php require_once "header.php"; ?>


    <?php if(isset($_SESSION['company_id'])) { ?> 
        <a href="addform.php">Add new Job</a>
    <?php } ?> 
    

    <br>

    <h2>Job Vacancies:</h2>
    <div>
        <ul>
            <?php
            foreach($result as $row) {
                echo "<a href='job.php?id=" . $row[id] . "'><li>" . $row["title"] . "</a></li>"; 
            }
            ?>
        </ul>
    </div>

</body>
<?php require_once "cookieConsent.php";?>
</html>