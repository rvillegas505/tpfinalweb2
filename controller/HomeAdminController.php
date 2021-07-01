<?php

class HomeAdminController
{
    private $render;
    private $proformas;

    public function __construct($render, $proformas)
    {
        $this->render = $render;
        $this->proformas = $proformas;
    }

    public function execute()
    {
        if ($_SESSION['usuario'] != null && $_SESSION['rol']=='admin'){
            $data['usuario'] = $_SESSION['usuario'];
            $data['proformas'] = $this->proformas->getProformas();
            echo $this->render->render("view/homeAdminView.php", $data);
        }
        else{
            echo $this->render->render("view/errorView.php");
        }
        
    }
}