<?php

 if(isset($_POST['name']) && trim($_POST['name'])){
    $nombre = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    echo "Nombre digitado: ".$nombre;
}else{
    echo "No hay mensaje";
}

if(isset($_POST['email']) && trim($_POST['email'])){
    $correp = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    echo "Drescripción digitada: ".$correo;
}else{
    echo "No hay mensaje";
}

if(isset($_POST['subject']) && trim($_POST['subject'])){
    $asunto = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    echo "Posicion digitado: ".$asunto;
}else{
    echo "No hay mensaje";
}

if(isset($_POST['message']) && trim($_POST['message'])){
    $mensaje = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    echo "Posicion digitado: ".$mensaje;
}else{
    echo "No hay mensaje";
}
$destino="darentimput1999@gmail.com";
$contenido= "Nombre: " .$nombre. "\nCorreo: " .$correo.  "\nAsunto: " .$asunto. "\nMensaje: " .$Mensaje. 
    mail($destino, "Contacto", $contenido)
    
?>
