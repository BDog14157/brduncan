<!DOCTYPE html>
<html>
    <head>
        <title> Super Secret Encryption Method </title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        
        <!--this SHOULD work with POST method but does not. gotta figure out why.-->
        
        <h1>We will encrypt your information by changing all your vowels into one vowel.</h1>
        
        <div>
        <form action="returnData.php" method="get" name="enterData">
            
            Type your normal message here: <input required type="text" name="userTxt"><br />
            
            Choose what vowel you would like to use: 
            <select required name="vowel">
                <option value="a">A</option>
                <option value="e">E</option>
                <option value="i">I</option>
                <option value="o">O</option>
                <option value="u">U</option>
            </select>
            
            How would you rate this app? <br>
            <input required type="radio" name="rating" value="1"> 1 Star!<br>
            <input required type="radio" name="rating" value="2"> 2 Stars!<br>
            <input required type="radio" name="rating" value="3"> 3 Stars!<br>
            <input required type="radio" name="rating" value="4"> 4 Stars!<br>
            <input required type="radio" name="rating" value="5"> 5 Stars! <br>
            
            Would you reccomend a friend to use this app? <br>
            <input required type="radio" name="reccomended" value="y"> Yes!<br>
            <input required type="radio" name="reccomended" value="n"> No!
            
            <br />
            <input type="submit">
            
        </form>
        </div>
        <br />
        <br />
        
      
        
        
        
        
        
        
        
        
        
        
        

    </body>
</html>