<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["archNuevo"])){
        $ruta = "./archivos/";

        if(!file_exists($ruta)){
            mkdir($ruta);
        }

        $origen = $_FILES["arch1"]["tmp_name"];
        $destino = "";
        $nomOrig = $_FILES["arch1"]["name"];
        $nnom = "";

        $arr = explode(".", $nomOrig);
        $ext = end($arr);
    
        
        if(!empty($_POST["nom"])){
            $nnom = $_POST["nom"];

            if(!preg_match("'^.+\.[a-z]+$'", $nnom)){
                $nnom .= ".".$ext;
            }
    
            
            $destino = $ruta.$nnom;
        }else{
            $nnom = $nomOrig;
            $destino = $ruta.$nomOrig;
        }
        

        move_uploaded_file($origen, $destino);

        echo "<table><tr><th>Nombre original</th><th>Nombre nuevo</th><th>Tamaño en megas</th><th>Tipo de imagen</th></tr>";
        
        $tMB = $_FILES["arch1"]["size"]/(2**20);
        
        echo "<tr><td>$nomOrig</td><td>$nnom</td><td>$tMB</td><td>$ext</td></tr></table>";

        echo "<img src=\"$destino\" width=\"400px\">";
    }else{
        echo "<form action=\"#\" method=\"POST\" enctype=\"multipart/form-data\">";
        echo "<input type=\"file\" name=\"arch1\" required>";
        echo "<br>";
        echo "<input type=\"text\" name=\"nom\" placeholder=\"Introduce el nuevo nombre del archivo\">";
        echo "<br>";
        echo "<input type=\"submit\" name=\"archNuevo\" value=\"Enviar archivo\">";
        echo "</form>";
    }
        
    ?>
</body>
</html>