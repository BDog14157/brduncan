<!DOCTYPE html>
<html>
    
    <style>
        img {
       display: block;
    margin: auto;
    width: 50%;
   }
   form{
        display: block;
    margin: auto;
    width: 100%;
   }
   h1{
       text-align: center;
   }
    </style>
    
    <head>
        <title>Marvel Battle Royale Team Generator</title>
         <link href="css/styles.css" rel="stylesheet" type="text/css" />
        
    </head>
    
    
    <body>
        <img src="img/Marvel_logo.png" alt="Marvel Logo" style="float:center" />
        <h1>May the odds be ever in your favor.</h1>
         <form>
            <input type="submit" value="Generate Teams!"/>
        </form>
        
        <div id="main">
        
        <?php
        
        include 'inc/functions.php';
        
        play();
        
        ?>
        
        
        </div>
         

    </body>
</html>