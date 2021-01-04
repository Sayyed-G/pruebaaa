<?php
include_once ("ConexionDB.php");

class Cliente
{
    private $dni;
    private $nombre;
    private $direccion;

    public function insertar(){
        try{
            $miconexion = new conexionDB();
            $con = $miconexion->abrirConexion();
            $miconexion->cerrarConexion();
        }
    }