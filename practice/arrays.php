 <?php
    function displaySymbol($symbol){
        
        echo "<img src='../labs/lab2/img/$symbol.png' width='50' />";
        
    }
 
 
 
 
 
 
        
        $symbols = array("lemon", "orange", "cherry");  //initializes array with three items
        
        // print_r($symbols);  //displays all elements for debugging purposes
        // echo $symbols[0];
        
        
        $symbols[] = "bar"; //Adding new element at the end
        
       // displaySymbol($symbols[3]); //displays the bar
       
       array_push($symbols, "seven"); //adds seven to the end of the array
        
       // displaySymbol($symbols[4]); //displays the 7
       /* 
        for($i=0; $i<5; $i++){
        displaySymbol($symbols[$i]);
        echo"<br />";
        }
        */
       // $randomSymbol = rand(0,4);
       // displaySymbol($symbols[$randomSymbol]);
        //displaySymbol($symbols[array_rand($symbols)]);
        
       // $lastItem = array_pop($symbols); //retreives and REMOVES last item in array
      //  displaySymbol($lastitem);
        
      /*  print_r($symbols);
        
         echo "<hr> Before Sort <br />";
        sort($Symbols); //orders array elements alphabetically A-Z or 0-9
        rsort($Symbols); //orders array elements alphabetically Z-A or 9-0
        echo "<hr> After Sort <br />";
        print_r($symbols);
        
        shuffle($symbols);
        echo "<hr> After shuffle: <br />";
        print_r($symbols);
        */
        
        
        foreach($symbols as $symbol){
            displaySymbol($symbol);
        }
        
        
        ?>









<!DOCTYPE html>
<html>
    <head>
        <title> PHP Array Practice</title>
    </head>
    <body>
        
       
        
        
        
        
        
        
        
        

    </body>
</html>