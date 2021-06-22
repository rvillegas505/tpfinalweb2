<?php

class RegistroModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function guardarRegistro($registro){
        $insert = "INSERT INTO `empleados` (nombreApellido, dni, fechaNac, email, pass)" .  $registro . ";";
        $this->database->execute($insert);
    }

    //Este guardarregistro2 lo hice para ver probar mas rapido a ver porque no me ejecuta la sentencia SQL para guardar
    public function guardarRegistro2(){
        $this->database->execute("INSERT INTO empleados (nombreApellido, dni, email, pass) VALUES ('rodri', '12345678', 'rodri@gmail.com', '123456'");
    }

    public function getCancion($id){
        $sql = "SELECT * FROM canciones where idCancion = " . $id;
        return $this->database->query($sql);
    }

    public function existeEmail($email){
        $sql = "SELECT * FROM empleados where email = " . $email;
        return $this->database->query($sql);
    }
}