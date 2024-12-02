<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href=""></a>
    <?php
        if (isset($_POST["enviar"])) {
            $palabra = $_POST["busca"];

            function ordena($stringRes){
                $arrayAux = explode("[", $stringRes);
                $arrayBusquedas = explode(",", $arrayAux[2]);
                $arrayEnlaces = explode(",", $arrayAux[4]);
                $cant = count($arrayEnlaces);
                echo "<h1>".$_POST["busca"]."</h1>";
                for ($i=0; $i < $cant; $i++) { 
                    $palabraSinLetra = str_replace("]", "",$arrayBusquedas[$i]);
                    echo "<ul>";
                    echo "<li><a href=".$arrayEnlaces[$i].">".$palabraSinLetra."</a></li>";
                    echo "</ul>";
                }
            }

            function buscar($palabra){
                $url = "https://es.wikipedia.org/w/api.php?action=opensearch&prop=extracts&format=json&formatversion=2&srwhat=title&search=".$palabra;
                $urlPage = "localhost/php/funciones/ejercicio13.php";
                $datosIni = curl_init();
                curl_setopt($datosIni, CURLOPT_URL, $url);
                curl_setopt($datosIni, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($datosIni, CURLOPT_USERAGENT, $urlPage);

                $res = curl_exec($datosIni);
                curl_close($datosIni);

                ordena($res);
            }

            buscar($palabra);
        }else{
    ?>
    <form action="ejercicio13.php" method="post" enctype="multipart/form-data">
        <input type="text" name="busca">
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
        }
    ?>
</body>
</html>