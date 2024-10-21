<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'system-ui';
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(30, 30, 30);
            height: 100vh;
            flex-direction: column;
        }
        table{
            border-collapse: collapse;
            background-color: rgb(45, 45, 45);
            padding: 3rem;
            box-shadow: 0 0 150px rgba(255, 255, 255, 0.648);
            color: white;
            font-weight: bolder;
        }
        td{
            border: 2px solid white;
            padding: 1.5rem 2rem;
        }

        h1{
            font-size: 3rem;
            font-weight: bolder;
            color: white;
        }
    </style> 
</head>
<body>
    <?php
        $n1 = $_POST["num1"];
        $n2 = $_POST["num2"];
        $n3 = $_POST["num3"];

        $array["Valor 1"] = $n1;
        $array["Valor 2"] = $n2;
        $array["Valor 3"] = $n3;
        $array["Valor 1 + Valor 2"] = $n1 + $n2;
        $array["Valor 2 * Valor 3"] = $n2 * $n3;
        $array["Valor 1 / Valor 3"] = $n1 / $n3;
        $array["Valor 1 + Valor 2 + Valor 3"] = $n1 + $n2 + $n3;
        $array["(Valor 2 + Valor 3) / Valor 1"] = ($n2 + $n3) / $n1;
        
        $datos = array_keys($array);
        $cant = count($datos);

        echo "<h1>RESULTADO</h1>";

        echo "<table>";
        for($i = 0; $i < $cant; $i++){
            echo "<tr><td>".$datos[$i]."</td><td>".$array[$datos[$i]]."</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>