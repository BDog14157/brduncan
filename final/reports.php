<?php
session_start(); //starts or resumes an existing session
include 'dbConnectionCopy.php';
$conn = getDatabaseConnection();

// if (isset($_GET['fighterDamage'])) { //Admin submitted Fighter Damage Form
//     echo "hello";
// }

    function fighterDamage(){
        global $conn;
        //echo("hello");
    
        
        $sql = "SELECT AVG(damageRating) average
            FROM fighters
            WHERE 1";
            
        
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // return $records;
    
  


    
    
    
    
    echo ("Average Damage of all fighters: " . $records['average'] . " ");
    echo "hello";
    print_r($records);
   
    }
    
    
    
    
    
    
?>




<!DOCTYPE html>
<html>
    <head>
        <title>Plane Compairson</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <style>
            h5{
                text-align: right;
            }
        </style>
    </head>
    
    <body>
        <h1>Generate Reports</h1>
        Click <a href="admin.php">Here</a> to return to the Admin page.
        <div id="showAvgPrice"></div>
        
        
         <fieldset>
            <!--<legend>Compare Aircraft!</legend>-->
            <form>
               <input type="submit" value="Average damage rating among fighters" name="fighterDamage">
            </form>
        </fieldset>
        <br /><br />
        
<?php
if (isset($_GET['fighterDamage'])) { //Admin submitted Fighter Damage Form
    fighterDamage();
}
    
?>

    </body>
</html>