<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// Simple if statement
$isMale = false;
$isTall = false;

if ($isMale && $isTall) {
    echo "You are a tall male";
}else if($isMale && !$isTall){
    echo "You are male and not tall";
}else if(!$isMale && $isTall){
    echo "you are not male but are tall";
}else{
    echo "you are not male and not tall<br>";
}

// ---------------
//if statement comparisions 

//takes two parameters and returns the largest
// echo max(3, 6);


function getMax($num1, $num2, $num3){
    if($num1 >= $num2 && $num1 >= $num3){
        return $num1;
    }else if ($num2 >= $num1 && $num2 >= $num3){
        return $num2;
    }else{
        return $num3;
    }
}
echo getMax(100, 200, 1000);


?>

</body>
</html>