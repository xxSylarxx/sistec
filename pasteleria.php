<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Consultora SISTERRA S.A.C. es una empresa que tiene 3 campos de acción en el marco de la Gestión del Riesgo de Desastres, Geomática, Geodesia, Gestión Ambiental, Planeamiento Estratégico y Seguridad y Defensa Nacional.">
    <link rel="shortcut icon" href="./assets/img/icons/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.0/css/all.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/web.css">
    <title>SISTEC</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <style>
        #section-plataform {
            margin-top: -50px;
            z-index: 99;
            position: relative;
        }



        #slider img {
            /* height: 720px; */
            object-fit: cover;
            height: 100vh;
        }

        /* Estilos de portada interna */
        #portada {
            background: linear-gradient(rgba(136, 28, 34, 0.8) 100%, #ffff 10%, #ffff 50%),
                url('./assets/img/web/pasteleria_portada_principal.jpg');
            background-size: 100%;
            background-position: center;
            /* background-attachment: fixed; */

            /* background-repeat: no-repeat; */
            /* background-size: cover; */
            /* mix-blend-mode: multiply; */
        }

        #portada h2 {
            font-size: 48px;
            color: var(--color3);
            margin-top: 10rem;

        }

        #portada p {

            color: var(--color3);
            margin-bottom: 10rem;

        }

        #ruta {
            background-color: var(--color1);
        }

        #ruta a {
            font-size: 18px;
            color: var(--color3);
        }

        /* Estilos de seccion plataform */
        #row-section-plataform {

            padding: 0px 40px 0px 10px;
        }

        #row-section-plataform p,
        h5 {

            color: white;
        }

        #row-section-plataform>.row {
            height: 100%;
            background-color: var(--color1);
            padding: 30px 15px 20px;
        }

        #row-section-plataform>.row>.col-lg-9 {
            padding: 0px 0px 0px 30px;
        }

        #row-section-plataform:hover img {
            -webkit-animation-name: temblor;
            animation-name: temblor;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
        }

        @keyframes temblor {
            0% {
                -webkit-transform: translate(0px, 0px);
            }

            10% {
                -webkit-transform: translate(10px, 0px);
            }

            20% {
                -webkit-transform: translate(0px, 0px);
            }

            30% {
                -webkit-transform: translate(10px, 0px);
            }

            40% {
                -webkit-transform: translate(0px, 0px);
            }

            50% {
                -webkit-transform: translate(10px, 0px);
            }

            60% {
                -webkit-transform: translate(0px, 0px);
            }

            70% {
                -webkit-transform: translate(10px, 0px);
            }

            80% {
                -webkit-transform: translate(0px, 0px);
            }

            90% {
                -webkit-transform: translate(10px, 0px);
            }

            100% {
                -webkit-transform: translate(0px, 0px);
            }
        }

        /* Estilos de boton */
        .default-btn {
            background-color: var(--color2);
            color: #fff;
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            padding: 21px 40px 21px;
            text-align: center;
            text-transform: uppercase;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            line-height: 1;
            letter-spacing: 0.5px;
            border-radius: 50px;
        }

        .default-btn:hover {
            background-color: var(--color1);
            color: #fff;
        }

        .default-btn2 {
            background-color: var(--color2);
            color: #fff;
            display: inline-block;

            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            line-height: 1;
            letter-spacing: 0.5px;
            border-radius: 0 50px 51px 0;
            font-size: 14px;
            padding: 15px 40px 15px;
        }

        .default-btn2:hover {
            background-color: var(--color1);
            color: #fff;
        }

        /* Estilos de los titulo */
        #titulo {
            display: flex;
            justify-content: start;
        }

        #parte1 {
            font-size: 48px;
            color: var(--color1);
        }

        #parte2 {
            font-size: 48px;

        }

        /* Estilos de la seccion nosotros */
        #nosotros {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        #nosotros p {
            text-align: justify;
        }

        /* Estilos de cursos */

        #cursos .card .news {
            position: absolute;
            top: 0.5px;
            left: -0.5px;
            padding: 4px 12px;
            background-color: var(--color1);
            color: white;
            font-size: 14px;
            font-weight: bold;
            transform: translateY(-5%);

        }

        #cursos .card {
            border: 0px;
            border-radius: 0px;

        }

        #cursos div.card img {
            transition: .3s;
        }

        #cursos div.card:hover img {
            transform: scale(1.06);
        }

        #cursos div.card:hover .card-footer {
            display: block;
        }

        #cursos .card .detalle {

            text-overflow: ellipsis;

            display: -webkit-box;

            -webkit-line-clamp: 2;

            -webkit-box-orient: vertical;

            overflow: hidden;

            text-align: justify;

            font-size: 17px;

            color: #747474;

            line-height: 1.6;

        }

        #cursos .card-footer {
            display: none;
            padding: 0px;
        }

        #cursos .card-footer span {
            color: var(--color5);
        }


        #cursos img {
            object-fit: cover;
        }

        #apply-area {
            position: relative;
        }

        #apply-area img {
            width: 100%;
        }

        #apply-area:before {
            position: absolute;
            left: 0;
            right: 0;
            width: 100%;
            /* height: 80.5%; */
            height: 85.5%;
            content: "";
            background-color: #000000;
            opacity: 0.46;
        }

        #apply-area:after {
            border: 5px solid #534741;
            position: absolute;
            left: 30px;
            top: 70px;
            right: 30px;
            bottom: 70px;
            content: "";
            border-radius: 10px;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            z-index: 1;
        }

        #apply-area .course-apply-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translateY(-50%) translateX(-50%);
            transform: translateY(-50%) translateX(-50%);
            z-index: 9;
        }

        #apply-area .course-apply-btn a.default-btn {
            padding: 15px 40px 15px;
            font-size: 14px;
            letter-spacing: 0.5px;
        }

        #apply-area:hover:after {
            left: 20px;
            top: 55px;
            right: 20px;
            bottom: 55px;
        }

        /* Estilos de logros */

        #logros {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        /* Estilo para las carreras */
        .indicador {
            padding: 1rem 0;
            border-bottom: 1px solid var(--color6);
            color: var(--color5);
        }

        .indicador a {
            color: var(--color5);
            margin-right: 1rem;
            font-size: 13px;
        }

        .indicador .inicio:hover {
            color: var(--color1);
        }

        #carrera h1 {

            text-transform: uppercase;
        }

        #carrera .card img {
            height: 100px;
            width: 100px;
            object-fit: cover;
            /* max-height: 600px; */
            /* margin-bottom: 3rem; */
        }



        #carrera img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #img-icono {
            height: 40px !important;
            width: 40px !important;
        }

        #carrera .nav-tabs .nav-item .nav-link span {
            margin-left: .6rem;
        }

        #carrera .tab-content .tab-pane i {
            margin-right: .5rem;
            color: var(--color1);
        }

        #carrera .tab-content .tab-pane p {
            text-align: justify;
            color: var(--color4);
        }

        #carrera .nav-tabs .nav-item.show .nav-link i,
        #carrera .nav-tabs .nav-link.active i {
            color: red;
        }

        #carrera .tab-pane {
            padding: 3rem 1rem;
        }

        #carrera .nav-item {
            border: transparent;
            border-bottom: 0;
            background: transparent;
            margin: 0 .2rem;
        }

        #carrera .nav-tabs .nav-link:hover {
            border-color: transparent;
        }

        /* #carrera .nav-tabs .nav-link:focus,
        #carrera .nav-tabs .nav-link:hover {
            border-top: 2px solid var(--color1);
            isolation: inherit;
        } */
        #carrera .nav-tabs {
            border-bottom: transparent;
        }

        #carrera .nav-tabs .nav-item.show .nav-link,
        #carrera .nav-tabs .nav-link.active {
            color: var(--color1);
            /* border-top: 4px solid var(--color1); */
            text-decoration: line-through;
            background-color: transparent;
            border-color: transparent;

        }

        #carrera .nav-tabs .nav-link {
            color: var(--color2);
            background: transparent;
            border-radius: 0;
        }

        #carrera .card {
            border: 0;
            /* margin: 1rem 0; */
        }

        #carrera .cursos {
            font-family: 'Roboto Slab', serif;
        }

        #carrera .cursos a {
            color: var(--color2);
        }

        #carrera .cursos a:hover {
            color: var(--color1);
        }

        #carrera .p-carrera {

            text-overflow: ellipsis;

            display: -webkit-box;

            -webkit-line-clamp: 3;

            -webkit-box-orient: vertical;

            overflow: hidden;

            font-family: 'Roboto', sans-serif;


        }

        .card-title {
            font-family: 'Roboto', sans-serif;
            color: var(--color1) !important;
            font-size: 19px;
            /*  display: flex;
            align-items: center;  */

        }

        .line {
            position: relative;
            height: 100%;
            width: 1px;
            background: #e5e5e5;
            margin-right: 1rem;
        }

        .line::after {
            position: absolute;
            content: '';
            right: -1px;
            /* left: 40%; */
            top: 1px;
            height: 40px;
            width: 3px;
            background: var(--color1);
        }

        .mV {
            padding: 0 3rem;
        }

        figure {
            margin: 0;
            position: relative;
        }

        figure img {
            max-width: 100%;
            display: block;
            position: relative;
        }

        figcaption {
            position: absolute;
            top: 0;
            left: 0;
            padding: 20px;
            /* background: #2c3f52; */
            background: var(--color2);
            /* color: var(--color1); */
            color: var(--color7);
        }

        figcaption h3 {
            margin: 0;
            padding: 0;
            color: #fff;
            font-size: 20px;
        }

        /* figcaption span:before {
            content: 'by ';
        } */

        figcaption a {
            text-align: center;
            padding: 5px 10px;
            border-radius: 2px;
            display: inline-block;
            background: #ed4e6e;
            color: #fff;
        }

        figcaption {
            height: 100%;
            width: 100%;
            opacity: 0;
            text-align: center;
            backface-visibility: hidden;
            transition: transform 0.3s, opacity 0.3s;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }

        figure:hover figcaption,
        figure.cs-hover figcaption {
            opacity: 1;
            transform: translate(15px, 15px);
        }

        /* figcaption h3 {
            margin-top: 70px;
        } */

        figcaption span {
            display: block;
            font-size: 16px;
        }

        #img-beneficios {
            transition: transform .9s;
        }

        #img-beneficios:hover {
            transform: scale(1.1);
        }




        /* Estilos para animacion de contador de datos importantes */
        .contador_cantidad {
            color: var(--color2);
            text-align: center;
            font-size: 40px;
            font-weight: bold;
        }

        #contadorparrafo {
            text-align: center;
            font-size: .9rem;
            color: var(--color5);
        }

        @keyframes aparecer {
            0% {
                opacity: 0;
                transform: translateY(100px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .ocultar {
            opacity: 0;
        }

        .animar {
            animation: aparecer 1.3s;
        }

        @media (max-width: 500px) {
            #slider img {
                height: 100%;
            }



            #row-section-plataform {
                padding-top: 50px;
                padding-right: 12px;
            }

            #row-section-plataform p,
            h5 {
                text-align: center;
            }

            #row-section-plataform>.row {
                padding: 20px;
            }

            #row-section-plataform>.row>.col-lg-9 {
                padding-top: 10px;
                padding: 0px;
            }

        }
    </style>

    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>

    <!-- header -->
    <?php include_once './includes/header.php'; ?>

    <section id="portada">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>CARRERAS</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis cumque veritatis, <br>
                        nam sequi, harum tempora praesentium obcaecati architecto sunt corporis.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="ruta">
        <div class="container py-2">
            <div class="row d-flex justify-content-">
                <div class="col-lg">
                    <a href="./index.php">Inicio</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" id="carrera" style="margin-top: 3rem;">
            <div class="row justify-content-between">
                <div class="col-md-8 ">
                    <div id="apply-area" class="py-5">
                        <img src="./assets/img/web/portada_pasteleria.webp" alt="">
                        <div class=" course-apply-btn">
                            <a href="#" class="default-btn">Inscríbete</a>
                        </div>
                    </div>
                    <div class="">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="descripcion-tab" data-bs-toggle="tab" data-bs-target="#descripcion" type="button" role="tab" aria-controls="descripcion" aria-selected="true"><i class="fas fa-align-justify"></i><span> Descripción</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"> <i class="fas fa-user-graduate"></i> <span> Perfil del Egresado </span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="far fa-clock"></i> <span> Horarios </span> </button><!-- <i class="fas fa-users"></i> <span> Campo Laboral </span> -->
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-list"></i><span>Requisitos</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="turno-tab" data-bs-toggle="tab" data-bs-target="#turno" type="button" role="tab" aria-controls="turno" aria-selected="false"><i class="fas fa-books"></i><span>Plan Curricular</span></button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active " id="descripcion" role="tabpanel" aria-labelledby="descripcion-tab">
                                <h1>PASTELERÍA, PANADERÍA Y REPOSTERÍA</h1>
                                <p class="mt-3 text-justify" style="color: var(--color4);">
                                    La carrera de pastelero forma a los profesionales que se encargarán de realizar una cantidad de diversos postres, desde pan dulce hasta grandes pasteles que son encargados por los consumidores de una pastelería. Este estudio es una de las ramas que se pueden encontrar a la gastronomía.
                                </p>
                                <img src="./assets/img/web/pasteleria2.jpg" alt="">
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-lg  d-flex justify-content-start">
                                        <div>
                                            <img id="img-icono" class="my-auto" src="./assets/img/icons/tiempo.png" alt="">
                                            <span class="my-auto">&nbsp;Duracion: 1 año</span>
                                        </div>
                                        <div class="mx-5">
                                            <img id="img-icono" class="my-auto" src="./assets/img/icons/certificado2.png" alt="">
                                            <span class="my-auto">&nbsp;Certificación a Nombre del Ministerio de Educación</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade  " id="home" role="tabpanel" aria-labelledby="home-tab">
                                <!-- <p>La egresada en la carrera de PASTELERÍA estará en capacidad de desempeñarse como:</p> -->
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Cuenta con un gran sentido de compromiso para asumir los retos que desee emprender.</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Formado para trabajar en equipo y ejerciendo su liderazgo.</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Se destaca por su capacidad y dominio en los procesos de producción y su conocimiento en el manejo de insumos y de maquinarias.</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Su creatividad para formular recetas aplicando estrictos controles de calidad y BPM.</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Puede desempeñarse en la parte de producción como de planta.</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Posee valores de respeto, responsabilidad y puntualidad.</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Capacitado con las últimas tendencias en panificación y pastelería con la más alta tecnología a nivel mundial.</p>
                                </div>
                                <br><br>
                                <h4>Campo Laboral</h4>
                                <ul>
                                    <li>Restaurantes, hoteles y cruceros.</li>
                                    <li>Empresas de alimentación industrial y colectiva.</li>
                                </ul>
                                <!-- <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Restaurantes, hoteles y cruceros.</p>
                                </div> -->
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Martes y jueves 6-9 pm</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Sabados 9-1 pm</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Domingos 9-1 pm</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>2 fotos tamaño carnet</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Copia de DNI</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>1 mica A4</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="turno" role="tabpanel" aria-labelledby="turno-tab">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 my-auto">
                                            <div class="table-responsive mt-5 tableover">
                                                <table class="table table-bordered">
                                                    <thead class="text-white" style="background-color:var(--color1);">
                                                        <tr style="text-align:center;">
                                                            <td colspan="2">PLAN CURRICULAR BÁSICO</td>
                                                            <!-- <td colspan="2">PRIMER MÓDULO</td> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="text-align:center;background-color:white;">
                                                            <td colspan="2" class="text-white" style="background-color:var(--color2);">PRIMER MÓDULO</td>
                                                            <!-- <td class="text-white" style="background-color:var(--color2);">MAQUILLAJE</td> -->
                                                        </tr>
                                                        <tr style="background-color:white;">
                                                            <td style="background-color: var(--color6); width: 50%;">
                                                                <ul style="list-style: none;">
                                                                    <li> <b>CLASE 1:</b> Queque Marmoleado, Queque Inglés y Salsa de acompañamiento.</li>
                                                                    <li> <b>CLASE 2:</b> Pye de Limón y Pye de Manzana.</li>
                                                                    <li> <b>CLASE 3:</b> Pastel de Acelga y Tartaletas de Frutas.</li>
                                                                    <li> <b>CLASE 4:</b> Torta de Chocolate y Brownies.</li>
                                                                    <li> <b>CLASE 5:</b> Torta Tres Leches y Pionono.</li>
                                                                    <li> <b>CLASE 6:</b> Donas y Churros.</li>
                                                                    <li> <b>CLASE 7:</b> Soufflé frio - papillon.</li>
                                                                    <li> <b>CLASE 8:</b> Examen Parcial.</li>
                                                                </ul>
                                                            </td>
                                                            <td style="background-color: var(--color6); width: 50%;">
                                                                <ul style="list-style: none;">
                                                                    <li> <b>CLASE 9:</b> Masa Hojaldre y Aplicaciones.</li>
                                                                    <li> <b>CLASE 10:</b> Tarta Linz y Torta Helada.</li>
                                                                    <li> <b>CLASE 11:</b> Pye de Pecanas y Merengado de Chirimoya.</li>
                                                                    <li> <b>CLASE 12:</b> Empanada de Carne y Quiche.</li>
                                                                    <li> <b>CLASE 13:</b> Rosca de Reyes y Rollitos de Canela.</li>
                                                                    <li> <b>CLASE 14:</b> Helado de Lúcuma, Helado de Chocolate y Tulipa.</li>
                                                                    <li> <b>CLASE 15:</b> Elaboración de costos de Pastelería.</li>
                                                                    <li> <b>CLASE 16:</b> Examen Final.</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr style="text-align:center;background-color:white;">
                                                            <td colspan="2" class="text-white" style="background-color:var(--color2);">SEGUNDO MÓDULO</td>
                                                            <!-- <td class="text-white" style="background-color:var(--color2);">MAQUILLAJE</td> -->
                                                        </tr>
                                                        <tr style="background-color:white;">
                                                            <td style="background-color: var(--color6); width: 50%;">
                                                                <ul style="list-style: none;">
                                                                    <li> <b>CLASE 1:</b> Mousse de Tres Chocolates y Torta de Moka.</li>
                                                                    <li> <b>CLASE 2:</b> Fraisier y Torta Sacher.</li>
                                                                    <li> <b>CLASE 3:</b> Selva Negra y Tiramisú.</li>
                                                                    <li> <b>CLASE 4:</b> Creme Brulé y TarteTatin con masa hojaldre.</li>
                                                                    <li> <b>CLASE 5:</b> Saint Honore y Paris Brest con hojaldre.</li>
                                                                    <li> <b>CLASE 6:</b> Cheesecake y Bruselina.</li>
                                                                    <li> <b>CLASE 7:</b> Torta Charlotte y Torta Opera.</li>
                                                                    <li> <b>CLASE 8:</b> Examen Parcial.</li>
                                                                </ul>
                                                            </td>
                                                            <td style="background-color: var(--color6); width: 50%;">
                                                                <ul style="list-style: none;">
                                                                    <li> <b>CLASE 9:</b> Bavarois de Maracuya y Urubamba.</li>
                                                                    <li> <b>CLASE 10:</b> Chocolatería Fina.</li>
                                                                    <li> <b>CLASE 11:</b> Strudel de Manzana y Vol Au Vent con Fricassé.</li>
                                                                    <li> <b>CLASE 12:</b> Vesubio y Torta Pomme.</li>
                                                                    <li> <b>CLASE 13:</b> Peras al Sabayón y Zucotto.</li>
                                                                    <li> <b>CLASE 14:</b> Masa Elástica y Decoración en Maqueta.</li>
                                                                    <li> <b>CLASE 15:</b> Festival de Cupcakes.</li>
                                                                    <li> <b>CLASE 16:</b> Examen Final.</li>
                                                                </ul>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                    <tbody>
                                                        <tr style="text-align:center;background-color:white;">
                                                            <td colspan="2" class="text-white" style="background-color:var(--color2);">TERCER MÓDULO</td>
                                                            <!-- <td class="text-white" style="background-color:var(--color2);">MAQUILLAJE</td> -->
                                                        </tr>
                                                        <tr style="background-color:white;">
                                                            <td style="background-color: var(--color6); width: 50%;">
                                                                <ul style="list-style: none;">
                                                                    <li> <b>CLASE 1:</b> Empanadas, boda, Vainilla y chocolate.</li>
                                                                    <li> <b>CLASE 2:</b> Empanadas de carne pollo.</li>
                                                                    <li> <b>CLASE 3:</b> Masa Hojaldre, piono, pay de manzana, cono relleno, orejitas.</li>
                                                                    <li> <b>CLASE 4:</b> Panes (karamandunka, francés, yema, integral).</li>
                                                                    <li> <b>CLASE 5:</b> Festibal de kekes: Naranja, Chocolate, Novia, Indu y Zanahoria.</li>
                                                                    <li> <b>CLASE 6:</b> Decoración de Tortas.</li>
                                                                    <li> <b>CLASE 7:</b> Turrones.</li>
                                                                    <li> <b>CLASE 8:</b> Evaluación</li>
                                                                    <li> <b>CLASE 9:</b> Pay de Manzana, Limón y Fresa.</li>
                                                                </ul>
                                                            </td>
                                                            <td style="background-color: var(--color6); width: 50%;">
                                                                <ul style="list-style: none;">
                                                                    <li> <b>CLASE 10:</b> Pastelería Fina: Brucelinas, Torta Ganache, Torta Bombom.</li>
                                                                    <li> <b>CLASE 11:</b> Biscocho, pan de maíz e integral.</li>
                                                                    <li> <b>CLASE 12:</b> Evaluación.</li>
                                                                    <li> <b>CLASE 13:</b> Postres en Vasos Chiskey maracuyá, Suspiro y tartaleta.</li>
                                                                    <li> <b>CLASE 14:</b> Panes (Pitipan, Chabata y Enrollado de cebolla).</li>
                                                                    <li> <b>CLASE 15:</b> Escultura de Chantilly: Perrito, Palomita, Cisne.</li>
                                                                    <li> <b>CLASE 16:</b> Chocolatería.</li>
                                                                    <li> <b>CLASE 17:</b> Bocaditos (Alitas a la brouche, minicausitas).</li>
                                                                    <li> <b>CLASE 18:</b> Examen Final.</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 d-flex cursos">
                    <!-- <div class="line"></div> -->
                    <div>
                        <div style="border-bottom: solid 2px var(--color1);">
                            <h4 style="color:var(--color1);">Más Carreras</h4>
                        </div>
                        <br>
                        <div class="card mb-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-md-4">
                                    <img src="./assets/img/web/portada_cosmetologia.jpg" alt="foto">
                                </div>
                                <div class="col-md">
                                    <div class="card-body">
                                        <a href="#" class="card-title">Cosmetología</a>
                                        <p class="p-carrera">La carrera de Cosmetología tiene como objetivo formar profesionales capaces de ocuparse de la belleza y la salud de la piel de las personas con todas las herramientas propicias a tal fin. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-md-4">
                                    <img src="./assets/img/web/portada_pasteleria.jpg" alt="foto">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <a href="#" class="card-title">Pastelería</a>
                                        <p class="p-carrera">
                                            La carrera de pastelero forma a los profesionales que se encargarán de realizar una cantidad de diversos postres, desde pan dulce hasta grandes pasteles que son encargados por los consumidores de una pastelería.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>








    <!-- footer -->
    <?php include_once './includes/footer.php'; ?>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        addEventListener('DOMContentLoaded', () => {
            const contadores = document.querySelectorAll('.contador_cantidad')
            const velocidad = 10000000000

            const animarContadores = () => {
                for (const contador of contadores) {
                    const actualizar_contador = () => {
                        let cantidad_maxima = +contador.dataset.cantidadTotal,
                            valor_actual = +contador.innerText,
                            incremento = cantidad_maxima / velocidad

                        if (valor_actual < cantidad_maxima) {
                            contador.innerText = Math.ceil(valor_actual + incremento)
                            setTimeout(actualizar_contador, 50)
                        } else {
                            contador.innerText = cantidad_maxima
                        }
                    }
                    actualizar_contador()
                }
            }
            //IntersectionObserver
            const mostrarContadores = elementos => {
                elementos.forEach(elemento => {
                    if (elemento.isIntersecting) {
                        elemento.target.classList.add('animar')
                        elemento.target.classList.remove('ocultar')
                        setTimeout(animarContadores, 600)
                    }
                });
            }
            const observer = new IntersectionObserver(mostrarContadores, {
                threshold: 0.75 //0-1
            })

            const elementosHTML = document.querySelectorAll('.contador')
            elementosHTML.forEach(elementoHTML => {
                observer.observe(elementoHTML)
            })
        });
    </script>
    <script>
        AOS.init();

        const enviarCorreo = (e) => {
            e.preventDefault();
            let form = new FormData(document.getElementById("formContacto"));
            fetch('/lib/correo_inicio.php', {
                method: "POST",
                body: form
            }).then(function(res) {
                return res.text();
            }).then(function(res) {
                alert(res);
                e.target.reset();
            });
        }
    </script>

</body>

</html>