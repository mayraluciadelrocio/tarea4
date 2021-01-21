<?php

include_once "Direccion.php";

use clases\ConexionDB as db;

require_once "config/autoload.php";

class Usuario
{
    private $idusuario
    private $nombre;
    private $apellidos;
    private $sexo;
    private $direccion;
    private $telefono;
    private $correo;
    private $pass;
    private $usuarios;// remitente o destinatario
    
    function __construct($idusuario='',$nombre='', $apellidos='', $sexo ='', $direccion ='', $telefono ='', $correo ='', $pass =''){
        $this->idusuario = $idusuario;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sexo = $sexo;
        $this->direccion = $direccion;
        $this->telefono=$telefono;
        $this->correo= $correo;
        $this->pass=$pass;
    }
    
    public function actualizar(){
        return null;
    }   
    public function treaerDatosUsuarioPorId($id){
        return null;
    }
    public function traerDatosUsuarioPorNombre($nombre){
        return null;
    }
    public function traerDatosUsuarioPorSexo($sexo){
        return null;
    }
    public function traerDatosUsuarioPorDireccion($direccion){
        return null;
    }
    public function traerDatosUsuarioPorTelefono($telefono){
        return null;
    }
    public function traerDatosUsuarioPorCorreo($correo){
        return null;
    }
    public function traerDatosUsuarioporPass($pass){
        return null;
    }
    


}