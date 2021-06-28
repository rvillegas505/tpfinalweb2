<?php

class SesionController{
    private $sesionModel;
    private $render;

    public function __construct($sesionModel, $render){
        $this->sesionModel = $sesionModel;
        $this->render = $render;
    }

    
    public function inicioSesion(){
        if (isset($_POST['usuario'])){

            $usuario= $_POST['usuario'];
            $pass = $_POST['clave'];

            $resultado = $this->sesionModel->getUsuario($usuario, $pass);
            if ($resultado){
                $_SESSION['usuario']= $resultado["0"]["nombreApellido"];

                $rol = $resultado["0"]["rol"];
                $_SESSION['rol']=$rol;
                switch($rol){
                    case "admin": 
                        header("location: /homeAdmin");
                        break;
                    case "chofer":
                        header("location: /homechofer");
                        break;
                    default:
                        header("location: /home");
                }
            }
            else{
                session_destroy();
                echo $this->render->render("view/errorView.php");
            }
        }
        else{
            header("location: /registro");
        }
    }

    public function cerrarSesion(){
        session_start();
        session_destroy();
        header("location: /home");
    }
    
    
}