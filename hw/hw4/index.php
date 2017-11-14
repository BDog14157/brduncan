<!DOCTYPE html>
<html>
    <head>
        <title>Homework 3</title>
        
        <style>
            #q4Fail{
                background-color:red;
                color: white;
            }
            
            #q4Succeed{
                background-color:green;
                color: white;
            }
            #q5Fail{
                background-color:red;
                color: white;
            }
            
            #q5Succeed{
                background-color:green;
                color: white;
            }
            
            
            #q6Succeed{
                background-color:green;
                color: white;
            }
        </style>
        
        
        <script>
            
            var score = 0;
            function checkAnswers(){
                if (document.forms["myForm"]["heavyTanks"].value === "maus"){
                    //alert("Q1: correct!");
                    
                    
                    q1.innerHTML = "&#10004 Correct!";
                    q1.style.backgroundColor = 'green';
                    q1.style.color = 'white';
                    score++;
                } else {
                    q1.innerHTML = "&#10008 Sorry! The correct answer was: Panzerkampfwagen VIII Maus";
                    q1.style.backgroundColor = 'red';
                    q1.style.color = 'white';
                }
                
                if (document.forms["myForm"]["gunSize"].value === "y"){
                    //alert("Q2: correct!");
                    q2.innerHTML = "&#10004 Correct!";
                    q2.style.backgroundColor = 'green';
                    q2.style.color = 'white';
                    score++;
                } else {
                    q2.innerHTML = "&#10008 Sorry! The correct answer was: 15 cm KwK 44 L/38";
                    q2.style.backgroundColor = 'red';
                    q2.style.color = 'white';
                }
                
                if (document.forms["myForm"]["interest"].value === "y"){
                    //alert("Q3: correct!");
                    q3.innerHTML = "&#10004 Correct!";
                    q3.style.backgroundColor = 'green';
                    q3.style.color = 'white';
                    score++;
                } else {
                    q3.innerHTML = "&#10008 Sorry! The correct answer was: Yes!";
                    q3.style.backgroundColor = 'red';
                    q3.style.color = 'white';
                }
                
                //alert(score);
                //  scores.innerHTML = "Your score was: " + score;
                //  scores.style.backgroundColor = 'red';
                    
                score = 0;
            }
        </script>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            var secondScore = 0;
            function secondCheck(){
                var lengthValues = $( "#length" ).val();
                var innovationValues = $("input[name='innovation']:checked").val();
                var nameValues = $( "#name" ).val();
                
                
                if(lengthValues=="y"){
                $('#q4Succeed').show();
                $('#q4Fail').hide();
                secondScore++;
                } else {
                    $('#q4Fail').show();
                    $('#q4Succeed').hide();
                }
                
                if(innovationValues=="y"){
                $('#q5Succeed').show();
                $('#q5Fail').hide();
                secondScore++;
                } else {
                    $('#q5Fail').show();
                    $('#q5Succeed').hide();
                }
                
                $('#q6Succeed').show();
                secondScore++;
                //alert(secondScore);
                //alert(score);
                
               secondScore = 0; 
            }
            
        </script>
        
        <script language="javascript">
        function thirdCheck(){
            var score = 0;
            if (document.forms["myForm"]["heavyTanks"].value === "maus"){
                score = score+1;
            }
            if (document.forms["myForm"]["gunSize"].value === "y"){
                score = score+1;
            }
            
            if (document.forms["myForm"]["interest"].value === "y"){
             score = score + 1;   
            }
            if (document.forms["myForm"]["length"].value === "y"){
             score = score + 1;   
            }
            if (document.forms["myForm"]["innovation"].value === "y"){
             score = score + 1;   
            }
            score = score + 1;
            //alert("score = " + score);
            
            if(score<=3){
                scores.innerHTML = "Your score was: " + score + "/6";
                scores.style.backgroundColor = 'red';
                scores.style.color = 'white';
            } else if(score == 6){
                scores.innerHTML = "Congrats! You got 100%!";
                scores.style.backgroundColor = 'green';
                scores.style.color = 'white';
            } else {
                scores.innerHTML = "Your score was: " + score + "/6";
                scores.style.backgroundColor = 'green';
                scores.style.color = 'white';
            }
                 
            score = 0;
        }
        </script>
        
        
        
    </head>
    <body>
        
        
        <h1> Please answer the following questions about tanks.</h1>
        <form name="myForm" id="myForm" action="" method="get">
            <br>
            
            <h2>What was the heaviest tank ever produced?</h2>
            <select name="heavyTanks">
                <option value="e-100">Panzerkampfwagen E-100</option>
                <option value="maus">Panzerkampfwagen VIII Maus</option>
                <option value="T28">T28 Super Heavy Tank</option>
                <option value="amx">AMX tracteur C</option>
            </select>
            
            <p id="q1"></p>
            
            <h2>What size cannon did the Panzerkampfwagen E-100 have?</h2>
            
            <input type="radio" name="gunSize" value="n"> 105 mm howitzer M4<br>
            <input type="radio" name="gunSize" value="y"> 15 cm KwK 44 L/38<br> 
            <input type="radio" name="gunSize" value=n""> 12.8 cm KwK 44 L/55<br> 
            <input type="radio" name="gunSize" value="n"> 76.2 mm M1941 ZiS-5 gun<br>
            
            <p id="q2"></p>
            
            <h2>Do you find this quiz interesting?</h2>
            <select name="interest">
                <option value="y">Yes!</option>
                <option value="y">Yes!</option>
                <option value="y">Yes!</option>
                <option value="n">No!</option>
            </select> <br>
            
            <p id="q3"></p>
            
            
            <h2>How long was the TOG II?</h2>
            <select name="length" id="length">
                <option value="n">43 ft 5 in</option>
                <option value="n">36 ft 9 in</option>
                <option value="y">33 ft 3 in</option>
                <option value="n">28 ft 7 in</option>
            </select> <br>
            
            <div id="q4Fail">
                &#10008 Sorry! The correct answer was: 33 ft 3 in
            </div>
            <div id="q4Succeed">
                &#10004 Correct!
            </div>
            
            <h2>During World War II, which country was the most innovative with tank design?</h2>
            
            <input type="radio" name="innovation" id="innovation" value="n">France<br>
            <input type="radio" name="innovation" id="innovation" value="n">America<br> 
            <input type="radio" name="innovation" id="innovation" value="n">Britain<br> 
            <input type="radio" name="innovation" id="innovation" value="y">Germany<br>
            
            <div id="q5Fail">
                &#10008 Sorry! The correct answer was: Germany
            </div>
            <div id="q5Succeed">
               &#10004 Correct!
            </div>
            
            <h2>Free point, what is your name?</h2>
            <input type="text" name="name" id="name"> <br>
            
            <div id="q6Succeed">
               &#10004 Correct! (probably)
            </div>
            <br>
            
            
            <input type="button" value="Check Answers" onClick="checkAnswers();secondCheck();thirdCheck()">
            
            <p id="scores"></p>
            
        </form>

    </body>
    
    <script>
            $('#q4Succeed').hide();
            $('#q4Fail').hide();
            $('#q5Succeed').hide();
            $('#q5Fail').hide();
            $('#q6Succeed').hide();
           
        </script>
</html>