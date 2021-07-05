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

    public function registrarPosicionActual($proforma, $longitud, $latitud, $km, $combustible, $peajes, $extras, $total){
        $insert = "INSERT INTO `posicion_actual` (`id_posicion_actual`, `id_proforma`, `longitud`, `latitud`, `km_recorridos`, `combustible_gastado`, `peajes`, `extras`, `total`) VALUES (NULL, '$proforma', '$longitud', '$latitud', '$km', '$combustible', '$peajes', '$extras', '$total');";
        $this->database->execute($insert);
    }

    public function listaProformas(){
        return $this->database->query("SELECT id_proforma FROM proforma;");
    }
}