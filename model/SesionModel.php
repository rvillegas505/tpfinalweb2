<?php

class SesionModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getUsuario($usuario, $clave){
        $sql = "SELECT *  FROM empleados WHERE dni='".$usuario."' AND pass='".$clave."' AND activo='1'";
        return $this->database->query($sql);
    }

}