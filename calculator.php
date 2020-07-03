<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="calculator.php" method="post">
        First Number:<input type="number" step="0.001" name="num1">
        <br>
        OP:<input type="textbox" name="op">
        <br>
        Second number:<input type="number" step="0.001" name="num2">
        <input type="submit">
    </form>

    <?php

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if ($op == "+") {
         echo $num1 + $num2;
    }else if($op == "-"){
        echo $num1 - $num2;
    }else if($op == "*"){    
        echo $num1 * $num2;
    }else if($op == "/"){
        echo $num1 / $num2;
    }else{
        echo "Invalid operator";
    }

    ?>

    <!-- <?php echo $_GET["num1"] + $_GET["num2"] ?> -->



</body>

</html>