<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function PHPMailer($email, $usuario)
{
    require_once('vendor/PHPMailer/src/Exception.php');
    require_once('vendor/PHPMailer/src/PHPMailer.php');
    require_once('vendor/PHPMailer/src/SMTP.php');

    $hash = md5(rand(0, 1000));

    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'in-v3.mailjet.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'be06371b417d20fbae1f157649479ab0';
        $mail->Password = '2ebdd6ed2480b5055dce2afcfe13f3c4';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;


        $mail->setFrom('jonipega25@hotmail.com', 'DesarrolloWeb.com');
        $mail->addAddress($email, $usuario);


        $mail->isHTML(true);
        $mail->Subject = 'Bienvenido a DesarrolloWeb.com';
        $mail->Body = "Para activar tu cuenta sigue el siguiente enlace:
<a href='localhost/proyectophp/Proyectophp/confirmado.php'>
        .$hash</a>";
        $mail->AltBody = 'Gracias por registrarte ';
        $mail->send();
        echo 'Se envió el mensaje';
    } catch (Exception $e) {
        echo 'No se envió el mensaje, error!' . $mail->ErrorInfo;
    }
}
