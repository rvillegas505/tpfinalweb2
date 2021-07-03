<?php

class HomeChoferController
{
    private $render;

    public function __construct($render, $mostrarEnChoferModel )
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