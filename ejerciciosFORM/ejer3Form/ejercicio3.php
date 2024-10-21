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
    </style>
</head>
<body>
    <?php
        $n1 = $_POST["num1"];
        $n2 = $_POST["num2"];
        $n3 = $_POST["num3"];

        $array[0] = $n1;
        $array[1] = $n2;
        $array[2] = $n3;

        sort($array);
        
        $datos = ["Menor", "Mediano", "Mayor"];

        echo "<table>";
        for($i = 0; $i < 3; $i++){
            echo "<tr><td>".$datos[$i]."</td><td>".$array[$i]."</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>