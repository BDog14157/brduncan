<?php

function getDatabaseConnection($dbname = 'midterm'){
$host = 'localhost'; //cloud 9 database
//$dbname = 'midterm';
$username = 'root';
$password = '';
//creates database connection
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

//when connecting to heroku
    //when connecting from Heroku
    if  (strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $host = $url["host"];
        $dbname = substr($url["path"], 1);
        $username = $url["user"];
        $password = $url["pass"];
    } 



//we'll be able to see some errors with database
$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $dbConn;

}
?>