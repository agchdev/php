<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
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
        .sobresaliente{
            color: rgb(255, 208, 0);
            text-shadow: 0px 0px 10px rgb(255, 208, 0);
        }
        .suficiente{
            color: orange;
            text-shadow: 0px 0px 10px orange;
        }
    </style> 
</head>
<body>
    <?php

        $usuario = ["Usuario" => $_POST["name"],"Matematicas" => $_POST["mates"],"Lengua" => $_POST["lengua"],"Historia" => $_POST["historia"],"Dibujo" => $_POST["dibujo"]];
        $keys = array_keys($usuario);
        $cont = count($keys);

        echo "<table>";
        
        for ($i=0; $i < $cont; $i++) { 
            if ($keys[$i] == "Usuario") {
                echo "<tr><td>".$keys[$i]."</td><td>".$usuario[$keys[$i]]."</td></tr>";
            }else if($usuario[$keys[$i]] >= 0 && $usuario[$keys[$i]] <= 4){
                echo "<tr><td>".$keys[$i]."</td><td  class=\"menor\">SUSPENSO</td></tr>";
            }else if($usuario[$keys[$i]] == 5){
                echo "<tr><td>".$keys[$i]."</td><td class=\"suficiente\">SUFICIENTE</td></tr>";
            }else if($usuario[$keys[$i]] == 6){
                echo "<tr><td>".$keys[$i]."</td><td class=\"suficiente\">BIEN</td></tr>";
            }else if($usuario[$keys[$i]] >= 7 && $usuario[$keys[$i]] <= 8){
                echo "<tr><td>".$keys[$i]."</td><td class=\"mayor\">NOTABLE</td></tr>";
            }else if($usuario[$keys[$i]] >= 9 && $usuario[$keys[$i]] <= 10){
                echo "<tr><td>".$keys[$i]."</td><td class=\"sobresaliente\">SOBRESALIENTE</td></tr>";
            }
        }

        echo "</table>";
           
    ?>
</body>
</html>