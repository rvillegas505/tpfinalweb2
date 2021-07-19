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

    public function getTractores(){
        return $this->database->query("SELECT tractor_marca,tractor_modelo,tractor_patente,tractor_motor,tractor_chasis,km_camion FROM transportes.tractor;");
    }

    public function bajaTractor($patente){

        $query = "DELETE FROM `tractor` WHERE `tractor`.`tractor_patente` = '$patente'";
        $this->database->execute($query);
    }

    public function verTractores($patente){
        $query= "SELECT * FROM `tractor` WHERE `tractor`.`tractor_patente` = '$patente'";
        return $this->database->query($query);
    }

    public function editTractor($tractor_marca, $tractor_modelo, $tractor_patente, $tractor_motor, $tractor_chasis, $patente_arrastrado) {

        $query = "UPDATE `tractor` SET `tractor`.`tractor_marca` = '$tractor_marca', `tractor`.`tractor_modelo`= '$tractor_modelo', `tractor`.`tractor_patente` = '$tractor_patente' , `tractor`.`tractor_motor` = '$tractor_motor' ,
        `tractor`.`tractor_chasis` = '$tractor_chasis', `tractor`.`patente_arrastrado` = '$patente_arrastrado' WHERE `tractor`.`tractor_patente` = '$tractor_patente'";
        $this->database->execute($query);
    }

    public function getArrastrados(){
        return $this->database->query("SELECT arrastrado_tipo,arrastrado_patente,arrastrado_chasis FROM transportes.arrastrado;");
    }

    public function bajaArrastrado($patente){

        $query = "DELETE FROM `arrastrado` WHERE `arrastrado`.`arrastrado_patente` = '$patente'";
        $this->database->execute($query);
    }

    public function bajaEmpleado($dni){

        $query = "DELETE FROM `empleados` WHERE `empleados`.`dni` = '$dni'";
        $this->database->execute($query);
    }

    public function verArrastrados($patente){
        $query= "SELECT * FROM `arrastrado` WHERE `arrastrado`.`arrastrado_patente` = '$patente'";
        return $this->database->query($query);
    }

    public function editArrastrado($arrastrado_tipo, $arrastrado_patente, $arrastrado_chasis) {

        $query = "UPDATE `arrastrado` SET `arrastrado`.`arrastrado_tipo` = '$arrastrado_tipo', `arrastrado`.`arrastrado_patente`= '$arrastrado_patente', `arrastrado`.`arrastrado_chasis` = '$arrastrado_chasis'
        WHERE `arrastrado`.`arrastrado_patente` = '$arrastrado_patente'";
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

    public function getPosicionesViaje($id){

        $query = "SELECT * FROM `posicion_actual` WHERE `posicion_actual`.`id_viaje` = '$id';";
        return $this->database->query($query);
    }


    public function getViaje($id){

        $query = "SELECT * FROM `viaje` WHERE `viaje`.`id_viaje` = '$id';";
        return $this->database->query($query);
    }
}