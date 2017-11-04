<?php

include '../../dbConnection.php';
$conn = getDatabaseConnection();

$sql = "DELETE FROM q_author WHERE authorId = " . $_GET['authorId'];

//echo $sql;

$stmt = $conn->prepare($sql);
$stmt->execute();

header('Location: admin.php');


?>