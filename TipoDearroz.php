<?php
include_once "arroz.php";
class TipoDeHamburguesa
{
    private $id;
    private $descripcion;
    
    public function __construct( $id,  $descripcion)
    {
        $this->id = $id;
        $this->descripcion = $descripcion;
    }

   public function Actualizar(){
        return null;
   }   
  
  public function TraerDatosTipoDearrozPorId($id){
     return null;
  }

  public function TraerDatosTipoDearrozPorIdSitioWeb($sitioWeb){
    return null;
}
    
}