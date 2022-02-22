<?php

if(isset($_POST['email']) && !empty($_POST['email'])){
    $nombre = addslashes($_POST['nombre']);
    $email = addslashes($_POST['email']);
    $motivoContacto = addslashes($_POST['motivoContacto']);
    $comentario = addslashes($_POST['comentario']);

    $to = "contact@caricoos.org";
    $subject = "Contacto - Caricoos";
    $body = "Nombre: ".$nombre."\n".
            "Email: ".$email."\n".
            "Motivo del contacto: ".$motivoContacto. "\n".
            "Comentario: ".$comentario. "\n";

    $header = "From:contact@caricoos.org"."\r\n"
                ."Reply-To:".$email."\r\n"
                ."X=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header)){
        echo("Email enviado com sucesso!");
    }else{
        echo("O Email nao pode ser enviado");
    }

}



?>