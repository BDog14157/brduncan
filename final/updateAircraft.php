<?php

session_start();

if (!isset($_SESSION['username'])) { //checks whether admin has already logged in
    
    header("Location: index.php");
    exit;
    
}

include 'dbConnectionCopy.php';
$conn = getDatabaseConnection();

function getAircraftInfo() {
    global $conn;
        
    $sql = "SELECT *
            FROM fighters
            WHERE aircraftId = " . $_GET['aircraftId'];    
     
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
    $record = $stmt->fetch(PDO::FETCH_ASSOC);  
    return $record;
}

if (isset($_GET['updateForm'])) { //Admin submitted update form
    
    //echo "Update form was submitted!";
    
    $sql = "UPDATE fighters SET 
	            name = :name,
	            country = :country,
	            topSpeed = :topSpeed,
	            turnSpeed = :turnSpeed,
	            damageRating = :damageRating,
	            bombLoad = :bombLoad,
	            gunCount = :gunCount
            WHERE aircraftId = :aircraftId";
    
    $namedParameters = array();
    $namedParameters[':name'] = $_GET['name'];
    $namedParameters[':country'] = $_GET['country'];
    $namedParameters[':topSpeed'] = $_GET['topSpeed'];
    
    $namedParameters[':turnSpeed'] = $_GET['turnSpeed'];
    $namedParameters[':damageRating'] = $_GET['damageRating'];
    $namedParameters[':bombLoad'] = $_GET['bombLoad'];
    
    $namedParameters[':gunCount'] = $_GET['gunCount'];
    $namedParameters[':aircraftId'] = $_GET['aircraftId'];
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
    echo "Record was updated!";

    
}


if (isset($_GET['aircraftId'])) {
    
    $aircraftInfo = getAircraftInfo();  
    
    //print_r($aircraftInfo);
    
}




?>


<!DOCTYPE html>
<html>
    <head>
        <title> Update aircraft's Info </title>
    </head>
    <body>

        <h1> Updating aircraft's Info </h1>
        Click <a href="admin.php">Here</a> to go back to Admin page.
        
        <fieldset>
            
            <legend> Updating Aircraft </legend>
            
            <form>
                
                
                 <input type="hidden" name="aircraftId" value="<?=$aircraftInfo['aircraftId']?>">
                 
                 Name: <input type="text" name="name" value="<?=$aircraftInfo['name']?>" /> <br />
                 
                Country: <input type="text" name="country" value="<?=$aircraftInfo['country']?>" /> <br />
                Top Speed: <input type="text" name="topSpeed" value="<?=$aircraftInfo['topSpeed']?>"/> <br />
                
                Turn Speed: <input type="text" name="turnSpeed" value="<?=$aircraftInfo['turnSpeed']?>" /> <br />
                Damage Rating: <input type="text" name="damageRating" value="<?=$aircraftInfo['damageRating']?>"/> <br />
                
                Gun Count: <input type="text" name="gunCount" value="<?=$aircraftInfo['gunCount']?>" /> <br />
                Bomb Load: <input type="text" name="bombLoad" value="<?=$aircraftInfo['bombLoad']?>"/> <br />
               
                <input type="submit" value="Update aircraft" name="updateForm">
            </form>
            
        </fieldset>
        
    </body>
</html>