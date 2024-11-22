<?php
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
    class perro extends animal
    {
        public $raza;
        public $sexo;

        public function __construct ($n="", $c="", $fn="2000-01-01", $r, $sx){
            parent::__construct($n="", $c="", $fn="2000-01-01");
            $this->raza = $n;
            $this->sexo = $c;
        }

        public function ladrar(){
            echo "<p>".$this->nombre." dice Guau</p>";
        }
        public function dormir(){
            echo "<p>".$this->nombre." se ha dormido</p>";
        }
    }
    class delfin extends animal
    {
        public $longitud;

        public function __construct ($n="", $c="", $fn="2000-01-01", $l){
            parent::__construct($n="", $c="", $fn="2000-01-01");
            $this->longitud = $l;
        }

        public function saltar(){
            echo "<p>".$this->nombre." está saltando por los aires</p>";
        }
        public function comer(){
            echo "<p>".$this->nombre." tiene hambre</p>";
        }
    }
    
?>