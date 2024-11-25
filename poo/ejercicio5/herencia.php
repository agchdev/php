<?php
// Incluir el archivo donde están las clases
include 'class.articulo.php';

 final class ArticuloRebajado extends Articulo{
    private $rebaja;

    public function __construct ($pRebaja, $pNombre, $pPrecio){
        parent::__construct($pNombre, $pPrecio);
        $this->rebaja = $pRebaja;
    }

    function calculaDescuento(){
        $descuento = (this->precio * this->rebaja)/100;
        return $descuento;
    }

    function precioRebajado(){
        $descuento = calculaDescuento();
        $rebajado = $descuento - this->precio;
        return $rebajado;
    }

    function __toString() { // Llamar correctamente al __toString() de la clase padre
        $str = 'La rebaja es: ' . $this->rebaja . ' % <br/> El descuento es ' . $this->calculaDescuento() . '€';
        return $str; // Asegurarse de retornar el valor final
    }
 }
?>