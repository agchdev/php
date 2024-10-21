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
        .top{
            font-weight: bolder;
            background: rgba(255, 255, 255, 0.648);
            color: black;
        }
    </style>
</head>
<body>
    <?php
        $n1 = $_POST["num1"];
        $n2 = $_POST["num2"];
        $n3 = $_POST["num3"];
        $n4 = $_POST["num4"];

        $array[0] = $n1;
        $array[1] = $n2;
        $array[2] = $n3;
        $array[3] = $n4;

        echo "<table>";
        echo "<tr class=\"top\"><td>Número</td><td>Cuadrado</td><td>Cubo</td></tr>";
        for($i = 0; $i < 4; $i++){
            echo "<tr><td>".$array[$i]."</td><td>".($array[$i]**2)."</td><td>".($array[$i]**3)."</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>