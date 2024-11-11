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
            $mes = $_POST["mes"];
            $colorFestivos = $_POST["colorFes"];
            $colorFinSem = ["colorFSem"];
            $colorLaboral = ["colorRest"];
            switch ($mes) {
                case "1":
                    $arrayFest = [1,2,3,4,5,6];
                    echo "<table>";
                    
                    echo "</table>";
                    break;
                
                case "2":
                    $arrayFest = [28];
                    echo "holaaa";
                    break;
                case "3":
                    $arrayFest = [28];
                    echo "hola";
                    break;
                
                case "4":
                    $arrayFest = [14,15,16,17,18,19,20];
                    echo "holaaa";
                    break;
                case "5":
                    $arrayFest = [1];
                    echo "hola";
                    break;
                
                case "6":
                    $arrayFest = [26];
                    echo "holaaa";
                    break;
                case "7":
                    echo "hola";
                    break;
                
                case "8":
                    echo "holaaa";
                    break;
                case "9":
                    $arrayFest = [1,2,3,4,5,6,7,8,9,10];
                    echo "hola";
                    break;
                
                case "10":

                    echo "holaaa";
                    break;
                case "11":
                    $arrayFest = [1];
                    echo "hola";
                    break;
                
                case "12":
                    $arrayFest = [6,9,21,22,23,24,25,26,27,30,31];
                    echo "holaaa";
                    break;
            }
        }else{
    ?>
    <form action="ejercicio9.php" method="post" enctype="multipart/form-data">
        <select name="mes">
            <option value="1" default>Enero</option>
            <option value="2">Febrero</option>
            <option value="3">Marzo</option>
            <option value="4">Abril</option>
            <option value="5">Mayo</option>
            <option value="6">Junio</option>
            <option value="7">Julio</option>
            <option value="8">Agosto</option>
            <option value="9">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
        </select>
        <input type="number" name="dia">
        <input type="text" name="colorFes">
        <input type="text" name="colorFSem">
        <input type="text" name="colorRest">
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    }
    ?>
</body>
</html>