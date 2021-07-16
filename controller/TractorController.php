<?php

class TractorController{
    private $tractorModel;
    private $mostrarEnAdminModel;
    private $render;

    public function __construct($tractorModel, $mostrarEnAdminModel, $render){
        $this->tractorModel = $tractorModel;
        $this->mostrarEnAdminModel = $mostrarEnAdminModel;
        $this->render = $render;
    }

    public function execute(){
        if ($_SESSION['usuario'] != null){
            $data['usuario'] = $_SESSION['usuario'];
            $data['arrastrado'] = $this->mostrarEnAdminModel->getArrastrados();
            echo $this->render->render("view/tractorView.php", $data);
        }
        else{
            echo $this->render->render("view/errorView.php");
        }
    }

    public function procesarTractor(){
        if (isset($_POST['patente'])){

            $marca=$_POST['marca'];
            $modelo=$_POST['modelo'];
            $patente=$_POST['patente'];
            $motor=$_POST['motor'];
            $chasis=$_POST['chasis'];
            $patenteArrastrado=$_POST['patenteArrastrado'];

            $this->tractorModel->guardarTractor($marca, $modelo, $patente, $motor, $chasis, $patenteArrastrado);

            $data['usuario'] = $_SESSION['usuario'];
            echo $this->render->render("view/tractorCargadoView.php", $data);

        }
        else{
            echo "error";
        }
    }

}