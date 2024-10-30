<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["enviar"])){
        if (empty($_POST["usu"])) {
            header("Location:ejercicio11.php?err=1");
        }

        if(preg_match("'(?!.*[\$C\/@])^.*$'", $_POST["pass"])){
            echo "<p style=\"color:green;\">contraseña válida</p>";
        }else{
            echo "<p style=\"color:red;\">contraseña inválida</p>";
        }
    }else{
    ?>
    <form action="ejercicio14.php" method="post" enctype="multipart/form-data">
        <?php
        if(isset($_GET["err"])){
            if($_GET["err"] == 1) echo "<p>Introduce un nombre de usuario</p>";
        }
        ?>
        <input type="text" name="usu" placeholder="Introduce el nombre de usuario">
        <input type="password" name="pass" placeholder="Introduce la contraseña">
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    }
    ?>
</body>
</html>