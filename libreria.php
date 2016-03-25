<?php

 if(!empty($_POST['nombre']) AND !empty($_POST['email']) AND !empty($_POST['asunto'])){

     $to ="josue@loscriptozoos.com";
     $headers = "Content-Type: text/html; charset=iso-8859-1\n";
     $headers .= "From:".$_POST['nombre']."\r\n";
     $tema="Contacto desde el Sitio Web";
     $message="
<table border='0' cellspacing='2' cellpadding='2'>
  <tr>

    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Nombre:</strong></td>
    <td width='80%' align='left'>$_POST[senderName]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>E-mail:</strong></td>
    <td align='left'>$_POST[senderEmail]</td>
  </tr>
<!--   <tr>
    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Asunto</strong></td>
    <td width='80%' align='left'>$_POST[asunto]</td>
  </tr> -->
  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>Comentario:</strong></td>
    <td align='left'>$_POST[message]</td>
  </tr>
</table>
";
     mail("josue@loscriptozoos.com" ,$to,$tema,$message,$headers);
     echo "Su mensaje ha sido enviado.<br /><a href='contact.html'>Volver</a>";
 } else {
     echo "No se puede enviar el formulario, verifica los campos";
 }




?>