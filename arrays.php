<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $friendArray = array("Jay", "Bob", "Someother guy", "Tezza");
    //below modifies an element of an array
    $friendArray[1] = "Matt";

    //counts the amount of elements in an array
    echo count($friendArray);


?>
    
</body>
</html>