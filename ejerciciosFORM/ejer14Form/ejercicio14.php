<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
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
        section{
            background-color: rgb(45, 45, 45);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 3rem;
            box-shadow: 0 0 150px rgba(255, 255, 255, 0.648);
            border-radius: 3rem;
            color: white;
            text-transform: uppercase;
            font-weight: bolder;
        }
        form > label{
            margin-bottom: 1rem;
        }
        .tableje2{
            text-align: center;
            border-collapse: collapse;
        }
        .tableje2 td{
            border: 2px solid black;
            color: black;
            padding: .5rem 1rem;
        }
        .tableje2 td:nth-child(2n){
            border: 2px solid black;
            color: black;
            padding: .5rem 1rem;
        }
        .menor{
            color: red;
            text-shadow: 0px 0px 10px red;
        }
        .mayor{
            color: green;
            text-shadow: 0px 0px 10px green;
        }
        hr{
            margin: 1rem 0;
            width: 100%;
            opacity: 25%;
        }
    </style>
</head>
<body>
    <section>
        <?php
            $contraseña = $_POST["password"];
            echo "<p>".$contraseña."</p>";
            if (preg_match("'^(?!.*[/\$C@]).+$'", $contraseña)) echo "<p class=\"mayor\">Válido</p>";
            else echo "<p class=\"menor\">Error</p>";

            if(preg_match("'^[^/^\$^C^@]+$'", $contraseña)) echo "<p class=\"mayor\">Válido</p>";
            else echo "<p class=\"menor\">Error</p>";
        ?>
    </section>
</body>
</html> 