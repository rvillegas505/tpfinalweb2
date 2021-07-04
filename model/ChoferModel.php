<?php

class ChoferModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function registrarPosicionActual($km, $combustible, $peajes, $extras, $total){
        $insert = "INSERT INTO `posicion_actual` (`id_posicion_actual`, `km_recorridos`, `combustible_gastado`, `peajes`, `extras`, `total`) VALUES (NULL, '$km','$combustible', '$peajes', '$extras', '$total');";
        $this->database->execute($insert);
    }
}

?>
