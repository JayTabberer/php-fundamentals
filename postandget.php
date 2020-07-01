<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="postandget.php" method="post">
    Name: <input type="password" name="password">
    <input type="submit">
</form>
<!-- The below example used POST instead of GET
POST allows information to be gathered more securely, POST method doesn't allow
information to be shown in the URL once it is entered in the form. -->
<?php

echo $_POST["password"];

?>
    
</body>
</html>