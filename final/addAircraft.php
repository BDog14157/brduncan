<?php

 
 if (isset($_GET['addForm'])) { //checks if form was submitted
     
     include 'dbConnectionCopy.php';
     $conn = getDatabaseConnection();
     
     //echo "Form was submitted!";
     $sql = "INSERT INTO fighters
            (name, country, topSpeed, turnSpeed, damageRating, gunCount, bombLoad)
            VALUES 
            (:name, :country, :topSpeed, :turnSpeed, :damageRating, :gunCount, :bombLoad)";
     $np = array();
     $np[":name"]  = $_GET['name'];
     $np[":country"]  = $_GET['country'];
     $np[":topSpeed"]  = $_GET['topSpeed'];
     $np[":turnSpeed"]  = $_GET['turnSpeed'];
     $np[":damageRating"]  = $_GET['damageRating'];
     $np[":gunCount"]  = $_GET['gunCount'];
     $np[":bombLoad"]  = $_GET['bombLoad'];
     
     $stmt = $conn->prepare($sql);
     $stmt->execute($np);
     
     echo "Aircraft added!";
     
 }


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Adding New Aircraft</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <h1> Add New Aircraft </h1>
        Click <a href="admin.php">Here</a> to go back to Admin page.
        
        <fieldset>
            
            <legend> Adding New Fighter </legend>
            
            <form>
                
                Name: <input type="text" name="name"/> <br />
                Country: <input type="text" name="country"/> <br />
                Top Speed: <input type="text" name="topSpeed"/> <br />
                Turn Speed: <input type="text" name="turnSpeed"/> <br />
                Damage Rating: <input type="text" name="damageRating"/> <br />
                Gun Count: <input type="text" name="gunCount"/> <br />
                Bomb Load: <input type="text" name="bombLoad"/> <br />
                
                
                <input type="submit" value="Add Aircraft" name="addForm">
            </form>
            
        </fieldset>
    </body>
    <footer>
        &copy; Brian Duncan
    </footer>
</html>