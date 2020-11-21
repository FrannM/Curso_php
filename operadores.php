<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 5;
        $y = 10;

        echo $x + $y;
        echo "<br>";
        echo $x - $y;
        echo "<br>";
        echo $x * $y;
        echo "<br>";
        echo $x / $y;
        echo "<br>";
        echo $x % $y;
        echo "<br>";
        echo $x ** $y;
        echo "<br>";
        $x = $y;
        echo $x;
        $x +=$y;
        echo "<br>";
        echo $x;
        echo "<br>";
        $x = $x * $y;
        echo $x;
        $x = 5;
        $y = 10;
        //Comparacion
        var_dump($x == $y);
        var_dump($x === $y);
        //Incremento y decremento
        echo $x++;
        echo "<br>";
        echo $x;
        echo "<br>";
        echo $y--;
        echo "<br>";
        echo $y;



    ?>
</body>
</html>