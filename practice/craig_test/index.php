<!DOCTYPE html>
<html>
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>History of Fort Ord Quiz</title>
         <style>@import url("css/style.css");</style>
        <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
    </head>
    <body>
        
        <div class="container" id="spacing">
        <div class="row">
         <div class="col-sm-2" "col-xs-1"></div>    
        <div class="col-sm-8" "col-xs-10" id="quiz">
        <h1>History of Fort Ord Quiz</h1>
       <?php
       
       ?>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <span class="questions"> 1) Fill in the blank: Fort Ord opened as a <input type="text" name="answer1" value="<?php echo $answer1;?>"> training base for infantry troops.<br></span>
          <?php
            if(isset($_POST['answer1'])){
            
                
                if($_POST["answer1"]=="military"){
                    echo "Correct!</br>";
                }
            
                else{
                    
                    if(empty($_POST['answer1'])){
                        echo "This box was left empty. Please try again.</br>";
                    }
                     else{
                        echo "<span class='incorrect'>Incorrect. Try again!</span></br>";
                    }
            
                }
            }
        ?>
          
          <span class="questions"> 2) What year did Fort Ord close?<br></span>
              <input type="radio" name="answer2" value="1987"> 1987<br>
              <input type="radio" name="answer2" value="1990"> 1990<br>
              <input type="radio" name="answer2" value="1991"> 1991<br>
              <input type="radio" name="answer2" value="1994"> 1994<br>
              
            <?php
                if(isset($_POST['answer2'])){
            
                
                if($_POST["answer2"]=="1994"){
                    echo "Correct!</br>";
                }
            
                else{
                    
                    if(empty($_POST['answer2'])){
                        echo "This question was left empty. Please fill in a bubble.";
                    }
                     else{
                        echo "<span class='incorrect'>Incorrect. Try again!</span></br>";
                    }
            
                }
            }
              ?>
              
          <span class="questions"> 3) Check the boxes of people who served or lived at Fort Ord:</br></span>
              <input type="checkbox" name="answer30" value="checked"> Clint Eastwood</br>
              <?php
              //displaying if checkbox checked is correct
                if(($_POST['answer30'])=='checked'){
                    echo "Correct! <br>";
                } else {
                    echo "Incorrect<br>";
                }
                ?>
              <input type="checkbox" name="answer31" value="checked"> Jimi Hendrix</br>
              <?php
              if(($_POST['answer31'])=='checked'){
                    echo "Correct!<br>";
                } else {
                    echo "Incorrect<br>";
                }
                ?>
              <input type="checkbox" name="answer32" value="checked"> Jerry Garcia</br>
              <?php
              if(($_POST['answer32'])=='checked'){
                    echo "Correct!<br>";
                } else {
                    echo "Incorrect<br>";
                }
                ?>
              <input type="checkbox" name="answer33" value="checked"> Bill Clinton</br>
              <?php
              if(($_POST['answer33'])=='checked'){
                    echo "Incorrect<br>";
                } else {
                    echo "Correct!<br>";
                }
                ?>
              <input type='checkbox' name="answer34" value="checked"> Joe DiMaggio</br>
              <?php
              if(($_POST['answer34'])=='checked'){
                    echo "Correct!<br>";
                } else {
                    echo "Incorrect<br>";
                }
                ?>
              <input type="checkbox" name='answer35' value='checked'> Bill O'reily</br>
              <?php
              if(($_POST['answer35'])=='checked'){
                    echo "Incorrect";
                } else {
                    echo "Correct!<";
                }
                ?>
                <br />
           <?php /* 
            if(isset($_POST['answer3'])){
                    
                    if(empty($_POST['answer3[]'])){
                        echo "This question was left empty. Please try again.";
                    }
            
                
            } */ 
            ?>
            
          <span class="questions"> 4) During what war did Fort Ord become the leading training center in the US?<br></span>
              <input type="radio" name="answer4" value="World War I"> World War I<br>
              <input type="radio" name="answer4" value="Korean War"> Korean War<br>
              <input type="radio" name="answer4" value="Vietnam War"> Vietnam War<br>
              <input type="radio" name="answer4" value="Iraq War"> Iraq War<br>
              
            <?php
            answer4();
              /*if(isset($_POST['answer4'])){
            
                
                if($_POST['answer4']=="Vietnam War"){
                    echo "Correct!</br>";
                }
            
                else{
                    
                    if(($_POST['answer4'])==''){
                        echo "This question was left empty. Please fill in a bubble.";
                    }
                     else{
                        echo "<span class='incorrect'>Incorrect. Try again!</span></br>";
                    }
            
                }
            }
            else if(empty($_POST['answer4'])){
                        echo "This question was left empty. Please fill in a bubble.";
                    }*/
            
            ?>
          <input type="submit" value="Submit" >
          
          <?php
          
          function answer4(){
              
              if(isset($_POST['answer4'])){
            
                
                if($_POST['answer4']=="Vietnam War"){
                    echo "Correct!</br>";
                }
            
                else{
                    
                    if(!isset($_POST['answer4'])){
                        echo "This question was left empty. Please fill in a bubble.";
                    }
                     else{
                        echo "<span class='incorrect'>Incorrect. Try again!</span></br>";
                    }
            
                }
            }
            
            
            
          }
          
          
            ?>
          <input type="submit" value="Submit" >
          
        </form>
        </div>
         <div class="col-sm-2" "col-xs-1"></div>  
        </div>
        </div>
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>