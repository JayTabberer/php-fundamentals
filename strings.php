<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    $testString = "test string boomer";
    $phrase = "Hey, Hows It Going";
    echo strtolower($phrase); //To lowercase
    echo"<hr>";
    echo strtoupper($phrase); //To upper case
    echo "<hr>";
    echo strlen($phrase); //string length
    echo "<hr>";

    //finding a character in a string 0 - length of string
    echo $phrase[0];
    echo "<hr>";
    //replace a character at index 0 of phrase with B
    echo $phrase[0] = "B";
    echo "<hr>";
    //re-print the changed phrase
    echo $phrase;
    echo "<hr>";
    //replacing a word in a string
    // given the part of the sting to be changed, replacement, location of string(or variable)
    echo str_replace("test", "crap", $testString);
    echo "<hr>";

    // below is grabbing a substring from a string variable
    //given the string/variable location, thr index to start from and then the amount of characters to grab.
    echo substr($testString, 12, 4);


    ?>
    
</body>
</html>