<?php
    $conn = mysqli_connect("localhost", "root", "abcd") or die(mysqli_error($conn));
    mysqli_select_db($conn,"transportes") or die(mysqli_error($conn));

    if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
        $email = $_GET['email'];
        $hash = $_GET['hash'];

        $select = "SELECT email, hash, activo FROM empleados WHERE email='".$email."' AND hash='".$hash."' AND activo='0';" or die(mysqli_error($conn));
        $result = mysqli_query($conn, $select);

        $match  = mysqli_num_rows($result);

        if($match > 0){
            $update = "UPDATE empleados SET activo='1' WHERE email='".$email."' AND hash='".$hash."' AND activo='0';" or die(mysqli_error($conn));
            $stmt = $conn->prepare($update);
            $stmt->execute();

            echo '<div class="statusmsg">Su cuenta ha sido activada, ahora puede ingresar</div>';
        }else{
            echo '<div class="statusmsg">La url es inválida o ustded ya ha activado su cuenta.</div>';
        }
    } else{
        echo '<div class="statusmsg">Por favor, use el link que ha sido enviado a su email.</div>';
    }

    ?>

<a href="/home"><button class="my-3 btn btn-warning">Volver al Home</button></a>

