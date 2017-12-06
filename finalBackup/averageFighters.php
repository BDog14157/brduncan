<?php

include 'dbConnectionCopy.php';
$conn = getDatabaseConnection();

    $sql = "SELECT AVG(damageRating) AS average
            FROM fighters
            WHERE 1";

    $stmt = $conn -> prepare ($sql);
    $stmt -> execute();
    $record = $stmt -> fetch(PDO::FETCH_ASSOC);

    echo json_encode($record);

?>