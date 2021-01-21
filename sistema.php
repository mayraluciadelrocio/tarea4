<?php

class Sistema
{
    private $idsistema;
    private $sitioweb;
    private $idvendedor;
    private $idusuario;

    function __construct($idsistema='',$sitioweb='',$idvendedor='',$idusuario=''){
        $this->idsistema = $idsistema;
        $this->sitioweb = $sitioweb;
        $this->idvendedor = $idvendedor;
        $this->idusuario = $idusuario;
    }

    public function actualizar(){
        return null;
    }
    public function traerDatosSistemaPorId($id){
        return null;
    }
    public function traerDatosSistemaPorSitioweb($sitioweb){
        return null;
    }
    public function traerDatosSistemaPorIdvendedor($idvendedor){
        return null;
    }
    public function traerDatosSistemaPorIdusuario($idusuario){
        return null;
    }
}

