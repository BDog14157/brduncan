<?php
session_start(); //starts or resumes an existing session
include 'dbConnectionCopy.php';
$conn = getDatabaseConnection();

// if (isset($_GET['fighterDamage'])) { //Admin submitted Fighter Damage Form
//     echo "hello";
// }

    function fighterDamage(){
        global $conn;
        
        $sql = "SELECT AVG(damageRating) average
            FROM fighters
            WHERE 1";
            
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $result = $records[0];
    echo ("Average Damage of all fighters: " . $result['average'] . " ");
    }
    
    function attackerDamage(){
        global $conn;
        
        $sql = "SELECT AVG(damageRating) average
            FROM attackers
            WHERE 1";
            
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $result = $records[0];
    echo ("Average Damage of all attackers: " . $result['average'] . " ");
    }
    
    function bomberDamage(){
        global $conn;
        
        $sql = "SELECT AVG(damageRating) average
            FROM bombers
            WHERE 1";
            
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $result = $records[0];
    echo ("Average Damage of all bombers: " . $result['average'] . " ");
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
            <?php
                if (isset($_GET['fighterDamage'])) { //Admin submitted Fighter Damage Form
                fighterDamage();
                }
            ?>
            
            <form>
               <input type="submit" value="Average damage rating among attackers" name="attackerDamage">
            </form>
            <?php
                if (isset($_GET['attackerDamage'])) { //Admin submitted Attacker Damage Form
                attackerDamage();
                }
            ?>
            
            <form>
               <input type="submit" value="Average damage rating among bombers" name="bomberDamage">
            </form>
            <?php
                if (isset($_GET['bomberDamage'])) { //Admin submitted Fighter Damage Form
                bomberDamage();
                }
            ?>
        </fieldset>
        <br /><br />
        


    </body>
    <footer>
        &copy; Brian Duncan
    </footer>
</html>