<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="site.php" method="post">
        Number 1:<input type="number" step="0.1" name="num1"> </br>
        Operator: <input type="text" name="op"> </br>
        Number 2: <input type="number" name="num2"> </br>
        <input type="submit">
    </form>

    <?php
        $num1 = $_POST["num1"];
        $op = $_POST["op"];
        $num2 = $_POST["num2"];

        if ($op == "*"){
            echo $num1 * $num2;
        }
        else if ($op == "/"){
            echo $num1 / $num2;
        }
        else if ($op == "+"){
            echo $num1 + $num2;
        }
        else if ($op == "-"){
            echo $num1 - $num2;
        }
        else {
            echo "NaN";
        }
    ?>
</body>

</html>