<?php

class ProformaModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }



    public function guardarProforma($proforma){
        $insert = "INSERT INTO `proforma` (`id_proforma`, `fecha_proforma`) VALUES (NULL, '$proforma');";
        $this->database->execute($insert);
    }

    public function guardarChoferProforma($dni){
        $insert = "INSERT INTO `chofer` (dni) VALUES (" .  $dni . ");";
        $this->database->execute($insert);
    }

    public function guardarClienteProforma($cuit, $id_proforma, $direccion, $telefono, $email){
        $insert = "INSERT INTO `cliente` (`cuit`, `id_proforma`, `direccion`, `telefono`, `email`) VALUES ('$cuit', '$id_proforma', '$direccion', '$telefono', '$email');";
        $this->database->execute($insert);
    }

    public function getProformas(){
        $sql = "SELECT * FROM proforma";
        return $this->database->query($sql);
    }
}