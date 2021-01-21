<?php
include_once "Compra.php";
class Vendedor
{
    private $id;
    private $nombre;
    private $apellido; 
    private $sexo;
    private $direccion;
    private $telefono;
    private $fechaNacimiento;
    private $fechaContratacion; 
    private $cargo;

    public function __construct( $id, $nombre,$apellido, $sexo,  $direccion,  $telefono, $fechaNacimiento, $fechaContratacion, $cargo)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sexo = $sexo;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->fechaContratacion = $fechaContratacion;
        $this->cargo = $cargo;
    }

   
public function Actualizar(){
      return null;
}   

public function TraerDatosVendedorPorId($id){
   return null;
}

public function TraerDatosVendedorPorNombre($nombre){
    return null;
 }
 
 public function TraerDatosVendedorPorApellido($apellido){
    return null;
 }

 public function TraerDatosVendedorPorSexo($sexo){
    return null;
 }

 public function TraerDatosVendedorPorDireccion($direccion){
    return null;
 }

 public function TraerDatosVendedorPorTelefono($telefono){
    return null;
 }

 public function TraerDatosVendedorPorFechaNacimiento($fechaNacimiento){
    return null;
 }

 public function TraerDatosVendedorPorFechaContratacion($fechaContratacion){
    return null;
 }

 public function TraerDatosVendedorPorCargo($cargo){
    return null;
 }
}