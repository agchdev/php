<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    </style>
</head>
<body>
    <section>
        <?php
            
            $n1 = $_POST["tabla"];
            $color = $_POST["color"];

            echo "<h3>Tabla de multiplicar de $n1: </h3>";
            echo"<br>";
            echo "<table class=\"tableje2\" style=\"background-color: #".$color.";\">";
            for ($i=1; $i <= 10; $i++) { 
                $res = $n1*$i;
                echo "<tr><td>$n1 x $i</td><td>".$res."</td></tr>";
            }
            echo "</table>";
            
        ?>
    </section>
</body>
</html> 