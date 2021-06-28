<?php

class HomeChoferController
{
    private $render;

    public function __construct($render)
    {
        $this->render = $render;
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
}