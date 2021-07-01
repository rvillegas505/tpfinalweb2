<?php
include_once("helper/MysqlDatabase.php");
include_once("helper/Render.php");
include_once("helper/UrlHelper.php");

include_once("model/TourModel.php");
include_once("model/SongModel.php");

include_once("controller/SongController.php");
include_once("controller/TourController.php");
include_once("controller/QuieroSerParteController.php");

include_once("model/RegistroModel.php");
include_once("model/SesionModel.php");
include_once("model/ProformaModel.php");

include_once("model/MostrarProformaModel.php");

include_once("controller/HomeController.php");
include_once("controller/RegistroController.php");
include_once("controller/SesionController.php");
include_once("controller/HomeAdminController.php");
include_once("controller/ProformaController.php");
include_once("controller/HomeChoferController.php");

include_once('third-party/mustache/src/Mustache/Autoloader.php');
include_once("Router.php");

class Configuration{
    public function getPresentacionModel(){
        $database = $this->getDatabase();
        return new TourModel($database);
    }

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

    public function getCancionModel(){
        $database = $this->getDatabase();
        return new SongModel($database);
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

    public function getMostrarProformaModel(){
        $database = $this->getDatabase();
        return new MostrarProformaModel($database);
    }

    public function getRender(){
        return new Render('view/partial');
    }


    public function getHomeController(){
        return new HomeController($this->getRender());
    }

    public function getHomeAdminController(){
        $motrarprofmodel = $this->getMostrarProformaModel();
        return new HomeAdminController($this->getRender(), $motrarprofmodel);
    }

    public function getHomeChoferController(){
        return new HomeChoferController($this->getRender());
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
        return new ProformaController($proformaModel, $this->getRender());
    }

    public function getTourController(){
        $presentacionModel = $this->getPresentacionModel();
        return new TourController($presentacionModel, $this->getRender());
    }

    public function getSongController(){
        $cancionesModel = $this->getCancionModel();
        return new SongController($cancionesModel, $this->getRender());
    }

    public function getQuieroSerParteController(){
        return new QuieroSerParteController($this->getRender());
    }

    public function getRouter(){
        return new Router($this);
    }

    public function getUrlHelper(){
        return new UrlHelper();
    }
}