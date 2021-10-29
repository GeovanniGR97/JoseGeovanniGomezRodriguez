<?php

class BD{

    private static $instancia=NULL;
    public static function crearInstancia(){
        if(!isset(self::$instancia)){
            $opcionesPDO[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;
            self::$instancia= new PDO('mysql:host=3.141.28.242;dbname=cliente','geovanni','geovanni97', $opcionesPDO);
        }
        return self::$instancia;
    }



}



?>