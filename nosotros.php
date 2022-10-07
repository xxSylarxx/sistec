<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="#">
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
                url('./assets/img/web/portada_gastronomia.jpg');
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
            height: 80.5%;
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
                    <h2>NOSOTROS</h2>
                    <p>Somos una Institución de Formación Técnica, ubicada en el distrito de<br>
                        San Juan de Miraflores, bajo la jurisdicción de la Unidad de Gestión Educativa<br>
                        Local 01 (UGEL 01) del Ministerio de Educación del Perú. Formando Técnicos Emprendedores. </p>
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
                            <a class="default-btn" href="about-us.html">Ver Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-lg-6">

                    <img src="./assets/img/web/nosotros.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>


    <section id="logros">
        <div class="container">
            <div class="row">
                <div class="col-lg col-lg-6 my-auto">
                    <div id="titulo" class="ps-4" style="border-left: 3px solid var(--color1);">
                        <h2 id="parte2">Nuestros</h2>
                        <h2 id="parte1">&nbsp;Logros</h2>
                    </div>
                    <div class="ps-4">
                        <br>
                        <p>Conocer y valorar los logros nos permite compartirlo. Contamos con mas de 4000 egresados que nos respaldan nuestra calidad académica.</p>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row d-flex justify-content-around">
                <div class="col-lg-3 d-flex justify-content-center contador animar">
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
                <div class="col-lg-3 d-flex justify-content-center contador animar">
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
                <div class="col-lg-3 d-flex justify-content-center contador animar">
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
                <div class="col-lg-3 d-flex justify-content-center contador animar">
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

    <section class="mt-5">
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-5 my-auto">
                    <div class="row">
                        <div class="col-lg-2">
                            <div style="width: 60px;height: 60px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: var(--color5);font-size:29px;"><a href="" style="color:var(--color1);"><i class="fas fa-gem" style="margin-top:19px;margin-left:13px;"></i></a></div>
                        </div>
                        <div class="col-lg-9">
                            <h2 class="text-start" style="color:black;">Misión</h2>

                        </div>
                    </div>
                    <br>
                    <p>Formar Técnicos Emprendedores íntegros y competentes brindando una educación técnica de calidad que contribuya al desarrollo económico y ambiental del país.</p>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col-lg-2">
                            <div style="width: 60px;height: 60px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: var(--color5);font-size:29px;"><a href="" style="color:var(--color1);"><i class="fas fa-bullseye-arrow" style="margin-top:14px;margin-left:13px;font-size:35px;"></i></a></div>

                        </div>
                        <div class="col-lg-9">
                            <h2 class="text-start" style="color:black;">Visión</h2>

                        </div>
                    </div>
                    <br>
                    <p>Ser una de las mejores instituciones líderes en educación técnica en el Perú con alcance a nivel nacional.</p>
                </div>
                <div class="col-lg-6 ">
                    <center><img src="./assets/img/web/nosotros1.png" width="50%" height="600px" alt=""></center>
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