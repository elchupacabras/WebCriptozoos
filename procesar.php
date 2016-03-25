<?php
     $to="josue@loscriptozoos.com";

     $senderName = $_POST['senderName'];
     $senderEmail = $_POST['senderEmail'];
     $message = $_POST['message'];

     $mensaje = "Nombre:". $senderName . "Email:" . $senderEmail . "mensaje:" .$message." ";

     if (mail ($senderEmail, "contactForm", $mensaje)) Header ("location: $thank");



?>
