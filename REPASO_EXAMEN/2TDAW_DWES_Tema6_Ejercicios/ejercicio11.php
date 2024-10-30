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
        $ips = [];

        for ($i=0; $i < 3; $i++) { 
            $ips[$i] = $_POST["ip$i"];
        }

        echo "<table>";
        for ($i=0; $i < 3; $i++) { 
            echo "<tr><td>$ips[$i]</td>";
            if(preg_match("'^((2[0-4][0-9]|25[0-5]|[0-1]?[0-9]?[0-9])\.){3}(2[0-4][0-9]|25[0-5]|[0-1]?[0-9]?[0-9])$'", $ips[$i])){
                echo "<td>ES UNA IP</td></tr>";
            }else{
                echo "<td>NO ES UNA IP</td></tr>";
            }
        }
        echo "</table>";

    }else{
    ?>
    <form action="ejercicio11.php" method="post" enctype="multipart/form-data">
        <?php
        for ($i=0; $i < 3; $i++) { 
            echo "<input type=\"text\" name=\"ip$i\" placeholder=\"Introduce la ip $i\">";
            echo "<br>";
        }
        ?>
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    }
    ?>
</body>
</html>