<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["envio"])){
        if(empty($_POST["dni"])){
            header("Location:ejercicio2.php?err=1");
        }elseif (!preg_match("'^[0-9]{8}[A-Z]{1}$'", $_POST["dni"])) {
            header("Location:ejercicio2.php?err=2");
        }elseif(empty($_FILES["pdf"]["tmp_name"])){
            header("Location:ejercicio2.php?err=3");
        }

        $aux = explode("/", $_FILES["pdf"]["type"]);
        $formatoPDF = end($aux);

        if($formatoPDF != "pdf"){
            header("Location:ejercicio2.php?err=3");
        } elseif ($_FILES["pdf"]["size"]/(2**20) > 2) {
             header("Location:ejercicio2.php?err=4");
        }

        $ruta = "./pdfs/";

        if(!file_exists($ruta)){
            mkdir($ruta);
        }

        $orgigen = $_FILES["pdf"]["tmp_name"];
        $nuevoNom = $_POST["dni"];
        $destino = $ruta.$nuevoNom.".".$formatoPDF;

        move_uploaded_file($orgigen, $destino);

    }else{
    ?>
    <form action="ejercicio2.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nomCom" placeholder="Introduce tu nombre completo">
        <br>
        <?php
            if (isset($_GET["err"])) {
                if ($_GET["err"] == 1) echo "<p style=\"color:red;\">Introduce el DNI</p>";
                if ($_GET["err"] == 2) echo "<p style=\"color:red;\">Introduce un DNI VÁLIDO</p>";
            }
        ?>
        <input type="text" name="dni" placeholder="Introduce tu DNI">
        <br>
        <?php
            if (isset($_GET["err"])) {
                if ($_GET["err"] == 3) echo "<p style=\"color:red;\">Introduce un PDF</p>";
                if ($_GET["err"] == 4) echo "<p style=\"color:red;\">el PDF pesa mas de 2 mb</p>";
            }
        ?>
        <input type="file" name="pdf">
        <br>
        <input type="submit" value="enviar" name="envio">
    </form>
    <?php
    }
    ?>
</body>
</html>