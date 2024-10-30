<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST["enviar"])) {
        $arrayUsu = [];

        for ($i=0; $i < 5; $i++) { 
            $arrayUsu[$i] = $_POST["usu$i"];
        }

        echo "<table>";

        for ($i=0; $i < 5; $i++) { 
            echo "<tr><td>".$arrayUsu[$i]."<td>";
            if (preg_match("'(?=.*[&!?\*])^.*$'", $arrayUsu[$i])) {
                echo "<td>error</td>";
            }else{
                echo "<td>VÁLIDO</td>";
            }
        }
        
        echo "</table>";
    }else{
    ?>
    <form action="ejercicio17.php" method="post" enctype="multipart/form-data">
        <?php
            for ($i=0; $i < 5; $i++) { 
                echo "<input type=\"text\" name=\"usu$i\" placeholder=\"Introduce el usuario $i\">";
            }
        ?>
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    }
    ?>
</body>
</html>