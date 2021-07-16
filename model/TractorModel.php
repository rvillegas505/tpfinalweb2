<?php

class TractorModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }


    public function guardarTractor($marca, $modelo, $patente, $motor, $chasis, $patente_arrastrado)
    {
        $insert = "INSERT INTO `tractor` (`tractor_marca`, `tractor_modelo`, `tractor_patente`, `tractor_motor`, `tractor_chasis`, `patente_arrastrado`) VALUES ('$marca', '$modelo', '$patente', '$motor', '$chasis', '$patente_arrastrado');";
        $this->database->execute($insert);
    }

}