<?php

class MostrarEnChoferModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    /* public function getProformas(){
        return $this->database->query("SELECT * FROM transportes.proforma;");
    }

    public function getEmpleados(){
        return $this->database->query("SELECT * FROM transportes.empleados;");
    } */
    public function getPrueba(){
        return "prueba1";
    }

    public function getUbicacion(){
        return "Latitud"."-"."Longutid";
    }
}