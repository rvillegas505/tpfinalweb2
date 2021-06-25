<?php

class SesionController{
    private $SesionModel;
    private $render;

    public function __construct($sesionModel, $render){
        $this->sesionModel = $sesionModel;
        $this->render = $render;
    }

    // public function execute(){
    //     echo $this->render->render("view/registroView.php");
    // }

    public function inicioSesion(){
        if (isset($_POST['usuario'])){

            $usuario= $_POST['usuario'];
            $pass = $_POST['clave'];

            $resultado = $this->sesionModel->getUsuario($usuario, $pass);
            if ($resultado){
                $_SESSION['usuario'] = $usuario;
                header("location: /homeAdmin");
            }
            else{
                session_destroy();
                header("location: /registro");
            }
        }
        else{
            echo "error";
        }
    }

    public function cerrarSesion(){
        session_destroy();
        header("location: /home");
    }
    
    
}