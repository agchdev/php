<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // 6. Crear un documento PHP que permita al usuario comprobar el precio de
        // varios productos. El usuario, lo primero que verá será un listado con todos los
        // productos que hay en la base de datos. Al lado de cada producto habrá un
        // checkbox para que el usuario pueda seleccionar más de un producto a la vez.
        // Por medio de sentencias preparadas, mostrar al usuario el precio de todos los
        // productos seleccionados.
        require_once "Clases.php";
        if(isset($_POST["enviar"])){
            $db=new mysqli('localhost','root','','tienda');
            $db->set_charset("utf8");

            $pro=new producto($db);
            $array = [];

            $maxProd = $pro->getMaxProd();
            
            for ($i=0; $i < 10; $i++) { 
                # code...
            }

            

        }else{
    ?>
        <form action="Ej6.php" method="post" enctype="multipart/form-data">
            <?php
                $db=new mysqli('localhost','root','','tienda');
                $db->set_charset("utf8");

                $cli=new producto($db);
                $cli->get_checkbox();
            ?>
            <input type="submit" name="enviar" value="enviar">
        </form>
    <?php
        }
    ?>
</body>
</html>