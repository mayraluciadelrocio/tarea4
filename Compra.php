<?php
include_once "Usuario.php";
include_once "Vendedor.php";
include_once "DetallesDeCompra.php";
class Compra
{
    private $id;
    private $fechaVenta;
    private $precioTotal; 
    private $delivery;


    public function __construct( $id, $fechaVenta,$precioTotal, $delivery)
    {
        $this->id = $id;
        $this->fechaVenta = $fechaVenta;
        $this->precioTotal = $precioTotal;
        $this->delivery = $delivery;
    }

   
public function Actualizar(){
      return null;
}   

public function TraerDatosCompraPorId($id){
   return null;
}

public function TraerDatosCompraPorFechaVenta($fechaVenta){
    return null;
 }
 
 public function TraerDatosCompraPorPrecioTotal($precioTotal){
    return null;
 }

 public function TraerDatosCompraPorDelivery($delivery){
    return null;
 }
}
 