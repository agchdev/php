<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
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
        p{
            color: white;
            font-size: 3rem;
            font-weight: bolder;
        }
        .menor{
            color: red;
            text-shadow: 0px 0px 10px red;
        }
        .mayor{
            color: green;
            text-shadow: 0px 0px 10px green;
        }
    </style> 
</head>
<body>
    <?php
        $n1 = $_POST["num1"];

        if ($edad < 18) {
            echo "<p>El usuario ".$nombre." <span class=\"menor\">ES MENOR DE EDAD</span></p>";
            echo "<p>La edad: ".$edad."</p>";
        }else{
            echo "<p>El usuario ".$nombre." <span class=\"mayor\">ES MAYOR DE EDAD</p>";
            echo "<p>La edad: ".$edad."</p>";
        }
    ?>
</body>
</html>