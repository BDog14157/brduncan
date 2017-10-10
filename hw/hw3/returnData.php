<!DOCTYPE html>
<html>
    <head>
        <title>Encrypted Message</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div>
        <h1>Below is your encrypted message.</h1> <br>
        
        <?php
        
        $abc = $_GET["userTxt"];
        
        $new_String = str_replace("a", $_GET["vowel"], $abc);
        $new_String = str_replace("e", $_GET["vowel"], $new_String);
        $new_String = str_replace("i", $_GET["vowel"], $new_String);
        $new_String = str_replace("o", $_GET["vowel"], $new_String);
        $new_String = str_replace("u", $_GET["vowel"], $new_String);
        $new_String = str_replace("y", $_GET["vowel"], $new_String);
        
        echo "Your new message: <strong>" . $new_String . "</strong>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "Thank you for rating our app " . $_GET["rating"] . " stars! <br>";
        
        if ($_GET["reccomended"] == "y"){
            echo "Thanks a bunch for reccomending us!";
        } else {
            echo "We are sad that you won't reccomend us. Please place your complaints in the nearest trash bin.";
        }
        
        ?>
        
        
        
        <br />
        
        Click submit to go back: <br >
        <form action="index.php">
            <input type="submit">
        </form>
        
   </div>
        

    </body>
</html>