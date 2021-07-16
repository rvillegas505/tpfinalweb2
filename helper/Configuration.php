<?php
include_once("helper/MysqlDatabase.php");
include_once("helper/Render.php");
include_once("helper/UrlHelper.php");



include_once("model/RegistroModel.php");
include_once("model/SesionModel.php");
include_once("model/ProformaModel.php");
include_once("model/TractorModel.php");
include_once("model/ArrastradoModel.php");
include_once("model/MostrarEnAdminModel.php");
include_once("model/MostrarEnChoferModel.php");


include_once("controller/HomeController.php");
include_once("controller/RegistroController.php");
include_once("controller/SesionController.php");
include_once("controller/HomeAdminController.php");
include_once("controller/ProformaController.php");
include_once("controller/TractorController.php");
include_once("controller/ArrastradoController.php");
include_once("controller/HomeChoferController.php");

include_once('third-party/mustache/src/Mustache/Autoloader.php');
include_once("Router.php");

class Configuration{
   

    private function getDatabase(){
        $config = $this->getConfig();
        return new MysqlDatabase(
            $config["servername"],
            $config["username"],
            $config["password"],
            $config["dbname"]
        );
    }

    private function getConfig(){
        return parse_ini_file("config/config.ini");
    }

    

    public function getRegistroModel(){
        $database = $this->getDatabase();
        return new RegistroModel($database);
    }

    public function getSesionModel(){
        $database = $this->getDatabase();
        return new SesionModel($database);
    }

    public function getProformaModel(){
        $database = $this->getDatabase();
        return new ProformaModel($database);
    }

    public function getTractorModel(){
        $database = $this->getDatabase();
        return new TractorModel($database);
    }

    public function getArrastradoModel(){
        $database = $this->getDatabase();
        return new ArrastradoModel($database);
    }

    public function getMostrarEnAdminModel(){
        $database = $this->getDatabase();
        return new MostrarEnAdminModel($database);
    }

    public function getMostrarEnChoferModel(){
        $database = $this->getDatabase();
        return new MostrarEnChoferModel($database);
    }

    public function getRender(){
        return new Render('view/partial');
    }


    public function getHomeController(){
        return new HomeController($this->getRender());
    }

    public function getHomeAdminController(){
        $mostrarEnAdminModel = $this->getMostrarEnAdminModel();
        return new HomeAdminController($this->getRender(), $mostrarEnAdminModel);
    }

    public function getHomeChoferController(){
        $mostrarEnChoferModel = $this->getMostrarEnChoferModel();
        return new HomeChoferController($this->getRender(), $mostrarEnChoferModel);
    }

    public function getRegistroController(){
        $registroModel = $this->getRegistroModel();
        return new RegistroController($registroModel, $this->getRender());
    }

    public function getSesionController(){
        $sesionModel = $this->getSesionModel();
        return new SesionController($sesionModel, $this->getRender());
    }

    public function getProformaController(){
        $proformaModel = $this->getProformaModel();
        $mostrarEnAdminModel = $this->getMostrarEnAdminModel();
        return new ProformaController($proformaModel, $mostrarEnAdminModel, $this->getRender());
    }

    public function getTractorController(){
        $tractorModel = $this->getTractorModel();
        $mostrarEnAdminModel = $this->getMostrarEnAdminModel();
        return new TractorController($tractorModel, $mostrarEnAdminModel, $this->getRender());
    }

    public function getArrastradoController(){
        $arrastradoModel = $this->getArrastradoModel();
        return new ArrastradoController($arrastradoModel, $this->getRender());
    }


    public function getRouter(){
        return new Router($this);
    }

    public function getUrlHelper(){
        return new UrlHelper();
    }
}