<?php

$host = 'localhost'; //cloud 9 database
$dbname = 'quotes';
$username = 'root';
$password = '';
//creates database connection
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

//we'll be able to see some errors with database
$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


function displayReflectionQuotes() {
    global $dbConn;
    
    $sql = "SELECT quote, firstName, lastName 
            FROM q_quote 
            NATURAL JOIN q_category 
            NATURAL JOIN q_cat_quote 
            NATURAL JOIN q_author 
            WHERE category = 'Reflection'";
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll();
    
    //print_r($records);
    
    foreach ($records as $record) {
        
        echo "<em>" . $record['quote'] . "  "  . $record['firstName'] . "  "  . $record['lastName'] . "<br />";
        
    }
    
}

//works but is very time consuming
function displayRandomQuote_NotEfficient() {
    global $dbConn;
    
    $sql = "SELECT quote FROM q_quote ";
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll();
    
    shuffle($records);
    
    echo $records[0]['quote'];
    
    // foreach ($records as $record) {
        
    //     echo "<em>" . $record['quote'] . "  "  . $record['firstName'] . "<br />";
        
    // }
    
}

function displayRandomQuote() {
    global $dbConn;
    
    //retrieve all quote IDs
    //select one quote id randomly
    //get the quote for quoteId
    
    $sql = "SELECT quoteId FROM `q_quote` WHERE 1";
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll();
    
  //  print_r($records);
    shuffle($records);
   // print_r($records);
   $quoteId1= $records[0]['quoteId'];
   
   print_r($quoteId1);
   
   $sql = "SELECT quote FROM `q_quote` WHERE quoteId=$quoteId1";
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records1 = $stmt->fetchAll();
   
    echo $records1;
    
    // foreach ($records as $record) {
        
    //     echo "<em>" . $record['quote'] . "  "  . $record['firstName'] . "  "  . $record['lastName'] . "<br />";
        
    // }
    
}

function displayMaleQuotes() {
    global $dbConn;
    
    $sql = "SELECT quote, firstName, lastName 
            FROM q_quote 
            NATURAL JOIN q_category 
            NATURAL JOIN q_cat_quote 
            NATURAL JOIN q_author 
            WHERE gender = 'm'
            ORDER BY lastName";
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll();
    
    //print_r($records);
    
    foreach ($records as $record) {
        
        echo "<em>" . $record['quote'] . "  "  . $record['firstName'] . "  "  . $record['lastName'] . "<br />";
        
    }
    
}

function displayLongestQuotes() {
    global $dbConn;
    
    $sql = "SELECT quote, firstName, lastName, category FROM q_quote 
    NATURAL JOIN q_category 
    NATURAL JOIN q_cat_quote 
    NATURAL JOIN q_author 
    WHERE 1 ORDER BY LENGTH(quote) DESC LIMIT 3";
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll();
    
    //print_r($records);
    
    foreach ($records as $record) {
        
        echo "<em>" . $record['quote'] . "  "  . $record['firstName'] . "  "  . $record['lastName'] . "<br />";
        
    }
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> SQL Joins </title>
    </head>
    <body>


    <h2> Reflection Quotes </h2>

    <?=displayReflectionQuotes()?>
    
    
    <h2>Quotes by male authors</h2>
    <?=displayMaleQuotes()?>
    
    <h2>Three Longest Quotes</h2>
    <?=displayLongestQuotes()?>
    
    <h2>Random Quote</h2>
    <?=displayRandomQuote()?>
    

    </body>
</html>