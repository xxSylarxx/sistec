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
    <title>SISTERRA</title>
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
                            <span class="letters">NOTICIAS</span>
                        </span>
                    </h1>
                    <!-- <h1>CERCANA, CERCA DE TI</h1> -->
                </div>
            </div>
        </div>
    </section>

    <br><br>

    <div class="container my-5" id="proyecto" data-aos="fade-up" data-aos-duration="1500">
        <div class="row">
            <div class="col">
                <h2 style="color: var(--color1);">NOTICIAS</h2>
                <div class="line"></div>
            </div>
        </div>
        <div class="row mt-5">

            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <div class="card">
                    <div class="imgC">
                        <img src="./assets/img/galeria/noticia1P.jpg">
                    </div>
                    <div class="card-body">
                        <a href="view.php?pag=noticia1" class="card-title">Conoce las funciones de INDECI</a>
                        <p class="card-text">Aprende con SISTERRA. En esta oportunidad conoce las funciones de INDECI(Instituto Nacional de Defensa Civil).</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <div class="card">
                    <div class="imgC">
                        <img src="./assets/img/galeria/noticia2P.jpg">
                    </div>
                    <div class="card-body">
                        <a href="view.php?pag=noticia2" class="card-title">Conoce las funciones de CENEPRED</a>
                        <p class="card-text">Aprende con SISTERA. En esta oportunidad conoce las funciones de CENEPRED(centro Nacional de Estimación, Prevención y Reducción del Riesgo de Desastres).</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <div class="card">
                    <div class="imgC">
                        <img src="./assets/img/galeria/noticia3P.jpg">
                    </div>
                    <div class="card-body">
                        <a href="view.php?pag=noticia3" class="card-title">Conoce la Ley N° 29664</a>
                        <p class="card-text">Aprende con SISTERRA. En esta oportunidad te damos a conocer la Ley N° 29664. Ley que crea el SINAGERD.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <div class="card">
                    <div class="imgC">
                        <img src="./assets/img/galeria/noticia4P.png">
                    </div>
                    <div class="card-body">
                        <a href="view.php?pag=noticia4" class="card-title">I Conferencia de Gestión del Riesgo de Desastres</a>
                        <p class="card-text">¿Quieres aprender más sobre Gestión del Riesgo de Desastres? Te invitamos a participar en la I Conferencia de Gestión del Riesgo de Desastres </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <div class="card">
                    <div class="imgC">
                        <img src="./assets/img/galeria/noticia5P.jpg">
                    </div>
                    <div class="card-body">
                        <a href="view.php?pag=noticia5" class="card-title">Lineamientos Técnicos del Proceso de Prevención del Riesgo de Desastres</a>
                        <p class="card-text">Aprende con SISTERRA, el 22 de agosto del 2013, el Gobierno Peruano aprobó la Resolución Ministerial N° 222-2013-PCM</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                <div class="card">
                    <div class="imgC">
                        <img src="./assets/img/galeria/noticia6P.png">
                    </div>
                    <div class="card-body">
                        <a href="view.php?pag=noticia6" class="card-title">El Gobierno Peruano aprobó la Resolución Ministerial N° 173-2015-PCM</a>
                        <p class="card-text">El 10 de Julio del 2015, el Gobierno Peruano aprobó la Resolución Ministerial N° 173-2015-PCM que aprueba los "Lineamientos para la Conformación y Funcionamiento de la Red Nacional de Alerta Temprana - RNAT</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <br><br>


    <!-- footer -->
    <?php include_once './includes/footer.php'; ?>

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