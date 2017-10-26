<?php
session_start(); //start or resume and existing session
//print_r($_POST); //displays values passed from login form

//validates the username and password
include '../../dbConnection.php';
$conn = getDatabaseConnection();

$username = $_POST['username'];
$password = sha1($_POST['password']);

//echo $password;

$sql = "SELECT *
        FROM q_admin
        WHERE username = '$username'
        AND   password = '$password'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$record = $stmt->fetch(PDO::FETCH_ASSOC);

//print_r($record);

if (empty($record)) {
    
  echo "Wrong credentials!";  
  
} else {
    
    $_SESSION['adminFullName'] = $record['firstName'] . " " . $record['lastName'];
    
    echo $_SESSION['adminFullName'];
    
    
   //echo "Successful login!";
   header('location: admin.php'); //redirects
}
