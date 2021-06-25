<?php

class HomeAdminController
{
    private $render;

    public function __construct($render)
    {
        $this->render = $render;
    }

    public function execute()
    {
        if ($_SESSION['usuario'] != null){
            $data['usuario'] = $_SESSION['usuario'];
            echo $this->render->render("view/homeAdminView.php", $data);
        }
        else{
            echo $this->render->render("view/errorView.php");
        }
        
    }
}