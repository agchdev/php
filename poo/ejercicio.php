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
        class animal{
            public $nombre;
            public $color;
            public $fecha_nac;

            public function __construct ($n="", $c="", $fn="2000-01-01"){
                $this->nombre = $n;
                $this->color = $c;
                $this->fecha_nac = $fn;
            }

            public function set_nom($n){
                $this->nombre = $n;
            }
            public function set_col($c){
                $this->color = $c;
            }
            public function set_fech($fn){
                $this->fecha_nac = $fn;
            }
            public function calcularEdad(){
                $tiempo = strtotime($this->fecha_nac);
                $añoNac = date("Y", $tiempo);
                $añoActu = date("Y");
                $edad = $añoActu - $añoNac;
                return $edad;
            }
            public function __toString(){
                $str = "Me llamo ".$this->nombre." de color ".$this->color." y tiene ".$this->calcularEdad()." años";
                return $str;
            }
        }

        $anim = new animal($_POST["nombre"], $_POST["color"], $_POST["fecha"]);
        echo $anim;
    }else{
    ?>
        <form action="ejercicio.php" method="post" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="nombre...">
            <br>
            <select name="color">
                <option value="blanco">selecciona un color</option>
                <option value="rojo">rojo</option>
                <option value="verde">verde</option>
                <option value="amarillo">amarillo</option>
                <option value="morado">morado</option>
            </select>
            <br>
            <input type="date" name="fecha">
            <br>
            <input type="submit" name="enviar" value="enviar">
        </form>

    <?php
    }
    ?>
</body>
</html>