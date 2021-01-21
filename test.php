<?php
use clases\ConexionDB as db;
include "../config/ConexionDB.php";
$resultados = null;
    try{
        $db = new db();
        $conn = $db->abrirConexion();

        $sql = "SELECT * FROM usuario";

        
        $respuesta = $conn->prepare($sql);
        $respuesta->execute();
        $resultados= $respuesta->fetchAll();
        
        $db->cerrarConexion();
    }
catch(Exception $e){
    echo $e->getMessage();
}
var_dump($resultados);
