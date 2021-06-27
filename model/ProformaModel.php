<?php

class ProformaModel{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }



    public function guardarProforma($proforma){
        $insert = "INSERT INTO `proforma` (dato, dato, dato)" .  $proforma . ";";
        $this->database->execute($insert);
    }
}