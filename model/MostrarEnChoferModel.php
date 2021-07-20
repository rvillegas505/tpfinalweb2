<?php

class MostrarEnChoferModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getPrueba(){
        return "prueba1";
    }

    public function getUbicacion(){
        return "Latitud"."-"."Longutid";
    }

    public function registrarPosicionActual($longitud, $latitud, $km, $combustible, $peajes, $extras, $total, $ubifinal, $id){

        $insert = "INSERT INTO `posicion_actual` (`id_posicion_actual`, `longitud`, `latitud`, `km_recorridos`, `combustible_gastado`, `peajes`, `extras`, `total`, `pos_final`, `id_viaje`) VALUES (NULL, '$longitud', '$latitud', '$km', '$combustible', '$peajes', '$extras', '$total', '$ubifinal', '$id');";
        $this->database->execute($insert);
    }

    public function finalizarViaje($estado, $id){
        
        $total = "SELECT SUM(km_recorridos) FROM `transportes`.`posicion_actual` WHERE `posicion_actual`.`id_viaje` = '$id';";
        $totalkm = $this->database->query($total);
        $totalkm = $totalkm['0']['SUM(km_recorridos)'];

        $camionQuery = "SELECT `patente_camion` FROM `transportes`.`viaje` WHERE `id_viaje` = '$id';";
        $camionPatente = $this->database->query($camionQuery);
        $camion = $camionPatente['0']['patente_camion'];
        $sumarKmCamion = "UPDATE `transportes`.`tractor` SET `km_camion` = `km_camion` + '$totalkm' WHERE `tractor_patente`='$camion';";
        $this->database->execute($sumarKmCamion);

        $finalizar = "UPDATE `transportes`.`viaje` SET `estado` = '$estado', `km_totales` = '$totalkm' WHERE (`id_viaje` = '$id');";        
        $this->database->execute($finalizar);
        
    }

    public function listaProformas(){
        return $this->database->query("SELECT id_proforma FROM proforma;");
    }

    public function getViaje($dni){
        $consulta = "SELECT * FROM `transportes`.`viaje` WHERE `dni_chofer` = '$dni' AND `estado` = 'En curso';";
        return $this->database->query($consulta);
    }
}