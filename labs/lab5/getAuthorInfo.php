<?php

include '../../../dbConnection.php';

$conn = getDatabaseConnection();

$sql = "SELECT * FROM `q_author` WHERE authorId=" . $_GET['authorId'];
$stmt = $conn -> prepare ($sql);
$stmt -> execute();
$record = $stmt -> fetch();

// echo $record['firstName'] . ", " . $record['biography'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Author Info </title>
    </head>
    <body>

<h1> Author Info </h1>

<?php

echo $record['firstName'] . " " . $record['lastName'] . " was born in " . $record['country'] . " and " . $record['biography'] . " They were born on: " . $record['dob'] . ", and died on: " . $record['dod'];
echo "<br /> <img src='" . $record['picture'] . "' width='100%'>";
?>





    </body>
</html>