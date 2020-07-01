<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php ?>
<!-- Notes
action - points to the current page where the form is
method - get method, getting the user information (or getting whatever)
name - logical for the input being entered. Name must be the same as the $_GET[""]
-->
    <form action="userInput.php" method="get">
        Name: <input type="text" name="name">
        <br>
        Age: <input type="number" name="age">
        <br>
        Submit: <input type="submit">
    </form>
    <br>

    <!-- GETTING info from a form -->
    <!-- The below is going to "echo" out the the value of the input, from the input called "name" in the form -->
    <h1><?php echo $_GET["name"] ?></h1>
    <h2><?php echo $_GET["age"] ?></h2>

</body>

</html>