<?php

include 'dbConnectionCopy.php';
$conn = getDatabaseConnection();

$sql = "DELETE FROM fighters WHERE aircraftId = " . $_GET['aircraftId'];

//echo $sql;

$stmt = $conn->prepare($sql);
$stmt->execute();

header('Location: admin.php');


?>