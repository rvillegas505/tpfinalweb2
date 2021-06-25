<?php

class SesionModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getUsuario($usuario, $clave){
        $sql = "SELECT * FROM empleados where dni='$usuario' and pass='$clave'";
        return $this->database->query($sql);
    }

}