<?php

class ChoferControllerController{
    private $choferModel;
    private $render;

    public function __construct($choferModel, $render){
        $this->choferModel = $choferModel;
        $this->render = $render;
    }

    public function execute(){
            if ($_SESSION['usuario'] != null){
                $data['usuario'] = $_SESSION['usuario'];
                echo $this->render->render("view/posicionActualView.php", $data);
            }
            else{
                echo $this->render->render("view/errorView.php");
            }
    }

    public function procesarPosicionActual(){
        if (isset($_POST['submit'])){

            $proforma=$_POST['fechaProforma'];
            $this->proformaModel->guardarProforma($proforma);

            $choferdni=$_POST['dniChofer'];
            $this->proformaModel->guardarChoferProforma($choferdni);

            $kmRecorridos = $_POST['kilometrosRecorridos'];
            $proforma = null;
            $combustibleGastado = $_POST['combustibleGastado'];
            $peajes = $_POST['peajes'];
            $gastos = $_POST['extras'];
            $total = $this->choferModel->calcularTotalDesdePosicionActual($kmRecorridos, $proforma, $combustibleGastado, $peajes, $gastos);
            $this->choferModel->registrarPosicionActual($kmRecorridos, $proforma, $combustibleGastado, $peajes, $gastos, $total);

            echo $this->render->render("view/proformaCargadaView.php");

        }
        else{
            echo "error";
        }
    }
    
}