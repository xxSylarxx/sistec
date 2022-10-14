<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once './PHPMailer/PHPMailer.php';
// print_r($_POST);
// die("punto7");

if (!empty($_POST)) {
    $objmail = new PHPMailer();
    $objmail->CharSet = 'UTF-8';
    $objmail->IsHTML(true);
    $objmail->isSMTP();
    $objmail->SMTPDebug  = false;
    $objmail->SMTPSecure = '';
    $objmail->Host = 'correo.cubicol.com.pe';
    $objmail->SMTPAuth = false;
    $objmail->Port = 25;
    $objmail->From = 'sistec@cubicol.com.pe';
    $objmail->FromName = 'SISTEC';
    $objmail->AddAddress('sistecsjm@gmail.com', 'SISTEC');
    $objmail->Subject = 'SOLICITUD DE CONSULTA VIA PAG.WEB';
    $objmail->Body = '
    <h4><b>SOLICITUD DE SUSCRIPCIÓN - SISTEC</b></h4>
    <p><b>Nombres : </b>' . $_POST['nombre'] . '</p>
    <p><b>Correo : </b>' . $_POST['correo'] . '</p>
    <p><b>Asunto : </b>' . $_POST['asunto'] . '</p>
    <p><b>Mensaje : </b>' . $_POST['mensaje'] . '</p>';
    if ($objmail->Send()) {
        echo "MENSAJE ENVIADO CORRECTAMENTE";
    } else {
        echo 'OCURRIO UN ERROR, NO SE PUDO PROCESAR EL ENVIO';
    }
}