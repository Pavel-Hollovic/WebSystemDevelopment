<?php
require_once "database.php";
$id = filter_var($_GET['id'], FILTER_SANITIZE_STRING);
$query = "SELECT jb.id, jb.title, jb.category, jb.description, jb.companyId, cm.name FROM jobs jb LEFT JOIN Company cm ON cm.id = jb.companyId WHERE jb.id='$id'";

$result = $conn->query($query, PDO::FETCH_ASSOC);
?>


<?php require_once "header.php"; ?>
<body>
    <div>
            <?php
            foreach($result as $row) {
                echo "<img src=imageView.php?image_id=" . $row["companyId"] . " width='100' />" . "<br> post by " . $row["name"];
                echo "<h1>" . $row["title"] . "</h1><h3>" . $row["category"] . "</h3><p>" . $row["description"] . "</p>";

                if ($row["companyId"] == $_SESSION['company_id']) {echo "<br> <hr> <a href='delete.php?id=" . $row[id] . "'>DELETE JOB POST</a>";}
                }
            ?>
    </div>

</body>
