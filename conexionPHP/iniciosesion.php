<?php
if(isset($_POST["enviarInicio"]) ){
        if(!isset($_POST["nombreinicio"]) || !isset($_POST["contraseñaInicio"])) header("Location:ejercicio.php?errIni=1");
        //RECOGIDA DE DATOS
        $contrasenia = $_POST["contraseñaInicio"];
        $usuario = $_POST["nombreinicio"];
        //LONGITUDES DATOS
        $longContra = strlen($contrasenia);
        $longUsu = strlen($usuario);
        //COMPROBACIONES EN FORMULARIO
        if($longUsu < 8 || $longUsu > 50) header("Location:ejercicio.php?errIni=3");
        if($longContra < 8 || $longContra > 20) header("Location:ejercicio.php?errIni=2");
        //ABRIMOS CONEXION CON BASE DATOS
        $db = new mysqli('localhost', 'root', '', 'ejercicio');
        //COMPROBACIONES EN BASE DE DATOS
        $usuario = $db->real_escape_string($usuario);  // Siempre sanitiza las entradas del usuario para evitar inyecciones SQL
        $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasenia='$contrasenia'";
        $usuOcupado = $db->query($consulta);
        if ($usuOcupado->num_rows > 0) {
            echo "<p>INICIO DE SESION CON EXITO</p>";
        }

    }else{
        // Si no existe, procedemos a insertar
        $db->query('INSERT INTO usuarios VALUES ("' . $usuario . '","' . $contrasenia . '");');
        ?>
        <h1>INICIO DE SESION USUARIO</h1>
        <form action="ejercicio.php" method="post" enctype="multipart/form-data">
            <?php
            if(isset($_GET["errIni"])){
                if($_GET["errIni"] == 1) echo "<p style=\"color:red;\">FALTAN DATOS</p>";
                if($_GET["errIni"] == 2) echo "<p style=\"color:red;\">CONTRASEÑA TIENE QUE TENER ENTRE 8 Y 20 CARACTERES</p>";
                if($_GET["errIni"] == 3) echo "<p style=\"color:red;\">USUARIO TIENE QUE TENER ENTRE 8 Y 50 CARACTERES</p>";
                if($_GET["errIni"] == 4) echo "<p style=\"color:red;\">USUARIO YA EXISTE</p>";
            }
            ?>
            <input type="text" name="nombreInicio" placeholder="Introduce el nombre de usuario..">
            <input type="password" name="contraseñaInicio" placeholder="Introduce la contraseña..">
            <input type="submit" name="enviarInicio" value="enviarInicio">
        </form>
        <?php
    }
    ?>