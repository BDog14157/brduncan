<?php
session_start(); //starts or resumes an existing session
include 'dbConnectionCopy.php';
$conn = getDatabaseConnection();


    
    function comparePlanes(){
        global $conn;
        //echo("hello");
        
        
        $type = $_GET['type'];
        $goal = $_GET['goal'];
        
        if($goal == 'damageRating' || $goal == 'topSpeed' || $goal == 'bombLoad' ){
            $sql = "SELECT *
            FROM $type
            ORDER BY $goal DESC";
            //echo "want desc";
        } else {
        
        $sql = "SELECT *
            FROM $type
            ORDER BY $goal";
        }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // return $records;
   echo "      <table>
  <tr>
    <th>Name</th>
    <th>Nationality</th>
    <th>Top Speed</th>
    <th>Turn Speed</th>
    <th>Damage Rating</th>
    <th>Gun Count</th>
    <th>Bomb Load</th>
  </tr>
    ";
    foreach ($records as $record){
   
 echo (" <tr>
    <td>" . $record['name']. "</td>
    <td>" . $record['country']. "</td>
    <td>" . $record['topSpeed']. " kph</td>
    <td>" . $record['turnSpeed']. "s </td>
    <td>" . $record['damageRating']. "</td>
    <td>" . $record['gunCount']. "</td>
    <td>" . $record['bombLoad']. " lbs</td>
  </tr>
  ");

        //echo $record['name'] . " | " ;
    }
    
   echo " </table>";
    }
    
    
    
    
    
    
?>




<!DOCTYPE html>
<html>
    <head>
        <title>Plane Compairson</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <style>
            h5{
                text-align: right;
            }
        </style>
    </head>
    
    <body>
        <h1>Compare Aircraft!</h1>
        <h5><a href="index.php">User Login</a> / <a href="adminLogin.php">Admin Login</a></h5>
        
        
         <fieldset>
            <!--<legend>Compare Aircraft!</legend>-->
        <form method="get" id="myForm" name="myForm">
            
            Type: <select name="type">
        <option value="fighters">Fighters</option>
        <option value="attackers">Attackers</option>
        <option value="bombers">Bombers</option>
    </select>
     Goal: <select name="goal">
         
        <option value="damageRating">High Damage!</option>
        <option value="turnSpeed">Most Manueverable!</option>
        <option value="topSpeed">Best Top Speed!</option>
        <option value="bombLoad">Highest Bomb Weight!</option>
    </select>
            <input type="submit" value="Submit" name="submit"/>
        </form> 
        </fieldset>
        <br /><br />
        
<?php
if (!empty($_GET['type'])){
       // echo ("is set");
        comparePlanes();
    } else {
        //echo ("not set");
    }
    
?>

    </body>
    <footer>
        &copy; Brian Duncan
    </footer>
</html>