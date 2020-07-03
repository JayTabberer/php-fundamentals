<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="switch.php" method="post">
    What was your grade?
    <input type="text" name="grade">
    <input type="submit">
</form>
    
<?php

$grade = $_POST["grade"];

switch ($grade) {
    case "A" || "a":
        echo "You got an A! That's excellent";
        break;
    case "B" || "a":
        echo "Well done, you got a B!";
        break;
    case "C" || "c":
        echo "You got a C";
        break;
    case "D" || "d":
        echo "You got a D. Must try harder";
        break;
    case "E" || "e":
        echo "You got a E. hmmmmm. Do better";
        break;
    case "F" || "f":
        echo "Dude, a fucking F....";
        break;
    default:
    echo "Invalid grader entered";
}

?>

</body>
</html>