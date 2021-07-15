<?php

class ArrastradoModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }


    public function guardarArrastrado($tipo, $patente, $chasis)
    {
        $insert = "INSERT INTO `arrastrado` (`arrastrado_tipo`, `arrastrado_patente`, `arrastrado_chasis`) VALUES ('$tipo','$patente','$chasis');";
        $this->database->execute($insert);
    }

}