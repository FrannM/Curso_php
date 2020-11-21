<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
</head>
<body>
    <?php
        $frutas = array ("banana", "manzana", "uva", "naranja");
        print_r($frutas);

        echo "<br>";

        echo $frutas[1];

        echo "<br>";

        echo count($frutas) . " elementos";

        echo "<br>";

        for ($i= 0; $i < count($frutas); $i++){
            echo $frutas[$i] . "<br>";
        }


        $edades = array("Franco" => 25, "Tania" => 23, "Raul" => 27);

        print_r($edades);

        echo "<br>";

        foreach ($edades as $key => $value) {
            echo $key . " tiene el valor de " . $value . "<br>";        }
    ?>
</body>
</html>