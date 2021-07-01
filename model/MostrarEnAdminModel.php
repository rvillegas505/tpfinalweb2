<?php

class MostrarEnAdminModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getProformas(){
        return $this->database->query("SELECT * FROM transportes.proforma;");
    }

    public function getEmpleados(){
        return $this->database->query("SELECT * FROM transportes.empleados;");
    }
}