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
    }
    public function verChoferesDisponibles(){
        $query = "SELECT * FROM `empleados` WHERE `empleados`.`rol` = 'chofer' AND `empleados`.`disponible` = TRUE;";
        return $this->database->query($query);
    }

    /*
        public function guardarClienteProforma($cuit, $id_proforma, $direccion, $telefono, $email){
            $insert = "INSERT INTO `cliente` (`cuit`, `id_proforma`, `direccion`, `telefono`, `email`) VALUES ('$cuit', '$id_proforma', '$direccion', '$telefono', '$email');";
            $this->database->execute($insert);
        }

        public function guardarChoferProforma($dni){
            $insert = "INSERT INTO `chofer` (dni) VALUES ('$dni');";
            $this->database->execute($insert);
        }


            public function guardarViajeProforma($dniChofer, $origenViaje, $destinoViaje, $fechaCarga, $etaViaje){
                $insert = "INSERT INTO `viaje` (`id_viaje`,`id_proforma`,`dni_chofer`,`origen`,`destino`,`fecha_carga`,`eta`) VALUES (NULL, NULL, '$dniChofer', '$origenViaje', '$destinoViaje', '$fechaCarga', '$etaViaje');";
                $this->database->execute($insert);
            }

            public function guardarCargaProforma($tipoCarga, $pesoNeto){
                $insert = "INSERT INTO `carga` (`id_carga`,`tipo_carga`,`peso_neto`) VALUES (NULL,'$tipoCarga', '$pesoNeto');";
                $this->database->execute($insert);
            }

            public function guardarCosteoEstimadoProforma($id_proforma, $kilometrosEstimado, $combustibleEstimado, $etdCosteoEstimado, $etaCosteoEstimado, $viaticosEstimado, $peajesPesajesEstimado, $extrasEstimado, $hazardEstimado, $reeferEstimado, $feeEstimado, $totalEstimado){
                $insert = "INSERT INTO `costeo_estimado` (`id_costeo_estimado`,`id_proforma`,`km_estimado`,`combustible_estimado`,`etd_estimado`,`eta_estimado`,`viaticos_estimado`,`peajes_estimado`,`extras_estimado`,`hazard_estimado`,`reefer_estimado`,`fee_estimado`,`total_estimado`) VALUES (NULL, '$id_proforma','$kilometrosEstimado','$combustibleEstimado','$etdCosteoEstimado','$etaCosteoEstimado','$viaticosEstimado','$peajesPesajesEstimado','$extrasEstimado','$hazardEstimado','$reeferEstimado','$feeEstimado','$totalEstimado');";
                $this->database->execute($insert);
            }

            public function guardarCosteoRealProforma ($id_proforma, $kilometrosReal, $combustibleReal, $etdCosteoReal, $etaCosteoReal, $viaticosReal, $peajesPesajesReal, $extrasReal, $hazardReal, $reeferReal, $feeReal, $totalReal){
                $insert = "INSERT INTO `costeo_real` (`id_costeo_real`,`id_proforma`,`km_real`,`combustible_real`,`etd_real`,`eta_real`,`viaticos_real`,`peajes_real`,`extras_real`,`hazard_real`,`reefer_real`,`fee_real`,`total_real`) VALUES (NULL, '$id_proforma','$kilometrosReal','$combustibleReal','$etdCosteoReal','$etaCosteoReal','$viaticosReal','$peajesPesajesReal','$extrasReal','$hazardReal','$reeferReal','$feeReal','$totalReal');";
                $this->database->execute($insert);
            }
*/
}