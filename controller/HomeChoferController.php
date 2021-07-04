<?php

class HomeChoferController
{
    private $render;
    private $choferModel;

    public function __construct($choferModel, $render)
    {
        $this->choferModel = $choferModel;
        $this->render = $render;
    }

    public function execute()
    {
        if ($_SESSION['usuario'] != null && $_SESSION['rol']=='chofer'){
            $data['usuario'] = $_SESSION['usuario'];
            echo $this->render->render("view/homeChoferView.php", $data);
        }
        else{
            echo $this->render->render("view/errorView.php");
        }
        
    }

    public function mostrarRegistroPosicion(){
        if ($_SESSION['usuario'] != null && $_SESSION['rol'] == 'chofer'){
            $data['usuario'] = $_SESSION['usuario'];
            echo $this->render->render("view/posicionActualView.php", $data);
        }
        else{
            echo $this->render->render("view/errorView.php");
        }
    }

    public function procesarPosicionActual(){
        if (isset($_POST['submit'])){

            $kmRecorridos = $_POST['kilometrosRecorridos'];
            $combustibleGastado = $_POST['combustibleGastado'];
            $peajes = $_POST['peajes'];
            $gastos = $_POST['extras'];
            $total = $kmRecorridos + $combustibleGastado + $peajes + $gastos;
            $this->choferModel->registrarPosicionActual($kmRecorridos, $combustibleGastado, $peajes, $gastos, $total);

            echo $this->render->render("view/posicionCargadaView.php");

        }
        else{
            echo "error";
        }
    }
}