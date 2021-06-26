<?php

class LoginModel{

    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function consultarUsuario($email, $password){
        $query = "SELECT * from empleados WHERE email = ' . $email 'AND pass = ' . $password";
        $query = $this->database->get('empleados');
        return $query->row();
    }
}

   
?>