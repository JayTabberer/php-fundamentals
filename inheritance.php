<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// The below code shows inheritance. The italian Chef can do allll the things Chef can do
// PLUS all his own stuff too.
// Italian chef inherits all of the things that the Chef class can do.

class Chef{
    function makeChicken(){
        echo "This chef is making chicken<br>";
    }
    function makeSalad(){
        echo "This chef is making salad<br>";
    }
    function makeSpecialDish(){
        echo "This chef is making some mega ribs<br>";
    }
}
class ItalianChef extends Chef{
    function makePasta(){
        echo "The chef makes pasta";
    }
    // Both chefs have makeSpecialDish() functions, the below example shows how italian chef can
    // Overwrite the Chefs special, and print out his own version of makeSpecialDish().
    function makeSpecialDish()
    {
        echo "The chef makes something super italian";
    }
}

$chef = new Chef();
$chef -> makeSpecialDish();

$italianChef = new ItalianChef();
$italianChef -> makeSpecialDish();

?>
    
</body>
</html>