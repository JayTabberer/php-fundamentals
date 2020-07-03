<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//WHILE loop. below is checking the condition first (unlike the DO WHILE loop)
//and will print the value of $index with every loop.
//loops, prints 1, goes to the top of the loop, checks the condition, Oh, it's still less than 5....
//i'll keeo going. print 2, back to the top, checks again, etc. until hitting the threshold and stopping.
$index = 1;
while ($index <= 5) {
    echo "$index <br>";
    $index++;
}

//below executes the code in the "do" and then checks if it can be
//looped over again in the while.
//DO this code WHILE <insertVariable> is less than 5
$whileIndex = 1;
do{
    echo "$whileIndex<br>";
    $whileIndex++;
} while ($whileIndex <= 5); 

?>
    
</body>
</html>