<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
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
            margin-top: 2rem;
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
        $naux = 0;

        if ($n2 > $n1) {
            $n1 = $naux;
            $n1 = $n2;
            $n2 = $naux;
        }

        echo "<h1>RESULTADO</h1>";

        echo "<table>";
        echo "<tr>";
        for($i = $n2; $i < $n1; $i++){
            echo "<td>".$i."</td>";
        }
        echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>