<?php

class ArrastradoController
{
    private $arrastradoModel;
    private $render;

    public function __construct($arrastradoModel, $render)
    {
        $this->arrastradoModel = $arrastradoModel;
        $this->render = $render;
    }

    public function execute()
    {
        if ($_SESSION['usuario'] != null) {
            $data['usuario'] = $_SESSION['usuario'];
            echo $this->render->render("view/arrastradoView.php", $data);
        } else {
            echo $this->render->render("view/errorView.php");
        }
    }

    public function procesarArrastrado()
    {
        if (isset($_POST['patente'])) {

            $tipo = $_POST['tipo'];
            $patente = $_POST['patente'];
            $chasis = $_POST['chasis'];

            $this->arrastradoModel->guardarArrastrado($tipo, $patente, $chasis);

            $data['usuario'] = $_SESSION['usuario'];
            echo $this->render->render("view/arrastradoCargadoView.php");

        } else {
            echo "error";
        }
    }
}

