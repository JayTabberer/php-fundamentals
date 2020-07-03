<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$luckyNumbers = array (2, 3, 4, 77, 85, 13);

//starting $i at 0 (because arrays count from 0.) 
//keep going as long as i is less than the amount inside of the array ($luckyNumbers);
//increment i by 1 until we reach the amout of elements in the array.
for ($i=0; $i < count($luckyNumbers); $i++) { 
    echo "$luckyNumbers[$i] <br>";
}

?>
    
</body>
</html>