<?php

class ProformaController{
    private $proformaModel;
    private $render;

    public function __construct($proformaModel, $render){
        $this->proformaModel = $proformaModel;
        $this->render = $render;
    }

    public function execute(){
            if ($_SESSION['usuario'] != null){
                $data['usuario'] = $_SESSION['usuario'];
                echo $this->render->render("view/proformaView.php", $data);
            }
            else{
                echo $this->render->render("view/errorView.php");
            }
    }

    public function procesarProforma(){
        echo "hola"; 
    }
    
}