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

            // CREACION DE LA CLASE
            class vehiculo {
                
                // VARIABLES
                public $nombre;
                public $tipo;
                public $peso;

                // CONSTRUCTOR
                public function __construct($n="", $t="", $p=0){
                    $this->nombre = $n;
                    $this->tipo = $t;
                    $this->peso = $p;
                }

                // SETTERS
                public function set_nombre($n){
                    $this->nombre = $n;
                }
                public function set_tipo($t){
                    $this->tipo = $t;
                }
                public function set_peso($p){
                    $this->peso = $p;
                }

                //GETTERS
                public function get_nombre(){
                    return $this->nombre;
                }
                public function get_tipo(){
                    return $this->tipo;
                }
                public function get_peso(){
                    return $this->peso;
                }

                // TO STRING
                public function __toString(){
                    $str = "Nombre: ".$this->nombre." / TIPO: ".$this->tipo." /PESO: ".$this->peso;
                    return $str;
                }

                // RESTO

            }
            // RECOGIDA DE DATOS DEL FORMULARIO
            $vehiculo1 = new vehiculo($_POST["nombre1"], $_POST["tipo1"], $_POST["peso1"]);
            $vehiculo2 = new vehiculo($_POST["nombre2"], $_POST["tipo2"], $_POST["peso2"]);

            // COMPARACION DE TIPO Y EN SU CASO DE PESO
            if($vehiculo1->tipo == $vehiculo2->tipo){
                if($vehiculo1->peso > $vehiculo2->peso) echo "<p>El Vehículo 1 llamado ".$vehiculo1->nombre." pesa mas que el vehículo 2 llamado ".$vehiculo2->nombre."</p>";
                elseif($vehiculo1->peso == $vehiculo2->peso) echo "<p>PESAN LO MISMO EL VEHICULO ".$vehiculo1->nombre." Y EL VEHICULO ".$vehiculo2->nombre."</p>";
                else echo "<p>El Vehículo 2 llamado ".$vehiculo2->nombre." pesa mas que el Vehículo 1 llamado ".$vehiculo1->nombre."</p>";
            }else{
                echo "<p>No son vehículos del mismo tipo y por ello no se pueden comparar</p>";
            }

            //
        }else{
    ?>
    <form action="ejercicio2.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nombre1" placeholder="nombre...">
        <br>
        <select name="tipo1">
            <option value="C">CAMION</option>
            <option value="M">MOTO</option>
            <option value="T">TURISMO</option>
        </select>
        <br>
        <input type="number" name="peso1">
        <br>
        <br>
        <input type="text" name="nombre2" placeholder="nombre...">
        <br>
        <select name="tipo2">
            <option value="C">CAMION</option>
            <option value="M">MOTO</option>
            <option value="T">TURISMO</option>
        </select>
        <br>
        <input type="number" name="peso2">
        <br>
        <br>
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
        }
    ?>
</body>
</html>