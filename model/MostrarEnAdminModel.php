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

    public function bajaEmpleado($dni){

        $query = "DELETE FROM `empleados` WHERE `empleados`.`dni` = '$dni'";
        $this->database->execute($query);
    }

    public function rolEmpleado($dni, $rol){

        $query = "UPDATE `empleados` SET `empleados`.`rol` = '$rol' WHERE `empleados`.`dni` = '$dni'";
        $this->database->execute($query);
    }

    public function bajaProforma($id){

        $query = "DELETE FROM `proforma` WHERE `proforma`.`id_proforma` = '$id' ";
        $this->database->execute($query);

    }

    public function verProforma($id){
        $query= "SELECT * FROM `proforma` WHERE `proforma`.`id_proforma` = '$id'";
        return $this->database->query($query);
    }

    public function cambiarADisponible($dni){
        $query = "UPDATE `empleados` SET `empleados`.`disponible` = TRUE WHERE `empleados`.`dni` = '$dni';";
        $this->database->execute($query);
    }

    public function cambiarANoDisponible($dni){
        $query = "UPDATE `empleados` SET `empleados`.`disponible` = FALSE WHERE `empleados`.`dni` = '$dni';";
        $this->database->execute($query);
    }
}