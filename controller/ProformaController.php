<?php

class ProformaController{
    private $proformaModel;
    private $render;

    public function __construct($proformaModel, $render){
        $this->proformaModel = $proformaModel;
        $this->render = $render;
    }

    public function execute(){
            if ($_SESSION['usuario'] != null){
                $data['usuario'] = $_SESSION['usuario'];
                echo $this->render->render("view/proformaView.php", $data);
            }
            else{
                echo $this->render->render("view/errorView.php");
            }
    }

    public function procesarProforma(){
        if (isset($_POST['fechaProforma'])){

            $proforma=$_POST['fechaProforma'];
            $this->proformaModel->guardarProforma($proforma);

            $clienteCuit = $_POST['cuitCliente'];
            $clienteDireccion = $_POST['direccionCliente'];
            $clienteTelefono = $_POST['telefonoCliente'];
            $clienteEmail = $_POST['emailCliente'];
            $this->proformaModel->guardarClienteProforma($clienteCuit, $proforma, $clienteDireccion, $clienteTelefono, $clienteEmail);

            $dniChofer=$_POST['dniChofer'];
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
            $this->proformaModel->guardarCosteoEstimadoProforma($kilometrosEstimado, $combustibleEstimado, $etdCosteoEstimado, $etaCosteoEstimado, $viaticosEstimado, $peajesPesajesEstimado, $extrasEstimado, $hazardEstimado, $reeferEstimado, $feeEstimado, $totalEstimado);

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
            $this->proformaModel->guardarCosteoEstimadoProforma($kilometrosReal, $combustibleReal, $etdCosteoReal, $etaCosteoReal, $viaticosReal, $peajesPesajesReal, $extrasReal, $hazardReal, $reeferReal, $feeReal, $totalReal);

            $dniChofer=$_POST['dniChofer'];
            $this->proformaModel->guardarChoferProforma($dniChofer);

            echo $this->render->render("view/proformaCargadaView.php");

        }
        else{
            echo "error";
        }
    }
    
}