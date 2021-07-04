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

    public function registrarPosicionActual($km, $longitud, $latitud, $combustible, $peajes, $extras, $total){
        $insert = "INSERT INTO `posicion_actual` (`id_posicion_actual`, `longitud`, `latitud`, `km_recorridos`, `combustible_gastado`, `peajes`, `extras`, `total`) VALUES (NULL, '$km', '$longitud', '$latitud', '$combustible', '$peajes', '$extras', '$total');";
        $this->database->execute($insert);
    }
}