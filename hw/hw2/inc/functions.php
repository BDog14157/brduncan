<?php

    $characterNames = array("Iron Man", "Thor", "Loki", "Black Widow", "Spider Man", "Captain America", "Hulk", "Deadpool", "Wolverine", "Daredevil", "Iron Fist", "Quicksilver", "Black Panther", "Cyclops", 
    "Star Lord", "Mystique", "Storm", "Gamora", "Professor X", "Drax the Destroyer", "War Machine", "Ant Man", "Ultron", "Thanos", "Doctor Doom", "Red Skull", "Magneto", "Blackheart", "Kingpin", "Sandman",
    "Bucky Barnes", "Emma Frost");
    //print_r($characterNames);
    shuffle($characterNames);
   // echo "<br />";
    $loopPosition;
    $Team_1 = array();
    $Team_2;
    $Team_3;
    $Team_4;
    $Team_5;
    $Team_6;
    $Team_7;
    $Team_8;
    $Team_9;
    $Team_10;
    $Team_11;
    $Team_12;
    $Team_13;
    $Team_14;
    $Team_15;
    $Team_16;
   


    function play(){
        global $characterNames;
       // print_r($characterNames);
        generateTeams();       
    }
    
    function generateTeams(){
        global $Team_1;
        global $Team_2;
        global $Team_3;
        global $Team_4;
        global $Team_5;
        global $Team_6;
        global $Team_7;
        global $Team_8;
        global $Team_9;
        global $Team_10;
        global $Team_11;
        global $Team_12;
        global $Team_13;
        global $Team_14;
        global $Team_15;
        global $Team_16;
        global $characterNames;
        //print_r($Team_1);
        
        
        
      
        
        
        for($i=0;$i<2;$i++){
        $Team_1[] = array_pop($characterNames);
        echo "<br />";
        }
        for($i=0;$i<2;$i++){
        $Team_2[] = array_pop($characterNames);
        
        }
        for($i=0;$i<2;$i++){
        $Team_3[] = array_pop($characterNames);
        
        }
        for($i=0;$i<2;$i++){
        $Team_4[] = array_pop($characterNames);
        
        }for($i=0;$i<2;$i++){
        $Team_5[] = array_pop($characterNames);
        
        }
        for($i=0;$i<2;$i++){
        $Team_6[] = array_pop($characterNames);
        
        }
        for($i=0;$i<2;$i++){
        $Team_7[] = array_pop($characterNames);
        
        }
        for($i=0;$i<2;$i++){
        $Team_8[] = array_pop($characterNames);
        
        }
        for($i=0;$i<2;$i++){
        $Team_9[] = array_pop($characterNames);
        
        }
        for($i=0;$i<2;$i++){
        $Team_10[] = array_pop($characterNames);
        
        }
        for($i=0;$i<2;$i++){
        $Team_11[] = array_pop($characterNames);
       
        }
        for($i=0;$i<2;$i++){
        $Team_12[] = array_pop($characterNames);
        
        }for($i=0;$i<2;$i++){
        $Team_13[] = array_pop($characterNames);
        
        }
        for($i=0;$i<2;$i++){
        $Team_14[] = array_pop($characterNames);
        
        }
        for($i=0;$i<2;$i++){
        $Team_15[] = array_pop($characterNames);
        
        }
        for($i=0;$i<2;$i++){
        $Team_16[] = array_pop($characterNames);
        
        }
        
   // print_r($Team_1);
   // print_r($Team_10);
    //print_r($Team_16);
    //print_r($characterNames);
    
    
   echo" <style> ";
echo"table {";
  echo"  font-family: arial, sans-serif;";
  echo"  border-collapse: collapse;";
  echo"  width: 50%;";
  echo"  margin:auto";
echo"}";

echo"td, th {";
 echo"   border: 1px solid #dddddd;";
 echo"   text-align: left;";
 echo"   padding: 8px;";
echo"}";

echo"tr:nth-child(even) {";
 echo"   background-color: #dddddd;";
echo"}";
echo"</style>";
    
    
    
    
 
   echo" <table>";
  echo"<tr>";
    echo"<th>Team Number</th>";
    echo"<th>Team Members</th>";
  echo"</tr>";
  
  echo"<tr>";
   echo" <td>Team 1</td>";
   echo" <td>$Team_1[0] & $Team_1[1]</td>";
 echo" </tr>";
  echo"<tr>";
   echo" <td>Team 2</td>";
   echo" <td>$Team_2[0] & $Team_2[1]</td>";
  echo"</tr>";
 echo" <tr>";
   echo" <td>Team 3</td>";
  echo"  <td>$Team_3[0] & $Team_3[1]</td>";
 echo" </tr>";
 echo" <tr>";
   echo" <td>Team 4</td>";
   echo" <td>$Team_4[0] & $Team_4[1]</td>";
 echo" </tr>";
 echo" <tr>";
   echo" <td>Team 5</td>";
  echo"  <td>$Team_5[0] & $Team_5[1]</td>";
 echo" </tr>";
 echo"<tr>";
   echo" <td>Team 6</td>";
   echo" <td>$Team_6[0] & $Team_6[1]</td>";
echo"  </tr>";

 echo"<tr>";
   echo" <td>Team 7</td>";
   echo" <td>$Team_7[0] & $Team_7[1]</td>";
 echo" </tr>";
  echo"<tr>";
   echo" <td>Team 8</td>";
   echo" <td>$Team_8[0] & $Team_8[1]</td>";
  echo"</tr>";
 echo" <tr>";
   echo" <td>Team 9</td>";
  echo"  <td>$Team_9[0] & $Team_9[1]</td>";
 echo" </tr>";
 echo" <tr>";
   echo" <td>Team 10</td>";
   echo" <td>$Team_10[0] & $Team_10[1]</td>";
 echo" </tr>";
 echo" <tr>";
   echo" <td>Team 11</td>";
  echo"  <td>$Team_11[0] & $Team_11[1]</td>";
 echo" </tr>";
 echo"<tr>";
   echo" <td>Team 12</td>";
   echo" <td>$Team_12[0] & $Team_12[1]</td>";
echo"  </tr>";
 echo" <tr>";
   echo" <td>Team 13</td>";
   echo" <td>$Team_13[0] & $Team_13[1]</td>";
 echo" </tr>";
 echo" <tr>";
   echo" <td>Team 14</td>";
  echo"  <td>$Team_14[0] & $Team_14[1]</td>";
 echo" </tr>";
 echo"<tr>";
   echo" <td>Team 15</td>";
   echo" <td>$Team_15[0] & $Team_15[1]</td>";
   echo" </tr>";
   echo" <tr>";
   echo" <td>Team 16</td>";
  echo"  <td>$Team_16[0] & $Team_16[1]</td>";
 echo" </tr>";
echo"</table>";
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    }
    










?>






<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

    </body>
</html>