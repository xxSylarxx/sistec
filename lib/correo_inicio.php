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
    $objmail->From = 'consultorasisterra@cubicol.com.pe';
    $objmail->FromName = 'Consultora Sisterra';
    $objmail->AddAddress('cursos.sisterra@gmail.com', 'Consultora Sisterra');
    // $objmail->addCC('luismiguel.tm7@gmail.com', 'Consultora Sisterra');
    $objmail->Subject = 'SOLICITUD DE CONSULTA VIA PAG.WEB';
    $objmail->Body = '
    <h4><b>SOLICITUD DE SUSCRIPCIÓN</b></h4>
    <p><b>Nombres : </b>' . $_POST['nombre'] . '</p>
    <p><b>Correo : </b>' . $_POST['email'] . '</p>';
    if ($objmail->Send()) {
        echo "SUSCRIPCION EXITOSA";
    } else {
        echo 'OCURRIO UN ERROR, NO SE PUDO PROCESAR EL ENVIO';
    }
}
