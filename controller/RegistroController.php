<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './third-party/phpmailer/Exception.php';
require './third-party/phpmailer/PHPMailer.php';
require './third-party/phpmailer/SMTP.php';

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
                if($this->registroModel->getCorreo($_POST['email']) == null){
                $nombre = $_POST['nombre'];
                $dni  = $_POST['dni'];
                $fechaNac = $_POST['fechaNac'];
                $email = $_POST['email'];
                $password= $_POST['password'];
                $hash = md5(rand(0, 1000));
                $valoresConsulta = " VALUES ('$nombre', $dni, '$fechaNac', '$email', '$password', '$hash')";              

                $this->registroModel->guardarRegistro($valoresConsulta);

                    $mail = new PHPMailer(true);
                    $mail->IsSMTP();
                    $mail->SMTPAuth = true;
                    $mail->Host = 'smtp.gmail.com';
                    $mail->Username = 'vientodeloestetransportes@gmail.com'; //tu mail
                    $mail->Password = 'vientodeloeste'; //tu pass
                    $mail->Port = 587; //puerto del mail
                    $mail->CharSet = 'UTF-8';

                    $mail->setFrom('vientodeloestetransportes@gmail.com', 'Viento del Oeste - Transportes');
                    $mail->addAddress($email);

                    $asunto = 'Signup | Verification';

                    $mail->isHTML(true);
                    $mail->Subject = $asunto;
                    $cuerpo =  '
 
                    ¡Gracias por registrarse!</br>
                    Su cuenta ha sido creada, puede ingresar con las siguientes credenciales luego de que haya activado su cuenta presionando en el link que se encuenta debajo</br>
                    </br>
                    ------------------------</br>
                    Usuario: '.$dni.'</br>
                    Contraseña: '.$password.'</br>
                    ------------------------</br>
                     </br>
                    Por favor, clickee este link para activar su cuenta:</br>
                    <a href="http://localhost/verificacion.php?email='.$email.'&hash='.$hash.'" > Activación </a>
                     
                    ';

                    $mail->msgHTML($cuerpo);

                    if (!$mail->send()) {
                        echo "<script>alert('$mail->ErrorInfo')</script>";
                    } else {
                        echo "<script>alert('El mensaje se envió correctamente') </script>";
                    }

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