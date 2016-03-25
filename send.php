<?php
$to="josue@loscriptozoos.com";  //donde se enviaran los datos

//recoger los datos del formulario
$nombre = htmlentities($_POST['name']);
$email = htmlentities($_POST['email']);
$mensaje = htmlentities($_POST['mensaje']);
if ($nombre == "" || $mail  == "" ||  $mensaje == "" ):
    echo '<div class="alert alert-danger">Rellene todos los campos para el envio</div>';
    else:
    endif;

echo $nombre. '<br>'.$email. '<br>'.$mensaje


?>
