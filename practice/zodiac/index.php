<!DOCTYPE html>
<html>
    <head>
        <title>Chinese Zodiac</title>
    </head>
    <?php
    function yearList($startYear, $endYear){
        $zodiac = array("rat","ox","tiger","rabbit","dragon","snake","horse","goat","monkey","rooster","dog","pig");
        $zodiacSign = 0;
        $sumOfYears = 0;
        $olympicCounter = 0;
            for($i=$startYear; $i<=$endYear; $i++){
                $sumOfYears = $sumOfYears + $i;
                
                if($olympicCounter == 4){
                if ($i == 1776){
                   echo"<li>Year $i <b>USA INDEPENDENCE!</b></li>"; 
                } else if ($i == 1500 || $i == 1600 || $i == 1700 || $i == 1800
                || $i == 1900 || $i == 2000){
                    echo"<li>Year $i <b>Happy New Century!</b></li>";
                }else{
                echo"<li>Year $i</li>";
                }
                
                echo "<img src='img/$zodiac[$zodiacSign].png' width = '75' ";
                echo "<br />";
                $zodiacSign++;
                if($zodiacSign >=12){
                    $zodiacSign =0;
                }
                $olympicCounter = 0;
                }
                
                $year++;
                $olympicCounter += 1;
            }
            
            
            return $sumOfYears;
    }
    ?>
    
    
    <body>
        
        <h1>Chinese Zodiac List</h1>
        
        <form method="get" name="enterData">
            
            Start Year: <input type="text" name="startYear"><br />
            End Year: <input type="text" name="endYear"><br />
            <input type="submit">
            
        </form>
        
        
        <ul>
            <?php
            $sumOfYears = yearList($_GET["startYear"], $_GET["endYear"]);
            echo "<br />";
            echo "<b>Sum of years: $sumOfYears</b>";
            ?>
        </ul>
        
        

    </body>
</html>