<?php

require_once ('conecction.php');

class AnimalesMoldel{
    static public function mdlObtenerAnimales(){
        $stmt = Conecction::conectar()->prepare("SELECT * FROM animales");
        if ($stmt->execute()){
            return $stmt->fetchAll();
        }else{
            return 'ERROR';
        }

        $stmt->close();
        $stmt=null;

    }

}