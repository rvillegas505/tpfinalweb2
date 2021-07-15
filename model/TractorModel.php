<?php

class TractorModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }


    public function guardarTractor($marca, $modelo, $patente, $motor, $chasis)
    {
        $insert = "INSERT INTO `tractor` (`tractor_marca`, `tractor_modelo`, `tractor_patente`, `tractor_motor`, `tractor_chasis`) VALUES ('$marca', '$modelo', '$patente', '$motor', '$chasis');";
        $this->database->execute($insert);
    }

}