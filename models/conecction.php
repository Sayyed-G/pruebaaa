<?php
class Conecction{

    static public function conectar(){
        $cnx = new PDO("mysql:host=localhost;dbname=animales;charset=utf8","root","",[
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                        PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES utf8"
        ]);

        return $cnx;

    }

}

