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
                url('./assets/img/web/cosmetologia_portada_principal.jpg');
            background-size: 100%;
            background-position: top;
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
                    <!-- <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis cumque veritatis, <br>
                        nam sequi, harum tempora praesentium obcaecati architecto sunt corporis.
                    </p> -->
                    <p>COSMETOLOGÍA</p>
                </div>
            </div>
        </div>
    </section>

    <section id="ruta">
        <div class="container py-2">
            <div class="row d-flex justify-content-">
                <div class="col-lg">
                    <a href="index.php">Inicio</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" id="carrera" style="margin-top: 3rem;">
            <div class="row justify-content-between">
                <div class="col-md-8 ">
                    <div id="apply-area" class="py-5">
                        <img src="./assets/img/web/cosmetologia_portada_interna2.webp" alt="">
                        <div class=" course-apply-btn">
                            <a href="index.php#contacto" class="default-btn">Inscríbete</a>
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
                                <button class="nav-link" id="turno-tab" data-bs-toggle="tab" data-bs-target="#turno" type="button" role="tab" aria-controls="turno" aria-selected="false"><i class="fas fa-books"></i><span>Plan Curricular Básico</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="turno2-tab" data-bs-toggle="tab" data-bs-target="#turno2" type="button" role="tab" aria-controls="turno2" aria-selected="false"><i class="fas fa-books"></i><span>Plan Curricular Avanzado</span></button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active " id="descripcion" role="tabpanel" aria-labelledby="descripcion-tab">
                                <h1>CARRERA TÉCNICA DE COSMETOLOGÍA</h1>
                                <p class="mt-3 text-justify" style="color: var(--color4);">
                                    La carrera de Cosmetología tiene como objetivo formar profesionales capaces de ocuparse de la belleza y la salud de la piel de las personas con todas las herramientas propicias a tal fin. Se trata de un cursado corto, de dos años (en algunos casos), en el cual se abordan diversas materias relacionadas a la anatomía del cuerpo humano y de la piel así como cuestiones netamente físicas, químicas y cosméticas. Los egresados de Cosmetología podrán desempeñarse en centros de estética, como asistentes de dermatólogos y de forma independiente realizando tratamientos faciales y corporales.
                                </p>
                                <img src="./assets/img/web/cosmetologia2.webp" alt="">
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-lg  d-flex justify-content-start">
                                        <div>
                                            <img id="img-icono" class="my-auto" src="./assets/img/icons/tiempo.png" alt="">
                                            <span class="my-auto">&nbsp;Duracion: 2 años</span>
                                        </div>
                                        <div class="mx-5">
                                            <img id="img-icono" class="my-auto" src="./assets/img/icons/certificado2.png" alt="">
                                            <span class="my-auto">&nbsp;Certificación a Nombre del Ministerio de Educación</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade  " id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p>La egresada en la carrera de COSMETOLOGÍA estará en capacidad de desempeñarse como:</p>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Prestador de servicios en cosmetología y estética integral implementando prácticas seguras, bioseguridad y ética profesional.</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Tratamientos faciales y manejo de protocolos en diferentes biotopos y afecciones cutáneas.</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Tratamientos corporales como masajes estéticos, relajantes, tonificantes, reductores, rea-firmantes, moldeamientos.</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Realizar peinados en general.</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Realizar Manicure y Pedicure. Etc.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Lunes, miércoles y viernes 9-12 pm</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Lunes, miércoles y jueves 3-6 pm</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Lunes, miércoles y jueves 6-9 pm</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Martes y jueves 9-12 pm</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Martes y jueves 3-6 pm</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Martes y jueves 6-9 pm</p>
                                </div>
                                <div class="d-flex">
                                    <span><i class="fas fa-check"></i></span>
                                    <p>Domingo de 9-1 pm</p>
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="text-align:center;background-color:white;">
                                                            <td class="text-white" style="background-color:var(--color2);">TRATAMIENTO CAPILAR</td>
                                                            <td class="text-white" style="background-color:var(--color2);">MAQUILLAJE</td>
                                                        </tr>
                                                        <tr style="background-color:white;">
                                                            <td style="background-color: var(--color6); width: 50%;">
                                                                <ul>
                                                                    <li>Diagnóstico del cuero cabelludo y hebra capilar.</li>
                                                                    <li>Peeling capilar.</li>
                                                                    <li>Conocimiento de las ampollas capilares.</li>
                                                                    <li>Cauterización.</li>
                                                                </ul>
                                                            </td>
                                                            <td style="background-color: var(--color6); width: 50%;">
                                                                <ul>
                                                                    <li>Técnicas métodos de maquillaje.</li>
                                                                    <li>Maquillaje natural.</li>
                                                                    <li>Maquillaje de día y de noche.</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!-- <thead class="text-white" style="background-color:var(--color1);">
                                                        <tr style="text-align:center;">
                                                            <td colspan="2">MODULO II (PESCADOS Y MARISCOS)</td>
                                                        </tr>
                                                    </thead> -->
                                                    <tbody>
                                                        <tr style="text-align:center;background-color:white;">
                                                            <td class="text-white" style="background-color:var(--color2);">ONDULACIÓN</td>
                                                            <td class="text-white" style="background-color:var(--color2);">FACIAL</td>
                                                        </tr>
                                                        <tr style="background-color:white;">
                                                            <td style="background-color: var(--color6);">
                                                                <ul>
                                                                    <li>Técnicas de ondulación básica.</li>
                                                                    <li>Ondulación con roller, agapelles, otros.</li>
                                                                    <li>Ondulación con variantes.</li>
                                                                    <li>Ondulación cabello natural y teñido.</li>
                                                                </ul>
                                                            </td>
                                                            <td style="background-color: var(--color6);">
                                                                <ul>
                                                                    <li>Limpieza facial básica profunda.</li>
                                                                    <li>Limpieza anti-acné.</li>
                                                                    <li>Tratamiento para alteraciones (acné, rosácea, seborreica).</li>
                                                                    <li>Tratamiento naturales y químicos.</li>
                                                                    <li>Tratamiento peeling superficial.</li>
                                                                </ul>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                    <!-- <thead class="text-white" style="background-color:var(--color1);">
                                                        <tr style="text-align:center;">
                                                            <td colspan="2">MODULO III (PASTELERÍA)</td>
                                                        </tr>
                                                    </thead> -->
                                                    <tbody>
                                                        <tr style="text-align:center;background-color:white;">
                                                            <td class="text-white" style="background-color:var(--color2);">TINTURA Y DECOLORACIÓN</td>
                                                            <td class="text-white" style="background-color:var(--color2);">DEPILACIÓN</td>
                                                        </tr>
                                                        <tr style="background-color:white;">
                                                            <td style="background-color: var(--color6);">
                                                                <ul>
                                                                    <li>Estudio del cabello.</li>
                                                                    <li>Técnicas de coloración.</li>
                                                                    <li>Tintes en cabellos natural.</li>
                                                                    <li>Iluminación.</li>
                                                                    <li>Retoques y pre-retoques.</li>
                                                                    <li>Tinte de canas.</li>
                                                                </ul>
                                                            </td>
                                                            <td style="background-color: var(--color6);">
                                                                <ul>
                                                                    <li>Depilación rostro.</li>
                                                                    <li>Depilación con hilo, crema y cera.</li>
                                                                    <li>Depilación con bandas.</li>
                                                                    <li>Aclaramiento de bellos del rostro, brazos y piernas.</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!-- <thead class="text-white" style="background-color:var(--color1);">
                                                        <tr style="text-align:center;">
                                                            <td colspan="2">MODULO IV (COCINA INTERNACIONAL)</td>
                                                        </tr>
                                                    </thead> -->
                                                    <tbody>
                                                        <tr style="text-align:center;background-color:white;">
                                                            <td class="text-white" style="background-color:var(--color2);">CORTE DE CABELLO</td>
                                                            <td class="text-white" style="background-color:var(--color2);">MANICURE</td>
                                                        </tr>
                                                        <tr style="background-color:white;">
                                                            <td style="background-color: var(--color6);">
                                                                <ul>
                                                                    <li>Estudio del rostro de acuerdo al corte.</li>
                                                                    <li>Cortes básicos con tijeras, navaja y máquina.</li>
                                                                    <li>Corte simétricos y asimétricos.</li>
                                                                    <li>Corte en grados.</li>
                                                                    <li>Corte degrafilado.</li>
                                                                    <li>Técnicas de acabados.</li>
                                                                </ul>
                                                            </td>
                                                            <td style="background-color: var(--color6);">
                                                                <ul>
                                                                    <li>Manicure básica, spa exprés.</li>
                                                                    <li>Manicure francesa, brasilera.</li>
                                                                    <li>Manicure parafina.</li>
                                                                    <li>Manicure anti edad.</li>
                                                                    <li>Manicure diseño.</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr style="text-align:center;background-color:white;">
                                                            <td class="text-white" style="background-color:var(--color2);">PEINADOS</td>
                                                            <td class="text-white" style="background-color:var(--color2);">PEDICURE</td>
                                                        </tr>
                                                        <tr style="background-color:white;">
                                                            <td style="background-color: var(--color6);">
                                                                <ul>
                                                                    <li>Trenzas.</li>
                                                                    <li>Moños.</li>
                                                                    <li>Cepillados, ondas.</li>
                                                                    <li>Planchado Tenazas.</li>
                                                                    <li>Técnica del Bruch.</li>
                                                                </ul>
                                                            </td>
                                                            <td style="background-color: var(--color6);">
                                                                <ul>
                                                                    <li>Pedicure básico.</li>
                                                                    <li>Pedicure parafina.</li>
                                                                    <li>Tratamiento y limpieza de uñas.</li>
                                                                    <li>Tratamiento hiperqueratosis.</li>
                                                                    <li>Masajes relajantes.</li>
                                                                    <li>Hidratación de los pies.</li>
                                                                    <li>Colocación de uñas postizas.</li>
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
                            <div class="tab-pane fade" id="turno2" role="tabpanel" aria-labelledby="turno2-tab">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 my-auto">
                                            <div class="table-responsive mt-5 tableover">
                                                <table class="table table-bordered">
                                                    <thead class="text-white" style="background-color:var(--color1);">
                                                        <tr style="text-align:center;">
                                                            <td colspan="2">PLAN CURRICULAR PROFESIONAL AVANZADO</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="text-align:center;background-color:white;">
                                                            <td colspan="2" class="text-white" style="background-color:var(--color2);">MÓDULO PROFESIONAL DE EXTENSIONES</td>
                                                            <!-- <td class="text-white" style="background-color:var(--color2);">MAQUILLAJE</td> -->
                                                        </tr>
                                                        <tr style="background-color:white;">
                                                            <td style="background-color: var(--color6); width: 50%;">
                                                                <ul>
                                                                    <li>Tejidos de extensiones.</li>
                                                                    <li>Colocación - Cocidas.</li>
                                                                    <li>Colocación - Keratina.</li>
                                                                </ul>
                                                            </td>
                                                            <td style="background-color: var(--color6); width: 50%;">
                                                                <ul>
                                                                    <li>Colocación - Microrins.</li>
                                                                    <li>Colocación - Ganchos.</li>
                                                                    <li>Pelucas.</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!-- <thead class="text-white" style="background-color:var(--color1);">
                                                        <tr style="text-align:center;">
                                                            <td colspan="2">MODULO II (PESCADOS Y MARISCOS)</td>
                                                        </tr>
                                                    </thead> -->
                                                    <tbody>
                                                        <tr style="text-align:center;background-color:white;">
                                                            <td colspan="2" class="text-white" style="background-color:var(--color2);">MÓDULO PROFESIONAL DE LACEADO</td>
                                                            <!-- <td class="text-white" style="background-color:var(--color2);">FACIAL</td> -->
                                                        </tr>
                                                        <tr style="background-color:white;">
                                                            <td style="background-color: var(--color6);">
                                                                <ul>
                                                                    <li>Teoría y Técnica.</li>
                                                                    <li>Cepillado y Planchado.</li>
                                                                    <li>Laceado Dual.</li>
                                                                    <li>Laceado Brasilero.</li>
                                                                </ul>
                                                            </td>
                                                            <td style="background-color: var(--color6);">
                                                                <ul>
                                                                    <li>Laceado Japonés.</li>
                                                                    <li>Laceado Americano.</li>
                                                                    <li>Laceado Keratina.</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!-- <thead class="text-white" style="background-color:var(--color1);">
                                                        <tr style="text-align:center;">
                                                            <td colspan="2">MODULO III (PASTELERÍA)</td>
                                                        </tr>
                                                    </thead> -->
                                                    <tbody>
                                                        <tr style="text-align:center;background-color:white;">
                                                            <td colspan="2" class="text-white" style="background-color:var(--color2);">MÓDULO PROFESIONAL DE UÑAS POSTIZAS</td>
                                                            <!-- <td class="text-white" style="background-color:var(--color2);">DEPILACIÓN</td> -->
                                                        </tr>
                                                        <tr style="background-color:white;">
                                                            <td style="background-color: var(--color6);">
                                                                <ul>
                                                                    <li>Tips</li>
                                                                    <li>Acrílico</li>
                                                                    <li>Gel</li>
                                                                    <li>Acrigel</li>
                                                                    <li>Encapsulado</li>
                                                                    <li>Acrílico</li>
                                                                </ul>
                                                            </td>
                                                            <td style="background-color: var(--color6);">
                                                                <ul>
                                                                    <li>Encapsulado Gel.</li>
                                                                    <li>Porcelana, 3D, Mano Alzada.</li>
                                                                    <li>Esculpidas en Gel.</li>
                                                                    <li>Esculpidas en Acrílico.</li>
                                                                    <li>Marmoleado.</li>
                                                                    <li>Baby Boamer.</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!-- <thead class="text-white" style="background-color:var(--color1);">
                                                        <tr style="text-align:center;">
                                                            <td colspan="2">MODULO IV (COCINA INTERNACIONAL)</td>
                                                        </tr>
                                                    </thead> -->
                                                    <tbody>
                                                        <tr style="text-align:center;background-color:white;">
                                                            <td colspan="2" class="text-white" style="background-color:var(--color2);">MÓDULO PROFESIONAL DE MAQUILLAJE</td>
                                                            <!-- <td class="text-white" style="background-color:var(--color2);">MANICURE</td> -->
                                                        </tr>
                                                        <tr style="background-color:white;">
                                                            <td style="background-color: var(--color6);">
                                                                <ul>
                                                                    <li>Teoría.</li>
                                                                    <li>Camuflaje.</li>
                                                                    <li>Técnica en Color en Ojos y Labios.</li>
                                                                    <li>Técnica en Porcelana.</li>
                                                                    <li>Maquillaje pasarela.</li>
                                                                    <li>Maquillaje de Novia, Noche y Día.</li>
                                                                    <li>Maquillaje en piel juvenil y madura.</li>
                                                                </ul>
                                                            </td>
                                                            <td style="background-color: var(--color6);">
                                                                <ul>
                                                                    <li>Diseño de cejas.</li>
                                                                    <li>Maquillaje de 15 años.</li>
                                                                    <li>Maquillaje de caballero.</li>
                                                                    <li>Maquillaje de alta fantasía.</li>
                                                                    <li>Caritas pintadas.</li>
                                                                    <li>Maquillaje cambio de género.</li>
                                                                    <li>Caracterización de heridas.</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr style="text-align:center;background-color:white;">
                                                            <td colspan="2" class="text-white" style="background-color:var(--color2);">MÓDULO PROFESIONAL DE PESTAÑAS Y CEJAS</td>
                                                            <!-- <td class="text-white" style="background-color:var(--color2);">PEDICURE</td> -->
                                                        </tr>
                                                        <tr style="background-color:white;">
                                                            <td style="background-color: var(--color6);">
                                                                <ul>
                                                                    <li>Planchado de Cejas.</li>
                                                                    <li>Colocación de Pestañas 1 x 1</li>
                                                                    <li>Extensión de Pestañas.</li>
                                                                </ul>
                                                            </td>
                                                            <td style="background-color: var(--color6);">
                                                                <ul>
                                                                    <li>Pestañas de Tira.</li>
                                                                    <li>Mechas Baby Ligthts.</li>
                                                                    <li>Rizado y Tinturación de Pestañas.</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr style="text-align:center;background-color:white;">
                                                            <td colspan="2" class="text-white" style="background-color:var(--color2);">MÓDULO PROFESIONAL DE TINTE</td>
                                                            <!-- <td class="text-white" style="background-color:var(--color2);">PEDICURE</td> -->
                                                        </tr>
                                                        <tr style="background-color:white;">
                                                            <td style="background-color: var(--color6);">
                                                                <ul>
                                                                    <li>Teoría de las etapas de una decoloración.</li>
                                                                    <li>Mechas con Retoques.</li>
                                                                    <li>Rayitos, Iluminación, Californianas.</li>
                                                                    <li>Splash Lights.</li>
                                                                </ul>
                                                            </td>
                                                            <td style="background-color: var(--color6);">
                                                                <ul>
                                                                    <li>Decapage.</li>
                                                                    <li>Coloración en Fantasía.</li>
                                                                    <li>Mechas Ombre.</li>
                                                                    <li>Mechas Balayage.</li>
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
                                    <img src="./assets/img/web/gastronomia_portada_interna.jpg" alt="foto">
                                </div>
                                <div class="col-md">
                                    <div class="card-body">
                                        <a href="gastronomia.php" class="card-title">Gastronomía</a>
                                        <p class="p-carrera">Como alumno de la Carrera de Gastronomía recibirás una formación culinaria integral, con una visión empresarial sólida, brindándote las herramientas que te permitirán desarrollar habilidades y destrezas para alcanzar los estándares que exige el mercado laboral. </p>
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
                                        <a href="pasteleria.php" class="card-title">Pastelería</a>
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