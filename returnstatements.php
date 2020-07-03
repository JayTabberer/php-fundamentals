<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Returns</h1>


<?php

// function cube($num){
//    return $num * $num * $num;
// }

// $cubeResult = cube(4);
// echo $cubeResult;

// ----------------------------------------


$city = "lichfield";
$county = "Staffordshire";
$event = "Food fare";

$location_vars = array("city", "county");

$result = compact("event", $location_vars);
print_r($result);

?>

</body>
</html>