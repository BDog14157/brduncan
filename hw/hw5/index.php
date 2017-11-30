<?php
session_start(); //starts or resumes an existing session
//print_r($_POST); //displays values passed from login form
//validates the username and password
include '../../dbConnection.php';
$conn = getDatabaseConnection();
$username = $_POST['username'];
$password = sha1($_POST['password']);
//echo $password;
//Following SQL works but it allows SQL Injection!!
// $sql = "SELECT *
//         FROM h_login
//         WHERE username = '$username' 
//         AND   password = '$password'";
        
$sql = "SELECT *
        FROM h_login
        WHERE username = :username 
        AND   password = :password";   
$namedParameters  = array();
$namedParameters[':username']  = $username;
$namedParameters[':password']  = $password;
$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC);
//print_r($record);
if (empty($record)) {
    
    if(isset($_POST['username'])){
    
  echo "Wrong credentials!";  
    }
} else {
    
    $_SESSION['username'] = $record['username'];
    $_SESSION['adminFullName'] = $record['firstName'] . " " . $record['lastName'];
   //echo $_SESSION['adminFullName'];
   //echo "Successful login!";
   header('Location: quiz.php'); //redirects users to admin page
   
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title> Lab 7: Admin Login</title>
    </head>
    <body>


        <h1> Login</h1>
        <h3> Username: user1 Password: user1 </h3>
        <h3> Username: user3 Password: user3 </h3>
        
        <form method="POST">
    
        Username: <input type="text" name="username"/> <br />
        Password: <input type="password" name="password"/> <br />
        <input type="submit" value="Login!" name="loginForm" />
            
        </form>


    </body>
</html>