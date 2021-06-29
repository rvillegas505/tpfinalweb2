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

            $choferdni=$_POST['dniChofer'];
            $this->proformaModel->guardarChoferProforma($choferdni);

            $clienteCuit = $_POST['cuitCliente'];
            $clienteDireccion = $_POST['direccionCliente'];
            $clienteTelefono = $_POST['telefonoCliente'];
            $clienteEmail = $_POST['emailCliente'];
            $this->proformaModel->guardarClienteProforma($clienteCuit, $proforma, $clienteDireccion, $clienteTelefono, $clienteEmail);

            echo $this->render->render("view/proformaCargadaView.php");

        }
        else{
            echo "error";
        }
    }
    
}