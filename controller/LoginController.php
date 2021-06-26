<?php

class LoginController{

    private $loginController;
    private $render;

    public function __construct($loginController, $render){
        $this->loginController = $loginController;
        $this->render = $render;
    }

    public function execute(){
        echo $this->render->render("view/menuPrincipal.php");
    }

    public function procesarLogin(){

        if(isset($_POST['submit'])){
            $existeEmpleado = $this->loginController->consultarUsuario($_POST['email'],$_POST['password']);
            if($existeEmpleado != null){
                echo "Usuario encontrado<br><br>";
                return $this->execute();
            }else{
                echo "Usuario o contraseña incorrecta. <br><br>";
            }
        }
    }
}
?>