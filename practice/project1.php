
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Billiards!</title>
  
  <style>
	td {
		font-size: 1.8em;
	}

	#wrapper {
		margin: 0 auto;
		width: 800px;
		text-align: center;
	}
  </style>
</head>

<body>
  <div id="wrapper">
    <div id="directions">
    	
    	<h3> Billiards!</h3>
    	<strong> Customize Output!</strong>
    	<form method='get'>
    		
    		
    		
    		Select Table Width:
    		<select name="tableWidth">
    			<option value="1">1</option>
    			<option value="2">2</option>
    			<option value="3">3</option>
    			<option value="4">4</option>
    			
    		</select>
    		<br /><br />
    		Select Table Height: <input type="text" name="tableHeight" value="">
    		<br /><br />
    		Include 8 ball?: <br />
    		
  <input type="radio" name="8ball" value="true" checked> yes<br>
  <input type="radio" name="8ball" value="false" checked> No<br>
  

Order Balls? <br />
		
  <input type="radio" name="order" value="ascending" checked> ascending<br>
  <input type="radio" name="order" value="descending" checked> descending<br>
  

			<input type="submit" value="Display!" name="submit" />
			</form>
			
			

			
			
						
      </div>
   </div>
   
   <?php
   $tableHeight = $_GET['tableHeight'];
   $tableWidth = $_GET['tableWidth'];
  // echo"$tableHeight";
   // echo"$tableWidth";
   $pics = array("0.png", "1.png", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png", "8.png", "9.png", "10.png");
   $shuffledPics = array("0.png", "1.png", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png", "8.png", "9.png", "10.png");;
   shuffle($shuffledPics);
   
   
  // echo "$shuffledPics[1]";
   
 echo" <table border='1'>
  <tbody>
    <tr>";
    if($shuffledPics[0] == "0.png" || $shuffledPics[0] == "2.png" || $shuffledPics[0] == "4.png" || $shuffledPics[0] == "6.png" || $shuffledPics[0] == "8.png" || $shuffledPics[0] == "10.png"){
        
       echo" <td bgcolor='yellow'><img src='billiards/$shuffledPics[0]'></td>";
    } else {
        echo" <td bgcolor='green'><img src='billiards/$shuffledPics[0]'></td>";
    }
    if($shuffledPics[1] == "0.png" || $shuffledPics[1] == "2.png" || $shuffledPics[1] == "4.png" || $shuffledPics[1] == "6.png" || $shuffledPics[1] == "8.png" || $shuffledPics[1] == "10.png"){
       
       echo" <td bgcolor='yellow'><img src='billiards/$shuffledPics[1]'></td>";
    } else {
        echo" <td bgcolor='green'><img src='billiards/$shuffledPics[1]'></td>";
    }
    if($shuffledPics[2] == "0.png" || $shuffledPics[2] == "2.png" || $shuffledPics[2] == "4.png" || $shuffledPics[2] == "6.png" || $shuffledPics[2] == "8.png" || $shuffledPics[2] == "10.png"){
       
       echo" <td bgcolor='yellow'><img src='billiards/$shuffledPics[2]'></td>";
    } else {
        echo" <td bgcolor='green'><img src='billiards/$shuffledPics[2]'></td>";
    }
    echo "

    </tr>
    <tr>
    ";
      if($shuffledPics[3] == "0.png" || $shuffledPics[3] == "2.png" || $shuffledPics[3] == "4.png" || $shuffledPics[3] == "6.png" || $shuffledPics[3] == "8.png" || $shuffledPics[3] == "10.png"){
       
       echo" <td bgcolor='yellow'><img src='billiards/$shuffledPics[3]'></td>";
    } else {
        echo" <td bgcolor='green'><img src='billiards/$shuffledPics[3]'></td>";
    }
    if($shuffledPics[4] == "0.png" || $shuffledPics[4] == "2.png" || $shuffledPics[4] == "4.png" || $shuffledPics[4] == "6.png" || $shuffledPics[4] == "8.png" || $shuffledPics[4] == "10.png"){
       
       echo" <td bgcolor='yellow'><img src='billiards/$shuffledPics[4]'></td>";
    } else {
        echo" <td bgcolor='green'><img src='billiards/$shuffledPics[4]'></td>";
    }
    if($shuffledPics[5] == "0.png" || $shuffledPics[5] == "2.png" || $shuffledPics[5] == "4.png" || $shuffledPics[25] == "6.png" || $shuffledPics[5] == "8.png" || $shuffledPics[5] == "10.png"){
       
       echo" <td bgcolor='yellow'><img src='billiards/$shuffledPics[5]'></td>";
    } else {
        echo" <td bgcolor='green'><img src='billiards/$shuffledPics[5]'></td>";
    }
   echo" </tr>
    <tr> ";
      if($shuffledPics[6] == "0.png" || $shuffledPics[6] == "2.png" || $shuffledPics[6] == "4.png" || $shuffledPics[6] == "6.png" || $shuffledPics[6] == "8.png" || $shuffledPics[6] == "10.png"){
        
       echo" <td bgcolor='yellow'><img src='billiards/$shuffledPics[6]'></td>";
    } else {
        echo" <td bgcolor='green'><img src='billiards/$shuffledPics[6]'></td>";
    }
    if($shuffledPics[7] == "0.png" || $shuffledPics[7] == "2.png" || $shuffledPics[7] == "4.png" || $shuffledPics[7] == "6.png" || $shuffledPics[7] == "8.png" || $shuffledPics[7] == "10.png"){
       
       echo" <td bgcolor='yellow'><img src='billiards/$shuffledPics[7]'></td>";
    } else {
        echo" <td bgcolor='green'><img src='billiards/$shuffledPics[7]'></td>";
    }
    if($shuffledPics[8] == "0.png" || $shuffledPics[8] == "2.png" || $shuffledPics[8] == "4.png" || $shuffledPics[8] == "6.png" || $shuffledPics[8] == "8.png" || $shuffledPics[8] == "10.png"){
        
       echo" <td bgcolor='yellow'><img src='billiards/$shuffledPics[8]'></td>";
    } else {
        echo" <td bgcolor='green'><img src='billiards/$shuffledPics[8]'></td>";
    }
 echo"   </tr>
  </tbody>
</table>
   ";
   
   ?>
   
   <h4>It is now 2:30 and I am stopping, I did not complete this assignment because of a bug that took me the better part of 45 minutes to figure out and fix. Given another half hour, until 3, I would have been able to finish at least 2 more parts of this.</h4>
   
   
   
   
   
   


</body>

</html>