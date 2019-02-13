<?php
     $destino=  "Gsammuelpozo@hotmail.com";
     $nombre =  $_POST[Nombre];
     $direccion = $_POST[Direccion];
     $telefono = $_POST[Telefono];
     $correo = $_POST[Correo];
     $comentario = $_POST[Comentario];
     $contenido = "Nombre: " . $nombre . "\nDireccion: " . $direccion . "\nTelefono: " . $telefono . "\nCorreo: " . $correo . "\nComentario: " . $comentario;
     
     mail($destino,"Contacto",$contenido);
     

?>