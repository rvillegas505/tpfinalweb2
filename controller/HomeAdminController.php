<?php

class HomeAdminController
{
    private $render;
    private $mostrarEnAdminModel;

    public function __construct($render, $mostrarEnAdminModel)
    {
        $this->render = $render;
        $this->mostrarEnAdminModel = $mostrarEnAdminModel;
    }

    public function execute()
    {
        if ($_SESSION['usuario'] != null && $_SESSION['rol']=='admin'){
            $data['usuario'] = $_SESSION['usuario'];
            echo $this->render->render("view/homeAdminView.php", $data);
        }
        else{
            echo $this->render->render("view/errorView.php");
        }
        
    }


    public function verProformas(){
        $data['proformas'] = $this->mostrarEnAdminModel->getProformas();
        $data['usuario'] = $_SESSION['usuario'];
        echo $this->render->render("view/proformasRegistradasView.php", $data);
    }

    public function verEmpleados(){
        $data['empleados'] = $this->mostrarEnAdminModel->getEmpleados();
        $data['usuario'] = $_SESSION['usuario'];
        echo $this->render->render("view/empleadosRegistradosView.php", $data);
    }

    public function bajaEmpleado(){
        $dni= $_GET['dni'];
        $this->mostrarEnAdminModel->bajaEmpleado($dni);
        $data['dni']= $dni;
        $data['usuario'] = $_SESSION['usuario'];
        echo $this->render->render("view/bajaEmpleadoView.php", $data);
    }

    public function rolEmpleado(){
        $dni= $_GET['dni'];
        $rol= $_GET['rol'];
        $this->mostrarEnAdminModel->rolEmpleado($dni, $rol);
        $data['dni']= $dni;
        $data['usuario'] = $_SESSION['usuario'];
        echo $this->render->render("view/rolEmpleadoView.php", $data);
    }

    public function cambiarDisponibilidadEmpleado(){
        $dni= $_GET['dni'];
        $data['dni']= $dni;
        $data['usuario'] = $_SESSION['usuario'];
        
            if(isset($_GET['disponibilidad'])){
                $disponibilidad = $_GET['disponibilidad'];
                if($disponibilidad == "disponible"){
                    $this->mostrarEnAdminModel->cambiarADisponible($dni);
                }else{
                    $this->mostrarEnAdminModel->cambiarANoDisponible($dni);  
                }
                echo $this->render->render("view/disponibilidadEmpleadoView.php", $data);                 
            }
            
    }

    public function bajaProforma(){
        $id = $_GET['id'];
        $this->mostrarEnAdminModel->bajaProforma($id);
        $data['id']= $id;
        $data['usuario'] = $_SESSION['usuario'];
        echo $this->render->render("view/bajaProformaView.php", $data);

    }

    public function verProforma(){
        $id = $_GET['id'];
        $data['proforma']=$this->mostrarEnAdminModel->verProforma($id);
        $data['usuario']= $_SESSION['usuario'];
        echo $this->render->render("view/verProformaView.php", $data);
    }

    public function verEditarProforma(){
        $id = $_GET['id'];
        $data['proforma']=$this->mostrarEnAdminModel->verProforma($id);
        $data['usuario']= $_SESSION['usuario'];
        echo $this->render->render("view/editarProformaView.php", $data);
    }

    public function editarProforma(){
        
        if (isset($_POST['fechaProforma'])){
            $id = $_POST['id'];
            $fechaProforma=$_POST['fechaProforma'];
            $dniChofer=$_POST['dniChofer'];
            $nombreCliente = $_POST['nombreCliente'];
            $cuitCliente = $_POST['cuitCliente'];
            $direccionCliente = $_POST['direccionCliente'];
            $clienteTelefono = $_POST['telefonoCliente'];
            $emailCliente = $_POST['emailCliente'];
            $origenViaje = $_POST['origenViaje'];
            $destinoViaje = $_POST['destinoViaje'];
            $fechaCarga = $_POST['fechaCarga'];
            $tipoCarga=$_POST['tipoCarga'];
            $pesoNeto = $_POST['pesoNeto'];
            $kilometrosEstimado=$_POST['kilometrosEstimado'];
            $combustibleEstimado = $_POST['combustibleEstimado'];
            $etdCosteoEstimado = $_POST['etdCosteoEstimado'];
            $etaCosteoEstimado = $_POST['etaCosteoEstimado'];
            $viaticosEstimado = $_POST['viaticosEstimado'];
            $peajesPesajesEstimado = $_POST['peajesPesajesEstimado'];
            $extrasEstimado = $_POST['extrasEstimado'];
            $hazardEstimado = $_POST['hazardEstimado'];
            $reeferEstimado = $_POST['reeferEstimado'];
            $feeEstimado = $_POST['feeEstimado'];
            $totalEstimado = $_POST['totalEstimado'];
            $this->mostrarEnAdminModel->editProforma($id, $fechaProforma, $dniChofer,$nombreCliente, $cuitCliente, $direccionCliente, $clienteTelefono, $emailCliente, $origenViaje, $destinoViaje, $fechaCarga, $tipoCarga, $pesoNeto, $kilometrosEstimado, $combustibleEstimado, $etdCosteoEstimado, $etaCosteoEstimado, $viaticosEstimado, $peajesPesajesEstimado, $extrasEstimado, $hazardEstimado, $reeferEstimado, $feeEstimado, $totalEstimado);

            $data['usuario'] = $_SESSION['usuario'];
            echo $this->render->render("view/proformaCargadaView.php");

        }
        else{
            echo "error";
        }
    
    }

    public function printPdf(){
        
        include_once('helper/DomPdf.php');
        $id = $_GET['id'];
        $html = file_get_contents_curl("http://localhost/homeadmin/verproforma/id=$id?");
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream("document.pdf" , ['Attachment' => 0]);

        
    }
}