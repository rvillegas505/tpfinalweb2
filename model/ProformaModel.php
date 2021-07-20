<?php

class ProformaModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }


    public function guardarProforma($fechaProforma, $dniChofer, $nombreCliente, $cuitCliente, $direccionCliente, $clienteTelefono, $emailCliente, $origenViaje, $destinoViaje, $fechaCarga,$camionPatente , $tipoCarga, $pesoNeto, $kilometrosEstimado, $combustibleEstimado, $etdCosteoEstimado, $etaCosteoEstimado, $viaticosEstimado, $peajesPesajesEstimado, $extrasEstimado, $hazardEstimado, $reeferEstimado, $feeEstimado, $totalEstimado){
        $insert = "INSERT INTO `proforma` (`id_proforma`, `fecha_proforma`, `dni_chofer`, `nombre_cliente`, `cuit_cliente`, `direccion_cliente`, `telefono_cliente`, `email_cliente`, `origen_viaje`, `destino_viaje`, `fecha_carga_viaje`,`camion_patente` , `tipo_carga`, `peso_neto_carga`, `km_estimado`, `combustible_estimado`, `etd_estimado`,`eta_estimado` , `viaticos_estimado`, `peajes_estimado`, `extras_estimado`, `hazard_estimado`, `reefer_estimado`, `fee_estimado`, `total_estimado`) VALUES (NULL, '$fechaProforma', '$dniChofer', '$nombreCliente', '$cuitCliente', '$direccionCliente', '$clienteTelefono', '$emailCliente', '$origenViaje', '$destinoViaje', '$fechaCarga', '$camionPatente', '$tipoCarga', '$pesoNeto', '$kilometrosEstimado', '$combustibleEstimado', '$etdCosteoEstimado', '$etaCosteoEstimado', '$viaticosEstimado', '$peajesPesajesEstimado', '$extrasEstimado', '$hazardEstimado', '$reeferEstimado', '$feeEstimado', '$totalEstimado');";
        $this->database->execute($insert);

        $insert = "INSERT INTO `viaje` (`id_viaje`,`dni_chofer`,`origen`,`destino`,`fecha_de_carga`,`eta`,`estado`,`km_totales`,`patente_camion`) VALUES (NULL,'$dniChofer','$origenViaje','$destinoViaje','$fechaCarga','$etaCosteoEstimado', 'En curso', NULL,'$camionPatente');";
        $this->database->execute($insert);
    }
    
    public function verChoferesDisponibles(){
        $query = "SELECT * FROM `empleados` WHERE `empleados`.`rol` = 'chofer' AND `empleados`.`disponible` = TRUE;";
        return $this->database->query($query);
    }
}