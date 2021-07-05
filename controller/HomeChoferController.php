<?php

class HomeChoferController
{
    private $render;
    private $mostrarEnChoferModel ;

    public function __construct($render, $mostrarEnChoferModel)
    {
        $this->render = $render;
        $this->mostrarEnChoferModel = $mostrarEnChoferModel;
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
            $longitud = $_POST['longitudinput'];
            $latitud = $_POST['latitudinput'];

            $total = $kmRecorridos + $combustibleGastado + $peajes + $gastos;
            $this->mostrarEnChoferModel->registrarPosicionActual($longitud, $latitud, $kmRecorridos, $combustibleGastado, $peajes, $gastos, $total);

            echo $this->render->render("view/posicionCargadaView.php");
            $this->mostrarEnChoferModel->registrarPosicionActual($kmRecorridos, $longitud, $latitud, $combustibleGastado, $peajes, $gastos, $total);
            
            $data['usuario'] = $_SESSION['usuario'];
            echo $this->render->render("view/posicionCargadaView.php", $data);

        }
        else{
            echo "error";
        }
    }

    public function registrardatos()
    {
        $data['prueba'] = $this->mostrarEnChoferModel->getPrueba();
        $data['usuario'] = $_SESSION['usuario'];
        echo $this->render->render("view/datosViajeView.php", $data);
    }

    public function mostrarubicacion(){
        $data['ubicacion'] = $this->mostrarEnChoferModel->getUbicacion();
        $data['usuario'] = $_SESSION['usuario'];
        echo $this->render->render("view/datosViajeView.php", $data);

    }

}