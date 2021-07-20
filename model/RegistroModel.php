<?php

class RegistroModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function guardarRegistro($registro){
        $insert = "INSERT INTO `empleados` (nombreApellido, dni, fechaNac, email, pass, hash)" .  $registro . ";";
        $this->database->execute($insert);
    }

    public function getCorreo($email){
        $sql = "SELECT * FROM empleados WHERE email = '$email'";
        return $this->database->query($sql);
    }
}