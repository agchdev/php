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

            if(empty($_POST["peso"])){
                header("Location:ejercicio3.php?err=1");
            }
            if(empty($_POST["altura"])){
                header("Location:ejercicio3.php?err=2");
            }

            if($_POST["tipo"] == 1){
                $imc = $_POST["peso"] / (($_POST["altura"]/100)**2);
                $pollas = round($imc, 2);
                echo "<p>TU IMC DE HOMBRE ES $pollas</p>";
            }elseif($_POST["tipo"] == 2){
                $imc = $_POST["peso"]-5 / (($_POST["altura"]/100)**2);
                $pollas = round($imc, 2);
                echo "<p>TU IMC DE MUJER ES $pollas</p>";
            }elseif($_POST["tipo"] == 3){
                $imc = $_POST["peso"] / ($_POST["altura"]/100);
                $pollas = round($imc, 2);
                echo "<p>TU IMC DE NIÑO ES $pollas</p>";
            }
        }else{
    ?>
    <form action="ejercicio3.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nom" placeholder="Introduce tu inutil nombre">
        <br>
        <?php
        if(isset($_GET["err"])){
            if($_GET["err"] == 1) echo "<p style=\"color:red;\">Introduce tu peso acomplejada de mierda</p>";
        }
        ?>
        <input type="number" name="peso" placeholder="Damelo en KG gorda">
        <br>
        <?php
        if(isset($_GET["err"])){
            if($_GET["err"] == 2) echo "<p style=\"color:red;\">Introduce tu altura acomplejada de mierda</p>";
        }
        ?>
        <input type="number" name="altura" placeholder="Damelo en M jirafa">
        <br>
        <select name="tipo">
            <option value="1">Hombre</option>
            <option value="2">Mujer</option>
            <option value="3">bebe</option>
        </select>
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    }
    ?>
</body>
</html>