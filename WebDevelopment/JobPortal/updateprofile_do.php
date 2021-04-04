<?php

require_once("database.php");
$companyId = $_SESSION['company_id'];

$logo = $_FILES['logo']['tmp_name'];

$sql = "UPDATE Company SET logo =  '" . addslashes(file_get_contents($logo)) . "' WHERE id = $companyId";
$conn->exec($sql);

header("Location: profile.php");