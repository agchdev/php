<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        //Operaciones del hombre

        if (empty($_POST["nomH"]) ||empty($_POST["pesoH"]) || empty($_POST["alturaH"])) {
            echo "<p>FALTAN DATOS DEL HOMBRE</p>";
        }else{
            // Datos hombre
            echo "<p>NO FALTAN DATOS DEL HOMBRE</p>";
            $nomH = $_POST["nomH"];
            $pesoH = $_POST["pesoH"];
            $alturaH = $_POST["alturaH"];

            // IMC = Peso (kg) / altura^2 (metros)
        }

        //Operaciones del hombre

        if (empty($_POST["nomM"]) ||empty($_POST["pesoM"]) || empty($_POST["alturaM"])) {
            echo "<p>FALTAN DATOS DE LA MUJER</p>";
        }else{
            // Datos mujer
            echo "<p>NO FALTAN DATOS DE LA MUJER</p>";
            $nomM = $_POST["nomM"];
            $pesoM = $_POST["pesoM"];
            $alturaM = $_POST["alturaM"];

            // IMC = Peso-5(kg) / altura^2 (metros)
        }

        //Operaciones del hombre

        if (empty($_POST["nomN"]) ||empty($_POST["pesoN"]) || empty($_POST["alturaN"])) {
            echo "<p>FALTAN DATOS DEL NIÑO</p>";
        }else{
            // Datos niño
            echo "<p>NO FALTAN DATOS DEL NIÑO</p>";
            $nomN = $_POST["nomN"];
            $pesoN = $_POST["pesoN"];
            $alturaN = $_POST["alturaN"];

            // IMC = Peso (kg) / altura (metros)
        }


    ?>
</body>
</html>