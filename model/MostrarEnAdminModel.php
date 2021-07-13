<?php

class MostrarEnAdminModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getProformas(){
        return $this->database->query("SELECT * FROM transportes.proforma;");
    }

    public function getEmpleados(){
        return $this->database->query("SELECT * FROM transportes.empleados;");
    }

    public function bajaEmpleado($dni){

        $query = "DELETE FROM `empleados` WHERE `empleados`.`dni` = '$dni'";
        $this->database->execute($query);
    }

    public function rolEmpleado($dni, $rol){

        $query = "UPDATE `empleados` SET `empleados`.`rol` = '$rol' WHERE `empleados`.`dni` = '$dni'";
        $this->database->execute($query);
    }

    public function bajaProforma($id){

        $query = "DELETE FROM `proforma` WHERE `proforma`.`id_proforma` = '$id' ";
        $this->database->execute($query);

    }

    public function verProforma($id){
        $query= "SELECT * FROM `proforma` WHERE `proforma`.`id_proforma` = '$id'";
        return $this->database->query($query);
    }

    public function cambiarADisponible($dni){
        $query = "UPDATE `empleados` SET `empleados`.`disponible` = TRUE WHERE `empleados`.`dni` = '$dni';";
        $this->database->execute($query);
    }

    public function cambiarANoDisponible($dni){
        $query = "UPDATE `empleados` SET `empleados`.`disponible` = FALSE WHERE `empleados`.`dni` = '$dni';";
        $this->database->execute($query);
    }

    public function editProforma($id, $fechaProforma, $dniChofer, $nombreCliente, $cuitCliente, $direccionCliente, $clienteTelefono, $emailCliente, $origenViaje, $destinoViaje, $fechaCarga, $tipoCarga, $pesoNeto, $kilometrosEstimado, $combustibleEstimado, $etdCosteoEstimado, $etaCosteoEstimado, $viaticosEstimado, $peajesPesajesEstimado, $extrasEstimado, $hazardEstimado, $reeferEstimado, $feeEstimado, $totalEstimado){

        $query = "UPDATE `proforma` SET `proforma`.`fecha_proforma` = '$fechaProforma', `proforma`.`dni_chofer`= '$dniChofer', `proforma`.`nombre_cliente` = '$nombreCliente' , `proforma`.`cuit_cliente` = '$cuitCliente' ,
        `proforma`.`direccion_cliente` = '$direccionCliente' , `proforma`.`telefono_cliente` = '$clienteTelefono' ,
        `proforma`.`email_cliente` = '$emailCliente', `proforma`.`origen_viaje` = '$origenViaje' ,
        `proforma`.`destino_viaje` = '$destinoViaje' , `proforma`.`fecha_carga_viaje` = '$fechaCarga',
        `proforma`.`tipo_carga` = '$tipoCarga' , `proforma`.`peso_neto_carga` = '$pesoNeto', 
        `proforma`.`km_estimado` = '$kilometrosEstimado' , `proforma`.`combustible_estimado` = '$combustibleEstimado' ,
        `proforma`.`etd_estimado` = '$etdCosteoEstimado' , `proforma`.`eta_estimado` = '$etaCosteoEstimado' ,
        `proforma`.`viaticos_estimado` = '$viaticosEstimado' , `proforma`.`peajes_estimado` = '$peajesPesajesEstimado' , `proforma`.`extras_estimado` = '$extrasEstimado' , `proforma`.`hazard_estimado` = '$hazardEstimado' ,
        `proforma`.`reefer_estimado` = '$reeferEstimado' , `proforma`.`fee_estimado` = '$feeEstimado' , 
        `proforma`.`total_estimado` = '$totalEstimado'
        WHERE `proforma`.`id_proforma` = '$id' ";
        $this->database->execute($query);
    }
}