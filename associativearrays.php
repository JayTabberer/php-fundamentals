<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="associativearrays.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>
    
<?php
//below we are assigning key value pairs inside of the array.
//Make sure the keys are unique
// Jay : C
    $grades = array("Jay" => "C", "Rosie" => "A+", "Matt" => "D");
    // echo "$grades[Jay]<br>";
    // echo "$grades[Rosie]<br>";
    // $grades["Jay"] = "F";
    // echo "$grades[Jay]";

    //below checks what is written in the input box with the name "student"
    //if a name entered is seen in the array it will print that key's value.
    $whatGrade = $grades[$_POST["student"]];
    echo $whatGrade;


?>

</body>
</html>