<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //5. Crear un documento PHP que por medio de formularios permita al usuario
        // insertar una nueva venta. El usuario se encontrará con una lista desplegable
        // para el cliente, otra para el producto, un campo “date” para elegir la fecha de
        // la venta y un campo de texto para introducir la cantidad vendida. Por defecto,
        // todas las ventas se insertan como no pagadas.
        require_once "Clases.php";
        if(isset($_POST["enviar"])){
            $db=new mysqli('localhost','root','','tienda');
            $db->set_charset("utf8");


            $pro=new Producto($db, $_POST["descripcion"], $_POST["precio"]);
            $pro->crearProducto();
        }else{
    ?>
        <form action="Ej4.php" method="post" enctype="multipart/form-data">
            <select name="cliente">
                <?php
                    $db=new mysqli('localhost','root','','tienda');
                    $db->set_charset("utf8");

                    $cli=new cliente($db);
                    $cli->get_select();
                ?>
            </select>
            <select name="producto">
                <?php
                    $db=new mysqli('localhost','root','','tienda');
                    $db->set_charset("utf8");

                    $cli=new producto($db);
                    $cli->get_select();
                ?>
            </select>
            <input type="date" name="fecha">
            <input type="number" step="0.01" name="cantidad">
            <input type="submit" name="enviar" value="enviar">
        </form>
    <?php
        }
    ?>
</body>
</html>