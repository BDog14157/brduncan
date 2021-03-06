<?php
session_start();

//print_r($_SESSION);

if (!isset($_SESSION['username'])) { //if not set, it means that admin hasn't logged in
    
    header("Location: index.php"); //redirects users to login page
    exit;
    
}

function aircraftList(){
    include 'dbConnectionCopy.php';
    $conn = getDatabaseConnection();
    $sql = "SELECT *
            FROM fighters 
            WHERE 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $records;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Admin Section  </title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        Click <a href="compare.php">Here</a> to compare Aircraft.
        
        
        
        <script>

            function confirmDelete() {
                
                return confirm("Are you sure you want to delete this aircraft?");
                
                
            }            
            
        </script>
        
        <style>
            body{
    width: 40%;
    text-align: center;
    margin-left: 30%;
    margin-right: 30%;
}
        </style>
        
    </head>
    <body>

        <h1> ADMIN SECTION</h1>
        <h2> Welcome Admin!</h2>

<br ><br >

<!--<form action="addAuthor.php">-->
<!--    <input type="submit" value="Add New Author" />-->
<!--</form>-->

<form action="logout.php">
    <input type="submit" value="Logout" />
</form>
<form action="addAircraft.php">
    <input type="submit" value="Add new aircraft" />
</form>
<form action="reports.php">
    <input type="submit" value="Generate Reports" />
</form>


        <?php 
        
        $aircrafts =aircraftList();
        echo "      <table>
  <tr>
    <th>Update</th>
    <th>Delete</th>
    <th>Name</th>
    
  </tr>";
        
        foreach($aircrafts as $aircraft) {
            
             
            
            echo "<tr><td>[<a href='updateAircraft.php?aircraftId=".$aircraft['aircraftId']."'>Update</a>] </td>";
        
            
            echo "<td><form style='display:inline' action='deleteAircraft.php' onsubmit='return confirmDelete()'>
                    <input type='hidden' name='aircraftId' value='".$aircraft['aircraftId']."'>
                    <input type='submit' value='Delete'>
                  </form></td>";
            
            echo "<td> " . $aircraft['name'] . "  " . $aircraft['nationality'] . "<br></td></tr>";
        }
        
        echo "</table>";
        ?>

    </body>
   
</html>