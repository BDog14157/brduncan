<!DOCTYPE html>
<html>
    <head>
        <title>Lab 6: Quote Finder</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
    </head>
    <header>
        <h1>Quote Finder</h1>
    </header>


<?php

   include '../../dbConnection.php';
   $conn = getDatabaseConnection();
   
   function displayCountryOptions() {
       global $conn;
       $sql = "SELECT DISTINCT(country) 
                FROM `q_author` 
                ORDER by country";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //print_r($records);
        
        foreach ($records as $record) {
            echo "<option " ;
            
            if ($record['country'] == $_GET['country'] ) {
                echo "selected";
            }
            
            echo ">" . $record['country'] . "</option>";
        }
        
   }
   
   
    function displayCategoryOptions() {
       global $conn;
       $sql = "SELECT * 
                FROM `q_category` 
                ORDER BY category";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //print_r($records);
        
        foreach ($records as $record) {
            echo "<option>" . $record['category'] . "</option>";
        }
        
   }
   
   function displayQuotes(){
       global $conn;
       $sql = "SELECT firstName, lastName, quote
                FROM q_author
                NATURAL JOIN q_quote
                NATURAL JOIN q_cat_quote
                NATURAL JOIN q_category
                WHERE 1";
                
        $namedParameters = array();
        
        if (!empty($_GET['content'])) { //user typed something for quote content      
           
           //The following sql works BUT it allows SQL Injection!!
           //$sql = $sql . " AND quote LIKE '%".$_GET['content']."%'";
           
           //Preventing SQL injection
           $sql = $sql . " AND quote LIKE :quoteContent"; //using named parameters to avoid SQL injection
           $namedParameters[":quoteContent"] = "%" . $_GET['content'] . "%";
        }
        
        
        if (isset($_GET['gender'])) { //gender was checked by the user
            
            $sql = $sql . " AND gender = :gender ";
            $namedParameters[':gender'] = $_GET['gender'];
            
            
        }
        
        if (isset($_GET['country'])) { //country was checked by the user
            if($_GET['country'] == "null") {
            } else {
            $sql = $sql . " AND country = :country ";
            $namedParameters[':country'] = $_GET['country'];
            }
            
        }
        
        if (isset($_GET['category'])) { //category was checked by the user
            
            if ($_GET['category'] == "null"){
            } else {
            $sql = $sql . " AND category = :category ";
            $namedParameters[':category'] = $_GET['category'];
            }
            
        }
        
        
        if (isset($_GET['orderBy'])) {
        
            if ($_GET['orderBy'] == 'orderByAuthor') {
                
               $sql = $sql . " ORDER BY lastName";
               
            } else {
                
                $sql = $sql . " ORDER BY quote";
            }
        
        }
        
   
                
        //echo $sql . "<br><br>";    
        
        
                
        $stmt = $conn->prepare($sql);
        $stmt->execute($namedParameters);
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
      if($records == null)
        {
            echo "There are no records to display. Try getting less specific. <br /> We are still adding more quotes so not all categories have quotes associated with them at the moment. <br />
            Currently, the only categories with quotes are: Philosophy, Motication, and Reflection. Please check back later for more!";
        }

      //print_r($records);
        foreach ($records as $record) {
            echo "<em>" . $record['quote'] . "</em> " . $record['firstName'] . " " . $record['lastName'] . "<br />";
        }                
                
       
       
   }
     
?>



    <body>
        
        <form method="get">
                <strong>Quote Content:</strong>
                <input type="text" name="content" value="<?=$_GET['content']?>">
                <strong>Author's Gender:</strong>
                <input type="radio" name="gender" id="female" value="F"
                
                <?php 
                
                 if ($_GET['gender'] == 'F') {
                     echo " checked";
                 }
                 
                 ?>
                
                >
                <label for="female">Female</label>
                <input type="radio" name="gender" id="male" value="M"
                
                <?php 
                
                 if ($_GET['gender'] == 'M') {
                     echo " checked";
                 }
                 
                 ?>
                
                >
                <label for="male">Male</label>
                <strong>Author's Birthplace:</strong>
                <select name="country">
                    <option value="null">Select a Country</option>
                    <?=displayCountryOptions()?>
                </select>
                <strong>Category:</strong>  
                <select name="category">
                    <option value="null">Select a Category</option>
                    <?=displayCategoryOptions()?>
                </select>
                
                Order by: 
                 <input type="radio" name="orderBy" id="orderByAuthor" value="orderByAuthor">
                <label for="orderByAuthor">Author</label>
                 <input type="radio" name="orderBy" id="orderByQuote" value="orderByQuote">
                <label for="orderByQuote">Quote</label>                
                <input type="submit" value="Filter" name="submit">
        </form>

        <hr />

        <div class="quotes">
            
            <?php
            if (!empty($_GET)){
            displayQuotes();
            } else {
                echo "Please click \"Filter\" to see some quotes!";
            }
            ?>
            
        </div>
        
    </body>
    
    <footer>
        &copy; Brian Duncan
    </footer>
</html>