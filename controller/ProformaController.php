<?php

class ProformaController{
    private $proformaModel;
    private $mostrarEnAdminModel;
    private $render;

    public function __construct($proformaModel, $mostrarEnAdminModel, $render){
        $this->proformaModel = $proformaModel;
        $this->mostrarEnAdminModel = $mostrarEnAdminModel;
        $this->render = $render;
    }

    public function execute(){
            if ($_SESSION['usuario'] != null){
                $data['usuario'] = $_SESSION['usuario'];
                $data['empleados'] = $this->proformaModel->verChoferesDisponibles();
                $data['tractor'] = $this->mostrarEnAdminModel->getTractores();
                echo $this->render->render("view/proformaView.php", $data);
            }
            else{
                echo $this->render->render("view/errorView.php");
            }
    }

    
    public function verChoferesDisponibles(){
        $data['empleados'] = $this->proformaModel->verChoferesDisponibles();
        $data['usuario'] = $_SESSION['usuario'];
        echo $this->render->render("view/proformaView.php", $data);
    }

    public function procesarProforma(){
        if (isset($_POST['submit'])){

            $fechaProforma=$_POST['fechaProforma'];
            $dniChofer=$_POST['dniChofer'];
            $nombreCliente = $_POST['nombreCliente'];
            $cuitCliente = $_POST['cuitCliente'];
            $direccionCliente = $_POST['direccionCliente'];
            $clienteTelefono = $_POST['telefonoCliente'];
            $emailCliente = $_POST['emailCliente'];
            $origenViaje = $_POST['origenViaje'];
            $destinoViaje = $_POST['destinoViaje'];
            $fechaCarga = $_POST['fechaCarga'];
            $camionPatente = $_POST['patenteCamion'];
            $tipoCarga=$_POST['tipoCarga'];
            $pesoNeto = $_POST['pesoNeto'];
            $kilometrosEstimado=$_POST['kilometrosEstimado'];
            $combustibleEstimado = $_POST['combustibleEstimado'];
            $etdCosteoEstimado = $_POST['etdCosteoEstimado'];
            $etaCosteoEstimado = $_POST['etaCosteoEstimado'];
            $viaticosEstimado = $_POST['viaticosEstimado'];
            $peajesPesajesEstimado = $_POST['peajesPesajesEstimado'];
            $extrasEstimado = $_POST['extrasEstimado'];
            $hazardEstimado = $_POST['hazardEstimado'];
            $reeferEstimado = $_POST['reeferEstimado'];
            $feeEstimado = $_POST['feeEstimado'];
            $totalEstimado = $combustibleEstimado + $viaticosEstimado + $peajesPesajesEstimado + $extrasEstimado;
            $this->proformaModel->guardarProforma($fechaProforma, $dniChofer, $nombreCliente, $cuitCliente, $direccionCliente, $clienteTelefono, $emailCliente, $origenViaje, $destinoViaje, $fechaCarga, $camionPatente , $tipoCarga, $pesoNeto, $kilometrosEstimado, $combustibleEstimado, $etdCosteoEstimado, $etaCosteoEstimado, $viaticosEstimado, $peajesPesajesEstimado, $extrasEstimado, $hazardEstimado, $reeferEstimado, $feeEstimado, $totalEstimado);
            $this->mostrarEnAdminModel->cambiarANoDisponible($dniChofer);
            //AL MISMO TIEMPO DE REGISTRAR PROFORMA REGISTRA VIAJE.
            /*$dniChofer=$_POST['dniChofer'];
            $this->proformaModel->guardarChoferProforma($dniChofer);

            $origenViaje = $_POST['origenViaje'];
            $destinoViaje = $_POST['destinoViaje'];
            $fechaCarga = $_POST['fechaCarga'];
            $etaViaje = $_POST['etaViaje'];
            $this->proformaModel->guardarViajeProforma($dniChofer, $origenViaje, $destinoViaje, $fechaCarga, $etaViaje);

            $tipoCarga=$_POST['tipoCarga'];
            $pesoNeto = $_POST['pesoNeto'];
            $this->proformaModel->guardarCargaProforma($tipoCarga, $pesoNeto);

            $kilometrosEstimado=$_POST['kilometrosEstimado'];
            $combustibleEstimado = $_POST['combustibleEstimado'];
            $etdCosteoEstimado = $_POST['etdCosteoEstimado'];
            $etaCosteoEstimado = $_POST['etaCosteoEstimado'];
            $viaticosEstimado = $_POST['viaticosEstimado'];
            $peajesPesajesEstimado = $_POST['peajesPesajesEstimado'];
            $extrasEstimado = $_POST['extrasEstimado'];
            $hazardEstimado = $_POST['hazardEstimado'];
            $reeferEstimado = $_POST['reeferEstimado'];
            $feeEstimado = $_POST['feeEstimado'];
            $totalEstimado = $_POST['totalEstimado'];
            $this->proformaModel->guardarCosteoEstimadoProforma($fechaProforma, $kilometrosEstimado, $combustibleEstimado, $etdCosteoEstimado, $etaCosteoEstimado, $viaticosEstimado, $peajesPesajesEstimado, $extrasEstimado, $hazardEstimado, $reeferEstimado, $feeEstimado, $totalEstimado);

            $kilometrosReal = $_POST['kilometrosReal'];
            $combustibleReal = $_POST['combustibleReal'];
            $etdCosteoReal = $_POST['etdCosteoReal'];
            $etaCosteoReal = $_POST['etaCosteoReal'];
            $viaticosReal = $_POST['viaticosReal'];
            $peajesPesajesReal = $_POST['peajesPesajesReal'];
            $extrasReal = $_POST['extrasReal'];
            $hazardReal = $_POST['hazardReal'];
            $reeferReal = $_POST['reeferReal'];
            $feeReal = $_POST['feeReal'];
            $totalReal = $_POST['totalReal'];
            $this->proformaModel->guardarCosteoEstimadoProforma($fechaProforma, $kilometrosReal, $combustibleReal, $etdCosteoReal, $etaCosteoReal, $viaticosReal, $peajesPesajesReal, $extrasReal, $hazardReal, $reeferReal, $feeReal, $totalReal);
            */

            $data['usuario'] = $_SESSION['usuario'];
            echo $this->render->render("view/proformaCargadaView.php", $data);

        }
        else{
            echo "error";
        }
    }
    
}