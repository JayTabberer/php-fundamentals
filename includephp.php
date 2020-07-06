<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    //the below are being used to populate variables inside of article-header.php
    //This can be used as a template so changes are made in once place and the template is reusable
    $title = "My first blog post";
    $autor = "Jay";
    $wordcount = 400;
    include "article-header.php";
?>

<?php
    //below is including the below page so I can use the functionality of those files
    //eg. the sayHi() function is inside of usefultools.php
    include "usefultools.php";
    sayHi("Jay<br>");
    echo $feetInMile;
?>
    
</body>
</html>