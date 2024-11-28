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
        if(!isset($_POST["nombre"]) || !isset($_POST["contraseña"])) header("Location:ejercicio.php?err=1");
        //RECOGIDA DE DATOS
        $contrasenia = $_POST["contraseña"];
        $contraseniaComp = $_POST["contraseñaComp"];
        //LONGITUDES DATOS
        $longContra = strlen($contrasenia);
        $longUsu = strlen($usuario);
        //COMPROBACIONES EN FORMULARIO
        if($longUsu < 8 || $longUsu > 50) header("Location:google.es");
        if($longContra < 8 || $longContra > 20) header("Location:ejercicio.php?err=2");
        if($contrasenia != $contraseniaComp) header("Location:ejercicio.php?err=33");
        $usuario = $_POST["nombre"];
        //ABRIMOS CONEXION CON BASE DATOS
        $db = new mysqli('localhost', 'root', '', 'ejercicio');
        //COMPROBACIONES EN BASE DE DATOS
        $usuario = $db->real_escape_string($usuario);  // Siempre sanitiza las entradas del usuario para evitar inyecciones SQL
        $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario'";
        $usuOcupado = $db->query($consulta);
        if ($usuOcupado->num_rows > 0) {
            $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasenia='$contrasenia'";
            $usuOcupado = $db->query($consulta);
            if ($usuOcupado->num_rows > 0) header("Location:https://github.com/agchdev"); 
            else header("Location:ejercicio.php?err=4");
        }else{
            // Si no existe, procedemos a insertar
            $db->query('INSERT INTO usuarios VALUES ("' . $usuario . '","' . $contrasenia . '");');
            header("Location:ejercicio.php?inicio=1");
        }
        $db->close();
    }else if(isset($_POST["enviarIni"])){
            if(!isset($_POST["nombreIni"]) || !isset($_POST["contraseñaIni"])) header("Location:ejercicio.php?err=1&inicio=1");
            //RECOGIDA DE DATOS
            $contrasenia = $_POST["contraseñaIni"];
            $usuario = $_POST["nombreIni"];
            //LONGITUDES DATOS
            $longContra = strlen($contrasenia);
            $longUsu = strlen($usuario);
            //ABRIMOS CONEXION CON BASE DATOS
            $db = new mysqli('localhost', 'root', '', 'ejercicio');
            //COMPROBACIONES EN BASE DE DATOS
            $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasenia='$contrasenia'";
            $usuOcupado = $db->query($consulta);
            if ($usuOcupado->num_rows > 0) {
                header("Location:https://github.com/agchdev"); 
            }else{
                header("Location:ejercicio.php?err=33&inicio=1");
            }
    }else{
        if(isset($_GET["inicio"])){
            if($_GET["inicio"] == 1){
                ?>
                <h1>INICIO DE SESION DE USUARIO</h1>
                <?php
                if(isset($_GET["err"])){
                    if($_GET["err"] == 1) echo "<p style=\"color:red;\">FALTAN DATOS</p>";
                    if($_GET["err"] == 33) echo "<p style=\"color:red;\">USUARIO O CONTRASEÑA SON INCORRECTOS</p>";
                }
                ?>
                <form action="ejercicio.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="nombreIni" placeholder="Introduce el nombre de usuario..">
                    <input type="password" name="contraseñaIni" placeholder="Introduce la contraseña..">
                    <input type="submit" name="enviarIni" value="enviar">
                </form>
                <?php
            }
        }else{
    ?>
            <h1>REGISTRO DE USUARIO</h1>
            <form action="ejercicio.php" method="post" enctype="multipart/form-data">
                <?php
                if(isset($_GET["err"])){
                    if($_GET["err"] == 1) echo "<p style=\"color:red;\">FALTAN DATOS</p>";
                    if($_GET["err"] == 2) echo "<p style=\"color:red;\">CONTRASEÑA TIENE QUE TENER ENTRE 8 Y 20 CARACTERES</p>";
                    if($_GET["err"] == 3) echo "<p style=\"color:red;\">USUARIO TIENE QUE TENER ENTRE 8 Y 50 CARACTERES</p>";
                    if($_GET["err"] == 4) echo "<p style=\"color:red;\">USUARIO YA EXISTE</p>";
                    if($_GET["err"] == 33) echo "<p style=\"color:red;\">LAS CONTRASEÑAS DEBEN COINCIDIR</p>";
                }
                ?>
                <input type="text" name="nombre" placeholder="Introduce el nombre de usuario..">
                <input type="password" name="contraseña" placeholder="Introduce la contraseña..">
                <input type="password" name="contraseñaComp" placeholder="Confirma la contraseña..">
                <input type="submit" name="enviar" value="enviar">
            </form>
    <?php
        }
    }
    ?>
</body>
</html>