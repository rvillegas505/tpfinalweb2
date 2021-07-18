<?php

class MostrarEnChoferModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    /* public function getProformas(){
        return $this->database->query("SELECT * FROM transportes.proforma;");
    }

    public function getEmpleados(){
        return $this->database->query("SELECT * FROM transportes.empleados;");
    } */
    public function getPrueba(){
        return "prueba1";
    }

    public function getUbicacion(){
        return "Latitud"."-"."Longutid";
    }

    public function registrarPosicionActual($longitud, $latitud, $km, $combustible, $peajes, $extras, $total, $ubifinal){
        $insert = "INSERT INTO `posicion_actual` (`id_posicion_actual`, `longitud`, `latitud`, `km_recorridos`, `combustible_gastado`, `peajes`, `extras`, `total`, `pos_final`) VALUES (NULL, '$longitud', '$latitud', '$km', '$combustible', '$peajes', '$extras', '$total', '$ubifinal');";
        $this->database->execute($insert);
    }

    public function finalizarViaje($estado){
        $total = "SELECT SUM(km_recorridos) FROM `transportes`.`posicion_actual`;";
        $totalkm = $this->database->query($total);
        $totalkm = $totalkm['0']['SUM(km_recorridos)'];

        $finalizar = "UPDATE `transportes`.`viaje` SET `estado` = '$estado', `km_totales` = '$totalkm' WHERE (`id_viaje` = '1');";        
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