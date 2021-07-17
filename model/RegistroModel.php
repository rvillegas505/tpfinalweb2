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

    //Este guardarregistro2 lo hice para ver probar mas rapido a ver porque no me ejecuta la sentencia SQL para guardar
    public function guardarRegistro2(){
        $this->database->execute("INSERT INTO empleados (nombreApellido, dni, email, pass) VALUES ('rodri', '12345678', 'rodri@gmail.com', '123456'");
    }

    public function getCorreo($email){
        $sql = "SELECT * FROM empleados WHERE email = '$email'";
        return $this->database->query($sql);
    }
}