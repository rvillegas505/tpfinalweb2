<?php

class ChoferModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function registrarPosicionActual($posicion, $proforma_id, $km, $combustible, $peajes, $extras, $total){
        $insert = "INSERT INTO `posicion_actual` (`id_posicion_actual`, `id_proforma`, `km_recorridos`, `combustible_gastado`, `peajes`, `total`) VALUES ('$posicion', '$proforma_id', '$km','$combustible', '$peajes', '$extras', '$total');";
        $this->database->execute($insert);
    }

    public function calcularTotalDesdePosicionActual($km, $combustible, $peajes, $extras, $proforma_id){
        $total = $km + $combustible + $peajes + $extras;
        $update = "UPDATE `posicion_actual` SET `total` = '$total' WHERE `id_proforma` = '$proforma_id';";
    }
}

?>
