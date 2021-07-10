<?php

class HomeAdminController
{
    private $render;
    private $mostrarEnAdminModel;

    public function __construct($render, $mostrarEnAdminModel)
    {
        $this->render = $render;
        $this->mostrarEnAdminModel = $mostrarEnAdminModel;
    }

    public function execute()
    {
        if ($_SESSION['usuario'] != null && $_SESSION['rol']=='admin'){
            $data['usuario'] = $_SESSION['usuario'];
            echo $this->render->render("view/homeAdminView.php", $data);
        }
        else{
            echo $this->render->render("view/errorView.php");
        }
        
    }

    public function verProformas(){
        $data['proformas'] = $this->mostrarEnAdminModel->getProformas();
        $data['usuario'] = $_SESSION['usuario'];
        echo $this->render->render("view/proformasRegistradasView.php", $data);
    }

    public function verEmpleados(){
        $data['empleados'] = $this->mostrarEnAdminModel->getEmpleados();
        $data['usuario'] = $_SESSION['usuario'];
        echo $this->render->render("view/empleadosRegistradosView.php", $data);
    }

    public function bajaEmpleado(){
        $dni= $_GET['dni'];
        $this->mostrarEnAdminModel->bajaEmpleado($dni);
        $data['dni']= $dni;
        $data['usuario'] = $_SESSION['usuario'];
        echo $this->render->render("view/bajaEmpleadoView.php", $data);
    }

    public function rolEmpleado(){
        $dni= $_GET['dni'];
        $rol= $_GET['rol'];
        $this->mostrarEnAdminModel->rolEmpleado($dni, $rol);
        $data['dni']= $dni;
        $data['usuario'] = $_SESSION['usuario'];
        echo $this->render->render("view/rolEmpleadoView.php", $data);
    }

    public function bajaProforma(){
        $id = $_GET['id'];
        $this->mostrarEnAdminModel->bajaProforma($id);
        $data['id']= $id;
        $data['usuario'] = $_SESSION['usuario'];
        echo $this->render->render("view/bajaEmpleadoView.php", $data);

    }

    public function verProforma(){
        $id = $_GET['id'];
        $data['proforma']=$this->mostrarEnAdminModel->verProforma($id);
        $data['usuario']= $_SESSION['usuario'];
        echo $this->render->render("view/verProformaView.php", $data);
    }
}