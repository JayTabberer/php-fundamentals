<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="checkbox.php" method="post">
        <!-- In the name field, it shows that each checkbox is being stored in an array called fruit[]
        and each checkbox in this case is being stored in the same one -->
        Apples:<input type="checkbox" name="fruits[]" value="apples"><br> 
        Oranges:<input type="checkbox" name="fruits[]" value="oranges"><br> 
        Bananas:<input type="checkbox" name="fruits[]" value="bananas"><br> 
        <input type="submit">
    </form>

<?php
    //storing the information of the array into a variable so that we can perform tasks on it.
    //like finding the index of what was checked, like below.
    $fruits = $_POST["fruits"];
    echo "$fruits[0]<br>";
    echo $fruits[1];
?>

</body>
</html>