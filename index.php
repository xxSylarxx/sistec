<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Somos una Institución de Formación Técnica, ubicada en el distrito de San Juan de Miraflores, bajo la jurisdicción de la Unidad de Gestión Educativa Local 01 (UGEL 01) del Ministerio de Educación del Perú. Formando Técnicos Emprendedores.">
    <link rel="shortcut icon" href="./assets/img/icons/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.0/css/all.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/web.css">
    <title>SISTEC</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- carousel owl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

        #slider .titleContainer {
            background: rgb(0 0 0 / 40%);
            position: absolute;
            /* left: 10%; */
            padding-left: 10%;
            left: 0;
            right: 0;
            display: flex;
            justify-content: start;
            align-items: flex-end;
            height: 100%;
            padding-bottom: 20%;
        }

        #slider .titleContainer .title {
            font-size: 60px;
            color: #fff;
        }

        .slider-btn {
            background-color: var(--color1);
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

        .slider-btn:hover {
            background-color: var(--color2);
            color: #fff;
        }

        #marcas .marca {
            color: var(--color3);
            display: flex;
            /* justify-content: center; */
            /* align-items: center; */
            text-align: center;
            padding: 4rem 3rem;
        }

        #marcas .marca .item {
            align-self: center;
        }

        #marcas .marca .item img {
            text-align: center;
            height: 4rem;
        }

        #marcas .marca .item h4 {
            display: flex;
            justify-content: center;
        }

        #misionVision {
            background-image: url('./assets/img/web/misionVisionBG3.jpg');
            /* background-image: url('./assets/img/web/droneBG.jpg'); */
            background-repeat: no-repeat;
            background-size: 100%;
        }

        #misionVision .pad {
            padding: 3rem 0;
        }

        #misionVision .mision {
            /* background-color: #474747; */
            background-color: rgb(71 71 71 / 80%);
            /* background-image: url('./assets/img/web/misionOscura.png'); */
            /* background-image: url('./assets/img/web/misionVisionBG3.jpg'); */
            padding: 3rem 4rem;
            margin: 2rem;
        }

        #misionVision .vision {
            background-color: rgb(71 71 71 / 80%);
            /* background-image: url('./assets/img/web/visionOscura2.png'); */
            /* background-image: url('./assets/img/web/misionVisionBG3.jpg'); */
            padding: 3rem 4rem;
            margin: 2rem;
        }

        #misionVision .mision .line {
            background-color: var(--color2);
            height: 5px;
            width: 40px;
            margin-top: 1rem;
        }

        #misionVision .vision .line {
            background-color: var(--color1);
            height: 5px;
            width: 40px;
            margin-top: 1rem;
        }

        #misionVision .mision p {
            color: var(--color3);
            margin-top: 2rem;
            line-height: 2;
            text-align: justify;
        }

        #misionVision .vision p {
            color: var(--color3);
            margin-top: 2rem;
            line-height: 2;
            text-align: justify;
        }

        #misionVision .mision .title {
            color: var(--color3);
            font-size: 36px;
        }

        #misionVision .vision .title {
            color: var(--color3);
            font-size: 36px;
        }


        #somos img {
            width: 100%;
            height: 100%;
        }

        #somos .text {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 3%;
        }

        #somos .text .title {
            margin-bottom: 2rem;
            color: var(--color1);
        }

        #somos .text p {
            font-size: 16px;
            line-height: 1.8;
            text-align: justify;
        }

        #valores .item {
            display: flex;
            justify-content: center;
            /* align-items: center; */
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        #valores .item img {
            height: 100px;
            width: 100px;
        }

        #valores .item .title {
            color: var(--color1);
            text-transform: uppercase;
            font-size: 22px;
        }

        #valores .item .info {
            margin-left: 2rem;
        }

        #valores .item .info p {
            text-align: justify;
        }

        #suscripcion {
            background-image: url(./assets/img/web/suscripcionBG.jpg);
            padding: 8rem 0 4rem 0;
            background-position: center;
        }

        #suscripcion .title {
            text-align: center;
            color: var(--color2);
            text-transform: uppercase;
        }

        #suscripcion .title2 {
            text-align: center;
            color: var(--color3);
            /* text-transform: uppercase; */
        }

        #suscripcion .form-control-lg {
            padding: 1rem 2rem;
            font-size: 1.25rem;
            border-radius: 0;
        }

        #suscripcion .sub {
            background: var(--color1);
            color: var(--color3);
            width: 100%;
            height: 100%;
            border-radius: 8px;
            padding: 1rem 2rem;
            transition: all .3s ease-in-out;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
        }

        #suscripcion .sub:hover {
            transform: scale(1.06);
        }

        #proyecto .card {
            border: 0;
            /* width: 250px; */
            margin: 1rem 0;
        }

        #proyecto .card:hover img {
            transform: scale(1.18);
        }

        #proyecto .card:hover .imgC {
            border-radius: 10px;
        }

        #proyecto .card .imgC {
            overflow: hidden;
            height: 350px;
            /* width: 250px; */
        }

        #proyecto .card img {
            transition: all .3s ease-in-out;
            /* border-radius: 10px; */
            width: 100%;
            /* width: 250px; */
            /* height: 150px; */
            height: 100%;
            object-fit: cover;
        }

        #proyecto .card .card-title {
            font-weight: bold;
            text-transform: uppercase;
            color: var(--color1);
        }

        #proyecto .card .card-body {
            padding: 1rem 0;
        }

        #proyecto .card .card-body p {
            margin-top: 1rem;
            /* font-size: 16px; */
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-align: justify;
        }

        #proyecto .line {
            background-color: #DDDDDD;
            height: 2px;
            width: 100%;
            margin-top: 1rem;
        }

        #proyecto .sub {
            background: var(--color1);
            color: var(--color3);
            border-radius: 8px;
            padding: 1rem 2rem;
            transition: all .3s ease-in-out;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
        }

        #proyecto .sub:hover {
            transform: scale(1.06);
        }


        #testimonio .line {
            background-color: #DDDDDD;
            height: 2px;
            width: 100%;
            margin-top: 1rem;
        }

        #testimonio .testiC {
            text-align: center;
        }

        /* #testimonio .testiC p::before {
            content: "“";
            font-size: 100px;
            line-height: 1;
            float: left;
            color: var(--color1);
            margin-right: 10px;
        } */

        #testimonio .testi {
            display: flex;
            margin-top: 25px;
            align-items: center;
            justify-content: center;
        }

        #testimonio .testi-image {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 10px;
        }

        #testimonio .testi-nombre {
            font-weight: bold;
            color: var(--color1);
        }

        #testimonio #carouselExampleControls2 .carousel-control-next,
        #testimonio #carouselExampleControls2 .carousel-control-prev {
            position: absolute;
            top: 85px;
            bottom: 0;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 15%;
            padding: 0;
            color: #fff;
            text-align: center;
            background: 0 0;
            border: 0;
            opacity: .5;
            transition: opacity .15s ease;
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

        #contacto {
            /* background: linear-gradient(to bottom, rgba(218, 37, 28, 0.7) 100%, red 100%, #ffff 100%), url("./assets/img/web/formulario1.jpg"); */
            /* background: linear-gradient(to bottom, rgba(221, 0, 0, 0.8), rgba(0, 0, 0, .8)), url("./assets/img/web/formulario1.jpg"); */
            background: linear-gradient(to bottom, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url("./assets/img/web/formulario3.jpg");
            /* background-image: linear-gradient(to left top, #183883, #183883, #da251c, #da251c, #da251c); */
            /* background-image: linear-gradient(to left top, #183883, #183883, #da251c, #da251c, #da251c), url("./assets/img/web/tapiz2.jpg"); */
            background-size: 100%;
            background-position: top;
            /* background-attachment: fixed; */
            background-repeat: no-repeat;
            /* background-size: cover; */
            mix-blend-mode: multiply;
            padding: 4rem 0 4rem;
        }

        /* animacion temblor */

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
            /* padding-bottom: 5rem; */
        }

        #nosotros p {
            text-align: justify;
        }

        /* Estilos de cursos */
        #cursos {
            background-image: url('./assets/img/web/bg_tapiz.webp');
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        #cursos .card .news {
            position: absolute;
            z-index: 1;
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

        #cursos .owl-dots {
            display: none;
        }


        #cursos .owl-carousel .owl-stage-outer {
            padding: 0;
        }

        #cursos .owl-carousel {
            position: relative;
        }

        #cursos .owl-theme .owl-nav {
            /* margin-top: -292px; */

            position: absolute;
        }

        #cursos .owl-prev {
            margin-right: 10rem;
            font-size: 40px;
        }

        #cursos .owl-next {
            margin-left: 35rem;
            font-size: 40px;
        }

        /* animacion para aparecer */
        #cursos div.card>.card-footer {
            -webkit-animation: slide-in-top 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
            animation: slide-in-top .5s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
        }

        @-webkit-keyframes slide-in-top {
            0% {
                -webkit-transform: translateY(-100px);
                transform: translateY(-100px);
                opacity: 0;
            }

            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slide-in-top {
            0% {
                -webkit-transform: translateY(-100px);
                transform: translateY(-100px);
                opacity: 0;
            }

            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Estilos de noticias */

        #noticias {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        #noticias .card .news {
            position: absolute;
            z-index: 1;
            /* top: 0.5px; */
            /* left: -0.5px; */
            top: 54%;
            left: 30px;
            padding: 4px 12px;
            background-color: var(--color1);
            color: white;
            font-size: 14px;
            font-weight: bold;
            transform: translateY(-5%);
        }

        #noticias .card {
            border: 0px;
            border-radius: 0px;
        }

        #noticias div.card img {
            transition: .3s;
        }

        #noticias div.card:hover img {
            transform: scale(1.06);
        }

        #noticias .card-body .title {
            font-size: 18px;
            color: var(--color4);
        }

        #noticias .card-body .title:hover {
            font-size: 18px;
            color: var(--color1);
        }

        #noticias .card .detalle {
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-align: justify;
            font-size: 17px;
            color: #747474;
            line-height: 1.6;
        }

        #noticias .card-footer {
            background: var(--color1);
            color: #fff;
        }

        #noticias .card-footer span {
            margin-right: 10px;
        }

        #noticias img {
            object-fit: cover;
        }

        /* animacion para aparecer */
        /* #noticias div.card>.card-footer {
            -webkit-animation: slide-in-top 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
            animation: slide-in-top .5s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
        } */

        /* Estilos de logros */
        #logros {
            padding-top: 5rem;
            padding-bottom: 5rem;
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

            #slider .titleContainer .title {
                font-size: 20px;
            }

            #slider .titleContainer {
                padding-top: 42%;
            }

            .slider-btn {
                padding: 10px 20px;
            }

            #section-plataform {
                margin-top: 0;
            }

            #nosotros #parte1,
            #nosotros #parte2 {
                font-size: 40px;
            }

            #cursos #parte1,
            #cursos #parte2 {
                font-size: 40px;
            }

            #logros #parte1,
            #logros #parte2 {
                font-size: 40px;
            }

            #noticias #parte1,
            #noticias #parte2 {
                font-size: 40px;
            }


            #contacto {
                background-size: 280%
            }

        }
    </style>

    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>

    <!-- header -->
    <?php include_once './includes/header.php'; ?>

    <div class="container-fluid px-0" id="slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="titleContainer">
                        <div class="animate__animated animate__fadeInLeft">
                            <h2 class="title"> COSMETOLOGÍA </h2>
                            <div class="mt-4 mt-md-5">
                                <a class="slider-btn" href="cosmetologia.php">Ver Más</a>
                            </div>
                        </div>
                    </div>
                    <img src="./assets/img/banner/cosmetologia.jpg" width="100%">
                </div>
                <div class="carousel-item">
                    <div class="titleContainer">
                        <div class="animate__animated animate__fadeInLeft">
                            <h2 class="title"> GASTRONOMÍA </h2>
                            <div class="mt-4 mt-md-5">
                                <a class="slider-btn" href="gastronomia.php">Ver Más</a>
                            </div>
                        </div>
                    </div>
                    <img src="./assets/img/banner/gastronomia.jpg" width="100%">
                </div>
                <div class="carousel-item">
                    <div class="titleContainer">
                        <div class="animate__animated animate__fadeInLeft">
                            <h2 class="title"> PASTELERÍA, PANADERÍA <br> Y REPOSTERÍA </h2>
                            <div class="mt-4 mt-md-5">
                                <a class="slider-btn" href="pasteleria.php">Ver Más</a>
                            </div>
                        </div>
                    </div>
                    <img src="./assets/img/banner/pasteleria2.jpg" width="100%">
                </div>
                <div class="carousel-item">
                    <div class="titleContainer">
                        <div class="animate__animated animate__fadeInLeft">
                            <h2 class="title"> COMPUTACIÓN </h2>
                            <div class="mt-4 mt-md-5">
                                <a class="slider-btn" href="computacion.php">Ver Más</a>
                            </div>
                        </div>
                    </div>
                    <img src="./assets/img/banner/computacion2.jpg" width="100%">
                </div>
                <div class="carousel-item">
                    <div class="titleContainer">
                        <div class="animate__animated animate__fadeInLeft">
                            <h2 class="title"> DISEÑO <br> GRÁFICO </h2>
                            <div class="mt-4 mt-md-5">
                                <a class="slider-btn" href="diseno.php">Ver Más</a>
                            </div>
                        </div>
                    </div>
                    <img src="./assets/img/banner/diseno.jpg" width="100%">
                </div>
                <div class="carousel-item">
                    <div class="titleContainer">
                        <div class="animate__animated animate__fadeInLeft">
                            <h2 class="title"> INDUSTRÍA DEL <br> VESTIDO </h2>
                            <div class="mt-4 mt-md-5">
                                <a class="slider-btn" href="vestido.php">Ver Más</a>
                            </div>
                        </div>
                    </div>
                    <img src="./assets/img/banner/vestido.jpg" width="100%">
                </div>
                <div class="carousel-item">
                    <div class="titleContainer">
                        <div class="animate__animated animate__fadeInLeft">
                            <h2 class="title"> BARBERÍA </h2>
                            <div class="mt-4 mt-md-5">
                                <a class="slider-btn" href="barberia.php">Ver Más</a>
                            </div>
                        </div>
                    </div>
                    <img src="./assets/img/banner/barberia.jpg" width="100%">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <section id="section-plataform" data-aos="fade-up" class="aos-init aos-animate">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3 col-md-6" id="row-section-plataform">
                    <div class="row">
                        <div class="col-lg-2">
                            <center><img src="./assets/img/icons/calendario.png" alt="" width="50" height="50"></center>
                        </div>
                        <div class="col-lg-9">
                            <h5>Flexibilidad de Horarios</h5>
                            <br>
                            <p>Ofrecemos horarios flexibles e ideales para personas que trabajan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" id="row-section-plataform">
                    <div class="row">
                        <div class="col-lg-2">
                            <center><img src="./assets/img/icons/instructor.png" alt="" width="50" height="50"></center>
                        </div>
                        <div class="col-lg-9">
                            <h5>Docentes Calificados</h5>
                            <br>
                            <p>Contamos con Profesionales experimentados en operación y enseñanza.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" id="row-section-plataform">
                    <div class="row">
                        <div class="col-lg-2">
                            <center><img src="./assets/img/icons/libro.png" alt="" width="50" height="50"></center>
                        </div>
                        <div class="col-lg-9">
                            <h5>Educación Personalizada</h5>
                            <br>
                            <p>Grupos pequeños para brindar una instrucción personalizada.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" id="row-section-plataform">
                    <div class="row">
                        <div class="col-lg-2">
                            <center><img src="./assets/img/icons/certificado.png" alt="" width="50" height="50"></center>
                        </div>
                        <div class="col-lg-9">
                            <h5>Certificación</h5>
                            <br>
                            <p>Al concluir tus estudios emitiremos un certificado con valor oficial.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="nosotros">
        <div class="container">
            <div class="row">
                <div class="col-lg col-lg-6 my-auto">
                    <div id="titulo" class="ps-4" style="border-left: 3px solid var(--color1);">
                        <h2 id="parte1">Sobre</h2>
                        <h2 id="parte2">&nbsp;Nosotros</h2>
                    </div>
                    <br>
                    <div class="ps-4">
                        <p>Somos una Institución de Formación Técnica, ubicada en el distrito de San Juan de
                            Miraflores, bajo la jurisdicción de la Unidad de Gestión Educativa Local 01 (UGEL 01)
                            del Ministerio de Educación del Perú. Formando Técnicos Emprendedores. </p>
                        <br>
                        <div class="about-btn mt-45">
                            <a class="default-btn" href="nosotros.php">Ver Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-lg-6">

                    <img src="./assets/img/web/nosotros.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="cursos">
        <div class="container">
            <div class="row">
                <div class="col-lg col-lg-6 my-auto ps-md-0">
                    <div id="titulo" class="ps-4" style="border-left: 3px solid var(--color1);">
                        <h2 id="parte2">Nuestros</h2>
                        <h2 id="parte1">&nbsp;Cursos</h2>
                    </div>
                    <div class="ps-4">
                        <br>
                        <p>Podrás seguir actualizándote con nuestros cursos, diseñados para que puedas
                            seguir especializándote y con la más alta calidad educativa.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3 my-3 p-0">

                    <div class="card shadow-sm" style="background: rgb(248, 248, 248);">
                        <span class="news">Cursos</span>
                        <div style="overflow: hidden;">
                            <img src="./assets/img/web/computacion.jpg" width="100%" height="300">
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color4);">COMPUTACIÓN</h5>
                            <div class="detalle">
                                Los cursos que forman parte del Área de
                                computación permitirán al estudiante recibir
                                una sólida formación básica para el manejo de
                                la computadora y las aplicaciones de oficina
                                desarrollando sus habilidades y capacidades que
                                le permitirán desempeñarse como colaborador
                                efectivo en los centros de informática de
                                organizaciones productivas tanto públicas como privadas.
                            </div>
                        </div>
                        <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                            <div class="row p-3">
                                <div class="col-lg  d-flex justify-content-start">
                                    <img class="my-auto" src="./assets/img/icons/tiempo.png" height="20" width="20" alt="">
                                    <span class="my-auto">&nbsp;Duracion: 8 meses</span>
                                </div>
                            </div>
                            <div class="course-btn">
                                <a class="default-btn2" href="computacion.php">Ver Más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-3 p-0">
                    <div class="card shadow-sm" style="background: rgb(248, 248, 248);">
                        <span class="news">Cursos</span>
                        <div style="overflow: hidden;">
                            <img src="./assets/img/web/diseño.jpg" width="100%" height="300">
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color4);">DISEÑO GRÁFICO</h5>
                            <div class="detalle">
                                Tiene como objetivo desarrollar en el estudiante conocimientos sobre las metodologías
                                de creación de imágenes, técnicas de expresión gráfica y apoyadas en el uso de las
                                tecnologías de la información, adquiriendo las habilidades y capacidades para la búsqueda e
                                implementación de soluciones visuales optimas a los problemas de la comunicación gráfica y publicitaria.
                            </div>
                        </div>
                        <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                            <div class="row p-3">
                                <div class="col-lg  d-flex justify-content-start">
                                    <img class="my-auto" src="./assets/img/icons/tiempo.png" height="20" width="20" alt="">
                                    <span class="my-auto">&nbsp;Duracion: 1 año</span>

                                </div>
                            </div>
                            <div class="course-btn">
                                <a class="default-btn2" href="diseno.php">Ver Más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-3 p-0">
                    <div class="card shadow-sm" style="background: rgb(248, 248, 248);">
                        <span class="news">Cursos</span>
                        <div style="overflow: hidden;">
                            <img src="./assets/img/web/vestido.jpg" width="100%" height="300">
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color4);">IND DEL VESTIDO</h5>
                            <div class="detalle">
                                El curso de Industria del Vestido tiene la finalidad de satisfacer
                                la demanda de personal calificado para diseñar, confeccionar, fabricar,
                                e innovar prendas de vestir, mediante el desarrollo de habilidades en dibujo,
                                selección de texturas, formas, colores; así como en la operación de equipos de
                                la industria del vestido, que le permitan aportar y crear soluciones en el campo del diseño de modas.
                            </div>
                        </div>
                        <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                            <div class="row p-3">
                                <div class="col-lg  d-flex justify-content-start">
                                    <img class="my-auto" src="./assets/img/icons/tiempo.png" height="20" width="20" alt="">
                                    <span class="my-auto">&nbsp;Duracion: 1 año</span>
                                </div>
                            </div>
                            <div class="course-btn">
                                <a class="default-btn2" href="vestido.php">Ver Más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-3 p-0">
                    <div class="card shadow-sm" style="background: rgb(248, 248, 248);">
                        <span class="news">Cursos</span>
                        <div style="overflow: hidden;">
                            <img src="./assets/img/web/barberia.jpg" width="100%" height="300">
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold text-uppercase " style="font-size: 18px;color:var(--color4);">BARBERÍA</h5>
                            <div class="detalle">
                                La Barbería es ya una tendencia en varones del Perú y todo el
                                mundo. Cada vez más hombres invierten en mejorar su imagen con
                                el estilo adecuado para ellos. Por eso, estudiar barbería y abrir
                                una Barbería es una excelente oportunidad de negocio.
                            </div>
                        </div>

                        <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                            <div class="row p-3">
                                <div class="col-lg  d-flex justify-content-start">
                                    <img class="my-auto" src="./assets/img/icons/tiempo.png" height="20" width="20" alt="">
                                    <span class="my-auto">&nbsp;Duracion: 6 meses</span>
                                </div>
                            </div>
                            <div class="course-btn">
                                <a class="default-btn2" href="barberia.php">Ver Más</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="logros">
        <div class="container">
            <div class="row">
                <div class="col-md my-auto">
                    <div id="titulo" class="ps-4" style="border-left: 3px solid var(--color1);">
                        <h2 id="parte2">Nuestros</h2>
                        <h2 id="parte1">&nbsp;Logros</h2>
                    </div>
                    <div class="ps-4">
                        <br>
                        <p>
                            Contamos con más de 4000 egresados que respaldan nuestra calidad académica.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row d-flex justify-content-around">
                <div class="col-md-3 d-flex justify-content-center contador animar">
                    <div class="row d-flex">
                        <div class="col-lg-3 d-flex justify-content-center">
                            <img src="./assets/img/icons/institucion.png" alt="" height="50">
                        </div>
                        <div class="col-lg-6 mx-2 ">
                            <div class="contador_cantidad text-center" data-cantidad-total="25">0</div>
                            <div>
                                <p id="contadorparrafo">años</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center contador animar">
                    <div class="row">
                        <div class="col-lg-4">
                            <div><img style="align-items:center;display:flex;content:center;margin:auto;" src="./assets/img/icons/egresados.png" alt="" height="60"></div>
                        </div>
                        <div class="col-lg-6 mx-1">
                            <div class="d-flex justify-content-center">
                                <div class="my-auto" style="font-size:30px;">&nbsp;+</div>
                                <div class="contador_cantidad text-center d-flex" data-cantidad-total="4000">3900</div>

                            </div>
                            <div>
                                <p id="contadorparrafo">egresados</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center contador animar">
                    <div class="row">
                        <div class="col-lg-4">
                            <div><img style="align-items:center;display:flex;content:center;margin:auto;" src="./assets/img/icons/carreras.png" alt="" height="60"></div>
                        </div>
                        <div class="col-lg-6 mx-1">
                            <div class="d-flex justify-content-center">
                                <!-- <div class="my-auto" style="font-size:30px;">&nbsp;+</div> -->
                                <div class="contador_cantidad text-center d-flex" data-cantidad-total="5">0</div>

                            </div>

                            <div>
                                <p id="contadorparrafo">carreras</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center contador animar">
                    <div class="row">
                        <div class="col-lg-4">
                            <div><img style="align-items:center;display:flex;content:center;margin:auto;" src="./assets/img/icons/curso.png" alt="" height="60"></div>
                        </div>
                        <div class="col-lg-6 mx-1">
                            <div class="d-flex justify-content-center">
                                <div class="contador_cantidad text-center d-flex" data-cantidad-total="4">0</div>
                                <!--  <div class="my-auto" style="font-size:30px;">&nbsp;%</div> -->
                            </div>

                            <div>
                                <p id="contadorparrafo">cursos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section id="cursos">
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-auto">
                    <div id="titulo" class="ps-4" style="border-left: 3px solid var(--color1);">
                        <h2 id="parte2">Nuestras</h2>
                        <h2 id="parte1">&nbsp;Carreras</h2>
                    </div>
                    <div class="ps-4">
                        <br>
                        <p>
                            Nuestras Carreras están enfocadas en desarrollar y maximizar la capacidad de nuestros estudiantes. Contamos con más de 25 años de experiencia.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 my-3 p-0">

                    <div class="card shadow-sm" style="background: rgb(248, 248, 248);">
                        <span class="news">Carreras</span>
                        <div style="overflow: hidden;">
                            <img src="./assets/img/web/portada_cosmetologia.jpg" width="100%" height="300">
                        </div>
                        <div class="card-body">

                            <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color4);">COSMETOLOGÍA</h5>

                            <div class="detalle">
                                La carrera de Cosmetología
                                tiene como objetivo formar profesionales capaces de
                                ocuparse de la belleza y la salud de la piel de las
                                personas con todas las herramientas propicias a tal fin.
                                Se trata de un cursado corto,
                            </div>

                        </div>

                        <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                            <div class="row p-3">
                                <div class="col-lg  d-flex justify-content-start">
                                    <img class="my-auto" src="./assets/img/icons/tiempo.png" height="20" width="20" alt="">
                                    <span class="my-auto">&nbsp;Duracion: 2 años</span>

                                </div>
                            </div>
                            <div class="course-btn">
                                <a class="default-btn2" href="cosmetologia.php">Ver Más</a>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-md-4 my-3 p-0">

                    <div class="card shadow-sm" style="background: rgb(248, 248, 248);">
                        <span class="news">Carreras</span>
                        <div style="overflow: hidden;">
                            <img src="./assets/img/web/gastronomia2.jpg" width="100%" height="300">
                        </div>
                        <div class="card-body">

                            <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color4);">GASTRONOMÍA</h5>

                            <div class="detalle">
                                Como alumno de la Carrera de Gastronomía recibirás una formación culinaria integral, con una visión empresarial sólida, brindándote las herramientas que te permitirán
                            </div>

                        </div>

                        <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                            <div class="row p-3">
                                <div class="col-lg  d-flex justify-content-start">
                                    <img class="my-auto" src="./assets/img/icons/tiempo.png" height="20" width="20" alt="">
                                    <span class="my-auto">&nbsp;Duracion: 2 años</span>

                                </div>
                            </div>
                            <div class="course-btn">
                                <a class="default-btn2" href="gastronomia.php">Ver Más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 p-0">
                    <div class="card shadow-sm" style="background: rgb(248, 248, 248);">
                        <span class="news">Carreras</span>
                        <div style="overflow: hidden;">
                            <img src="./assets/img/web/portada_pasteleria.webp" width="100%" height="300">
                        </div>

                        <div class="card-body">

                            <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color4);">PASTELERÍA</h5>

                            <div class="detalle">
                                La carrera de pastelero forma a los profesionales que se encargarán de realizar una cantidad de diversos postres, desde pan dulce hasta grandes pasteles
                            </div>

                        </div>

                        <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                            <div class="row p-3">
                                <div class="col-lg  d-flex justify-content-start">
                                    <img class="my-auto" src="./assets/img/icons/tiempo.png" height="20" width="20" alt="">
                                    <span class="my-auto">&nbsp;Duracion: 1 año</span>

                                </div>
                            </div>
                            <div class="course-btn">
                                <a class="default-btn2" href="pasteleria.php">Ver Más</a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <section id="noticias">
        <div class="container">
            <div class="row">
                <div class="col-lg col-lg-6 my-auto">
                    <div id="titulo" class="ps-4" style="border-left: 3px solid var(--color1);">
                        <h2 id="parte2">Nuestras</h2>
                        <h2 id="parte1">&nbsp;Noticias</h2>
                    </div>
                    <div class="ps-4">
                        <br>
                        <p>
                            Mantente informado sobre las novedades que tenemos para ti.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3 my-3">
                    <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                        <a href="view.php?pag=noticia2" style="overflow: hidden;">
                            <img src="./assets/img/galeria/noticia2_portada.jpg" width="100%" height="300">
                            <span class="news">Noticias</span>
                        </a>
                        <div class="card-body">
                            <a href="view.php?pag=noticia2">
                                <h5 class="title fw-bold text-uppercase mt-4">CURSOS DE COSMETOLOGÍA</h5>
                            </a>
                            <div class="detalle">
                                No te pierdas la oportunidad de estudiar con nosotros 100% Prácticas de manera presencial.
                            </div>
                        </div>
                        <div class="card-footer" style="font-size: 16px;">
                            <div> <span><i class="far fa-calendar"></i></span>25, Agos 2022</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                        <a href="view.php?pag=noticia1" style="overflow: hidden;">
                            <img src="./assets/img/galeria/noticia1_portada.jpg" width="100%" height="300">
                            <span class="news">Noticias</span>
                        </a>
                        <div class="card-body">
                            <a href="view.php?pag=noticia1">
                                <h5 class="title fw-bold text-uppercase mt-4">
                                    Cursos de Pastelería , Repostería y Panadería
                                </h5>
                            </a>
                            <div class="detalle">
                                No te pierdas la oportunidad de estudiar con nosotros 100%. Prácticas
                                DURACIÓN DE 6 MESES

                            </div>
                        </div>
                        <div class="card-footer" style="font-size: 16px;">
                            <div> <span><i class="far fa-calendar"></i></span>10, Jun 2022</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                        <a href="view.php?pag=noticia3" style="overflow: hidden;">
                            <img src="./assets/img/galeria/noticia3_portada.jpg" width="100%" height="300">
                            <span class="news">Noticias</span>
                        </a>
                        <div class="card-body">
                            <a href="view.php?pag=noticia3">
                                <h5 class="title fw-bold text-uppercase mt-4">CURSOS DE COSMETOLOGÍA</h5>
                            </a>
                            <div class="detalle">
                                No te pierdas la oportunidad de estudiar con nosotros 100% Prácticas de manera presencial.
                            </div>
                        </div>
                        <div class="card-footer" style="font-size: 16px;">
                            <div> <span><i class="far fa-calendar"></i></span>09, Jun 2022</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                        <a href="view.php?pag=noticia4" style="overflow: hidden;">
                            <img src="./assets/img/galeria/noticia4_portada.jpg" width="100%" height="300">
                            <span class="news">Noticias</span>
                        </a>
                        <div class="card-body">
                            <a href="view.php?pag=noticia4">
                                <h5 class="title fw-bold text-uppercase mt-4">¿Ya conoces nuestros cursos y carreras?</h5>
                            </a>
                            <div class="detalle">
                                Aprovecha este mes de junio con nuestras carreras técnicas 100% Practicas
                            </div>
                        </div>
                        <div class="card-footer" style="font-size: 16px;">
                            <div> <span><i class="far fa-calendar"></i></span>07, Jun 2022</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-lg col-lg-6 my-auto">
                    <div id="titulo">
                        <h2 style="font-size:48px;color:white;">CONTÁCTANOS</h2>
                    </div>
                    <br>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-10 col-md-8">
                    <div class="formC">
                        <form onsubmit="enviarCorreo(event)" id="formContacto">
                            <div class="row d-flex">
                                <div class="col">
                                    <input class="form-control form-control-lg mt-3" type="text" placeholder="Nombre*" name="nombre" required="">
                                </div>
                                <div class="col">
                                    <input class="form-control form-control-lg mt-3" type="text" placeholder="Correo*" name="celular" required="">
                                </div>
                            </div>
                            <input class="form-control form-control-lg mt-3" type="text" placeholder="Asunto*" name="correo" required="">
                            <div class="mt-3">
                                <textarea class="form-control form-control-lg" rows="3" placeholder="Mensaje*" name="mensaje" required=""></textarea>
                            </div>
                            <div class="mt-4 d-flex justify-content-between">
                                <div class="about-btn mt-45">
                                    <a class="default-btn" href="#">Ver Más</a>
                                    <!-- <a class="default-btn" href="https://www.google.com/maps/dir//Sistec+Av+San+Juan+821+San+Juan+de+Miraflores+15801/@-12.1599798,-76.9734364,19z/data=!4m5!4m4!1m0!1m2!1m1!1s0x9105b85a8c592c1b:0x65492f89e5540a29" target="_blank">Ver Más</a> -->
                                </div>
                                <div class=" d-flex justify-content-center align-items-center mt-2 mb-3 ms-md-0 ms-3" data-bs-toggle="modal" data-bs-target="#terminosModal">
                                    <input type="checkbox" value="si" required="">
                                    <label class="ms-3" style="font-size: 14px; cursor: pointer;color:white;">"He leído y acepto las politicas de privacidad"</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </section>

    <!-- <section id="gps">
        <div class="container-fluid p-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d487.537526266568!2d-76.9735523!3d-12.1599529!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b85a8c592c1b%3A0x65492f89e5540a29!2sSistec!5e0!3m2!1ses!2spe!4v1664646082689!5m2!1ses!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section> -->

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
    <!-- carrousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: true,
            nav: true,
            margin: 0,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                960: {
                    items: 4
                },
                1200: {
                    items: 4
                }
            }
        });
        /*  owl.on('mousewheel', '.owl-stage', function(e) {
             if (e.deltaY > 0) {
                 owl.trigger('next.owl');
             } else {
                 owl.trigger('prev.owl');
             }
             e.preventDefault();
         }); */
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
        };
    </script>


</body>

</html>