<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.0/css/all.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/web.css">
    <title>CONSULTORA SISTERRA</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <style>
        #banner {
            background-image: url('./assets/img/web/banerBG.jpg');
        }

        #banner .text {
            color: white;
            padding: 4rem 0 4rem 0;
        }

        /* #banner .text h1 {
            font-size: 52px;
            font-weight: bold;
            text-align: center;
        } */

        .ml10 {
            position: relative;
            font-weight: 900;
            font-size: 2rem;
            text-align: center;
        }

        .ml10 .text-wrapper {
            position: relative;
            display: inline-block;
            padding-top: 0.2em;
            padding-right: 0.05em;
            padding-bottom: 0.1em;
            overflow: hidden;
        }

        .ml10 .letter {
            display: inline-block;
            line-height: 1em;
            transform-origin: 0 0;
        }

        #nosotros {
            padding-top: 4rem;
        }

        #nosotros p {
            text-align: justify;
            line-height: 1.6;
        }

        #nosotros img {
            width: 100%;
            height: 100%;
            border-radius: 20px;
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
            text-align: justify;
        }

        #valores .item .info p {
            text-align: justify;
        }


        /* Estilo de Lista */
        #perfiles .timeline {
            list-style-type: none;
            position: relative;
        }

        #perfiles .timeline:before {
            content: ' ';
            background: var(--color2);
            display: inline-block;
            position: absolute;
            left: 30px;
            width: 2px;
            height: 100%;
            z-index: 400;
        }

        #perfiles .timeline>li {
            margin: 14px 0;
            padding-left: 20px;
        }

        #perfiles .timeline>li:before {
            content: ' ';
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 4px solid var(--color3);
            left: 15px;
            width: 32px;
            height: 32px;
            z-index: 400;
        }


        #politicas .comments {
            /* margin: 100px; */
            width: 100%;
            border-left: solid 2px var(--color1);
            padding: 0px 20px 0px 20px;
        }

        #politicas .comments p {
            background-color: #fff;
            padding: 10px;
            font-size: 16px;
            border: solid 1px var(--color6);
            line-height: 1.7;
            position: relative;
        }

        #politicas p::before {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            display: block;
            border: 3px solid #ECB338;
            border-radius: 50%;
            background-color: #fff;
            top: 10px;
            left: -32px;
        }

        #politicas p::after {
            content: '';
            position: absolute;
            border: solid 8px;
            border-color: transparent var(--color1) transparent transparent;
            top: 10px;
            left: -17px;
        }

        #politicas .line {
            background-color: #DDDDDD;
            height: 2px;
            width: 100%;
            margin-top: 1rem;
        }

        @media (max-width: 500px) {
            .ml10 {
                font-size: 1.8rem;
            }
        }
    </style>

    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>

    <!-- header -->
    <?php include_once './includes/header.php'; ?>


    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col text">
                    <h1 class="ml10">
                        <span class="text-wrapper">
                            <span class="letters">NOSOTROS</span>
                        </span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section id="nosotros">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-lg-6">
                    <p>
                        SISTERRA es una empresa fundada a inicios del año 2022 cuyo objeto es brindar
                        servicios de educación, consultoría y asesoría en Gestión del Riesgo de Desastres,
                        Seguridad y Defensa Nacional y Sistemas de Información Geográfica.
                    </p>
                    <p>
                        SISTERRA se encuentra conformado por un equipo multidisciplinario de profesionales
                        altamente capacitados en sus campos de acción y con una amplia experiencia, lo
                        cual permite brindar servicios de calidad vistos desde diversas perspectivas que
                        permiten una mejor solución a los problemas planteados.
                    </p>
                    <p style="margin-bottom: 0;">
                        Tenemos como objetivo principal cooperar en la reducción y minimización de
                        los efectos de los riesgos de desastres, originados por fenómenos de origen natural e
                        inducidos por la acción humana, que se manifiestan en el territorio
                        peruano, mediante una correcta prevención, reducción, preparación y respuesta.
                    </p>
                </div>

                <div class="col-lg-5 d-flex justify-content-center align-items-center mt-lg-0 mt-md-4 mt-4">
                    <img class="shadow" src="./assets/img/web/nosotrosText.jpg">
                </div>
            </div>
        </div>
    </section>

    <br><br>

    <div class="container my-5" id="valores" data-aos="fade-up" data-aos-duration="1500">
        <div class="row my-5">

            <div class="col-lg-4 col-md-6 col-12">
                <div class="item">
                    <img src="./assets/img/icons/responsabilidad.png" alt="">
                    <div class="info">
                        <h4 class="title">Responsabilidad</h4>
                        <p>Estamos comprometidos con nuestros clientes, sociedad y medio ambiente en aportar y construir un país sostenible.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="item">
                    <img src="./assets/img/icons/puntualidad.png" alt="">
                    <div class="info">
                        <h4 class="title">Puntualidad</h4>
                        <p>Entendemos que el tiempo es el valor más importante, por ello queremos que nuestros servicios sean en el tiempo adecuado y oportuno. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="item">
                    <img src="./assets/img/icons/calidad.png" alt="">
                    <div class="info">
                        <h4 class="title">Calidad</h4>
                        <p>Trabajamos constantemente en la calidad de nuestros servicios prestados, ejerciendo medidas de seguimiento y control que garanticen mejores resultados.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="item">
                    <img src="./assets/img/icons/excelencia.png">
                    <div class=" info">
                        <h4 class="title">Excelencia</h4>
                        <p>Nuestro objetivo es proveer servicios profesionales y consultorías de alta calidad que a su vez sean precisos, apropiados y oportunos.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="item">
                    <img src="./assets/img/icons/integridad.png" alt="">
                    <div class="info">
                        <h4 class="title">Integridad</h4>
                        <p>Estamos comprometidos a conducir nuestra labor en un entorno social transparente, honesta y ética, implicando así la confianza entre los integrantes de nuestro equipo y nuestros clientes.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="item">
                    <img src="./assets/img/icons/innovacion.png" alt="">
                    <div class="info">
                        <h4 class="title">Innovación</h4>
                        <p>Nuestra política es ofrecer servicios de calidad a través de soluciones innovadoras, de manera dinámica y pragmática.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <br><br>


    <div class="container" id="politicas">
        <h2 style="color: var(--color1);">NUESTRAS POLITICAS</h2>
        <div class="line"></div>
        <div class="row mt-5">
            <div class="col-md-7">
                <div class="comments">
                    <p data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Brindar a sus clientes los productos o servicios de calidad.</p>
                    <p data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Aportar soluciones a las necesidades de las entidades públicas, privadas y sociedad civil, como parte de los resultados finales de la empresa.</p>
                    <p data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Brindar apoyo de asesorías y capacitaciones a las entidades públicas que no cuenten con sus gerencias o direcciones de Gestión del Riesgo de Desastres. </p>
                    <p data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Proporcionar a su equipo de estand de profesionales un ambiente agradable, seguro y divertido como parte de estímulo que les permita llevar a cabo una buena ejecución de sus labores. </p>
                    <p data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Facilitar cursos de capacitaciones que formen parte de un proceso obligatorio para los nuevos integrantes del equipo Sisterra.</p>
                    <p data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Formar nuevos trabajadores de forma directa e indirecta para el desarrollo óptimo empresarial.</p>
                    <p data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Ser flexibles y adaptarnos a la “nueva normalidad”.</p>
                </div>
            </div>
            <div class="col-md-5 d-flex justify-content-center align-items-center">
                <img src="./assets/img/web/poli2.png" width="100%" alt="">
            </div>
        </div>
    </div>

    <br><br>

    <!-- footer -->
    <?php include_once './includes/footer.php'; ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script>
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml10 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.ml10 .letter',
                rotateY: [-90, 0],
                // duration: 1300,
                duration: 2000,
                delay: (el, i) => 45 * i
            }).add({
                targets: '.ml10',
                opacity: 0,
                // duration: 1000,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 10000
            });
    </script>

</body>

</html>