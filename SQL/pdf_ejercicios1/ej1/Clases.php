<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        class cliente{
            private $bd;
            private $nif;
            private $nombre;
            private $edad;
            private $usuario;
            private $pass;
            

            //Cuando llamas al objeto lo que tienes que pasarle sí o sí es la conexión a la base de datos
            public function __construct($db,String $n="",String $nom="",int $ed=0,String $usu="",String $contra=""){
                $this->bd=$db;
                $this->nif=$n;
                $this->nombre=$nom;
                $this->edad=$ed;
                $this->usuario=$usu;
                $this->pass=$contra;
            }


            public function get_datos(){
                $sent="SELECT * FROM cliente;";

                $cons=$this->bd->prepare($sent);
                $cons->bind_result($this->nif,$this->nombre,$this->edad,$this->usuario,$this->pass);
                $cons->execute();

                while($cons->fetch()) echo $this;

                $cons->close(); 
            }

            public function get_select(){
                $sent="SELECT nif, usuario FROM cliente;";

                $cons=$this->bd->prepare($sent);
                $cons->bind_result($this->nif,$this->usuario);
                $cons->execute();

                while($cons->fetch()) echo "<option value=\"".$this->__toString_dni()."\">".$this->__toString_select()."</option>";

                $cons->close(); 
            }
            
            public function crearUsuario(){
                try {
                    // Consulta parametrizada para evitar inyecciones SQL
                    $query = "INSERT INTO cliente (nif, nombre, edad, usuario, pass) VALUES (?, ?, ?, ?, ?)";
                    $stmt = $this->bd->prepare($query);
        
                    if (!$stmt) {
                        throw new Exception("Error al preparar la consulta: " . $this->bd->error);
                    }
        
                    // Vincula los parámetros
                    $stmt->bind_param(
                        "ssiss",  // Tipos de datos: string, string, int, string, string
                        $this->nif,
                        $this->nombre,
                        $this->edad,
                        $this->usuario,
                        $this->pass
                    );
        
                    // Ejecuta la consulta
                    if (!$stmt->execute()) {
                        throw new Exception("Error al ejecutar la consulta: " . $stmt->error);
                    }
        
                    echo "Usuario creado exitosamente.";
        
                    // Cierra el statement
                    $stmt->close();
                } catch (Exception $e) {
                    // Manejo de errores
                    echo "Error: " . $e->getMessage();
                }
            }


            public function __toString(){
                $str = $this->nif."<br>Nombre:".$this->nombre."<br>Edad:".$this->edad."<br>Usuario:".$this->usuario."<br>";
                return $str;
            }
            public function __toString_select(){
                $str = $this->nif." - ".$this->usuario;
                return $str;
            }
            public function __toString_dni(){
                $str = $this->nif;
                return $str;
            }


            public function __destruct(){
                $this->bd->close();
            }
        }



        class venta{
            private $bd;
            private $cliente;
            private $producto;
            private $fecha;
            private $cantidad;
            private $estado;

            public function __construct($db,String $cli="",int $prod=0,String $fech="",int $cant=0,String $est=""){
                // parent::__construct($bd);
                $this->bd=$db;
                $this->cliente=$cli;
                $this->producto=$prod;
                $this->fecha=$fech;
                $this->cantidad=$cant;
                $this->estado=$est;
            }

            public function crearventa(){
                try {
                    // Consulta parametrizada para evitar inyecciones SQL
                    $query = "INSERT INTO venta (cliente, producto, fecha, cantidad, estado) VALUES (?, ?, ?, ?, null)";
                    $stmt = $this->bd->prepare($query);
        
                    if (!$stmt) {
                        throw new Exception("Error al preparar la consulta: " . $this->bd->error);
                    }
        
                    // Vincula los parámetros
                    $stmt->bind_param(
                        "sisi",  // Tipos de datos: string, string, int, string, string
                        $this->cliente,
                        $this->producto,
                        $this->fecha,
                        $this->cantidad
                    );
        
                    // Ejecuta la consulta
                    if (!$stmt->execute()) {
                        throw new Exception("Error al ejecutar la consulta: " . $stmt->error);
                    }
        
                    echo "Venta creada exitosamente.";
        
                    // Cierra el statement
                    $stmt->close();
                } catch (Exception $e) {
                    // Manejo de errores
                    echo "Error: " . $e->getMessage();
                }
            }
        
            public function get_datos(){
                $sent="SELECT v.* FROM cliente c,venta v,producto p where v.cliente=c.nif AND v.producto=p.cod;";

                $cons=$this->bd->prepare($sent);
                $cons->bind_result($this->cliente,$this->producto,$this->fecha,$this->cantidad,$this->estado);
                $cons->execute();

                while($cons->fetch()) echo $this;

                $cons->close(); 
            }


            public function __toString(){
                $str = "<br>NIF CLIENTE:".$this->cliente."<br>Producto ID:".$this->producto."<br>Fecha:".$this->fecha."<br>Cantidad:".$this->cantidad."<br>";
                if($this->estado!=null) $str = $str."Estado: ".$this->estado."<br>";
                else $str = $str."Estado: ".$this->estado."<br>";

                return $str;
            }


            public function __destruct(){
                $this->bd->close();
            }


        }

        class producto{
            private $bd;
            private $descripcion;
            private $precio;

            public function __construct($db, string $d = "", float $p = 0){
                $this->bd = $db;
                $this->descripcion=$d;
                $this->precio=$p;
            }

            public function get_select(){
                $sent="SELECT cod, descripcion FROM producto;";

                $cons=$this->bd->prepare($sent);
                $cons->bind_result($this->cod,$this->descripcion);
                $cons->execute();

                while($cons->fetch()) echo "<option value=\"".$this->__toString_cod()."\">".$this->__toString_select()."</option>";

                $cons->close(); 
            }

            public function getMaxProd(){
                $sent="SELECT MAX(cod) FROM producto;";
                $cons=$this->bd->prepare($sent);
                $cons->bind_result($this->cod);
                $cons->execute();
                while($cons->fetch()) echo "<p>".$cons->fetch()."</p>";
                $cons->close(); 
            }

            public function get_checkbox(){
                $sent="SELECT cod, descripcion FROM producto;";

                $cons=$this->bd->prepare($sent);
                $cons->bind_result($this->cod,$this->descripcion);
                $cons->execute();

                while($cons->fetch()) echo "<input type=\"checkbox\" value=\"".$this->__toString_cod()."\">".$this->__toString_select()."</input>";

                $cons->close(); 
            }


            public function crearProducto(){
                try {
                    // Consulta parametrizada para evitar inyecciones SQL
                    $query = "INSERT INTO producto (descripcion, precio) VALUES (?, ?)";
                    $stmt = $this->bd->prepare($query);
        
                    if (!$stmt) {
                        throw new Exception("Error al preparar la consulta: " . $this->bd->error);
                    }
        
                    // Vincula los parámetros
                    $stmt->bind_param(
                        "sd",  // Tipos de datos: string, string, int, string, string
                        $this->descripcion,
                        $this->precio
                    );
        
                    // Ejecuta la consulta
                    if (!$stmt->execute()) {
                        throw new Exception("Error al ejecutar la consulta: " . $stmt->error);
                    }
        
                    echo "Usuario creado exitosamente.";
        
                    // Cierra el statement
                    $stmt->close();
                } catch (Exception $e) {
                    // Manejo de errores
                    echo "Error: " . $e->getMessage();
                }
            }

            public function __toString_select(){
                $str = $this->cod." - ".$this->descripcion;
                return $str;
            }
            public function __toString_cod(){
                $str = $this->cod;
                return $str;
            }
        }
        
    ?>
</body>
</html>