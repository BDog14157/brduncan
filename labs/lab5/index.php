<?php

$host = 'localhost'; //cloud 9 database
$dbname = 'quotes';
$username = 'root';
$password = '';
//creates database connection
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

//we'll be able to see some errors with database
$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function getAllQuotes() {
    
    global $dbConn;
    
    $sql = "SELECT quote FROM q_quotes WHERE 1";
    
    $stmt = $dbConn -> prepare ($sql);
    
    $stmt -> execute();
    
    $records = $stmt -> fetchAll();  //retrieves all records;
    
    foreach($records as $record) {
        
        echo $record['quote'] .  "<br />";
        
    }

}

function getMaleAuthors() {
    
    global $dbConn;
    
    $sql = "SELECT firstName, lastName, gender FROM q_author WHERE gender = 'M'";
    
    $stmt = $dbConn -> prepare ($sql);
    
    $stmt -> execute();
    
    $records = $stmt -> fetchAll();  //retrieves all records;
    
    foreach($records as $record) {
        
        echo $record['firstName'] . "  " . $record['lastName'] . "<br />";
        
    }

}
//print_r($records);

// while ($row = $stmt -> fetch())  {
//     echo  $row['firstName'] . ", " . $row['lastName'] .  " " . $row['gender'] . "<br />";
// }


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 5: Random Famous Quote Generator </title>
    </head>
    <body>

<h1> Male Authors </h1>
<?=getMaleAuthors()?>

<h1> All Quotes </h1>
<?=getAllQuotes()?>


    </body>
</html>