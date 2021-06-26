<?php

class RegistroController{
    private $registroModel;
    private $render;

    public function __construct($registroModel, $render){
        $this->registroModel = $registroModel;
        $this->render = $render;
    }

    public function execute(){
        echo $this->render->render("view/registroView.php");
    }
    
    public function procesarFormulario(){

        if (isset($_POST['submit'])){
            if (strlen($_POST['nombre']) > 3 &&  strlen($_POST['dni']) == 8 && strlen($_POST['email']) > 5 && strlen($_POST['password']) > 3){
                if($this->registroModel->verificarCorreo($_POST['email'] = 0)){
                    $nombre = $_POST['nombre'];
                    $dni  = $_POST['dni'];
                    $fechaNac = $_POST['fechaNac'];
                    $email = $_POST['email'];
                    $password= $_POST['password'];
                    $valoresConsulta = " VALUES ('$nombre', $dni, '$fechaNac', '$email', '$password')";
              

                $this->registroModel->guardarRegistro($valoresConsulta);
                echo $this->render->render("view/registroExitosoView.php");
                }else{
                    echo $this->render->render("view/emailExistenteView.php");
                }  
            }
            else{
                echo $this->render->render("view/errorView.php");
            }
        }

    }
}