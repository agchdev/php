<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'herencia.php';
    class Articulo{
        private $nombre;
        private $precio;

        public function __construct ($pNombre, $pPrecio){
            $this->nombre = $pNombre;
            $this->precio = $pPrecio;
        } 

        public function getPrecio(){
            return $this->precio;
        }

        public function setPrecio($pPrecio){
            if(gettype($pPrecio) == "integer" || gettype($pPrecio) == "double") $this->precio = $pPrecio;
        }

        public function  __toString(){
            $str = 'Nombre: '.$this->nombre.'<br/>'.'Precio:'.$this->precio.'&euro;<br/>';
            return $str;
        }
    }

    if(isset($_POST["enviar"])){
        $articuloReb = new ArticuloRebajado($_POST["rebaja"], $_POST["nombre"], $_POST["precio"]);
        echo $articuloReb->__toString();
    }else{
    ?>
        <form action="class.articulo.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="Introduce el nombre...">
            <input type="number" name="precio" placeholder="Introduce el precio...">
            <input type="number" name="rebaja" placeholder="Introduce la rebaja...">
            <input type="submit" name="enviar" value="enviar">
        </form>
    <?php
    }
    ?>
</body>
</html>
