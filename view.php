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

</head>

<body>

    <style>
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

        /* #cursos {
            font-family: 'Roboto Slab', serif;
        } */

        #cursos .card-title {
            font-family: 'Roboto', serif;
            color: var(--color1);
        }

        #cursos .card {
            border: 0;
        }

        #cursos .card img {
            height: 100px;
            width: 100px;
        }

        #cursos a:hover {
            color: var(--color1);
        }

        #cursos .p-carrera {
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-family: 'Roboto', sans-serif;
        }

        .imgPortada img {
            width: 100%;
            height: 360px;
            object-fit: cover;
        }


        @media (max-width: 500px) {
            .fb {
                display: none;
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
                    <h2>Noticias</h2>
                    <p>Mantente informado sobre las novedades que tenemos para ti.</p>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>

    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-md-7 my-3">
                <?php
                $pag = $_GET['pag'];
                include_once './noticias/' . $pag . '.php'
                ?>
            </div>
            <div class="col-md-3 my-3 fb">
                <div id="cursos">
                    <div style="border-bottom: solid 2px var(--color1);">
                        <h4 style="color:var(--color1);">Últimas Noticas</h4>
                    </div>
                    <br>
                    <div class="card mb-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-4">
                                <img src="./assets/img/galeria/noticia3_portada.jpg" alt="foto">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="view.php?pag=noticia3" class="card-title">Cursos de Cosmetología</a>
                                    <p class="p-carrera">
                                        No te pierdas la oportunidad de estudiar con nosotros 100% Prácticas de manera presencial
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-4">
                                <img src="./assets/img/galeria/noticia1_portada.jpg" alt="foto">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="view.php?pag=noticia1" class="card-title">Cursos de Pastelería , Repostería y Panadería</a>
                                    <p class="p-carrera">
                                        No te pierdas la oportunidad de estudiar con nosotros 100%. Prácticas
                                        DURACIÓN DE 6 MESES
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <br><br>
                <!-- <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsistecsjm&tabs=timeline&width=0&height=0&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="0" height="0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> -->
            </div>
        </div>
    </div>

    <br><br><br>

    <!-- footer -->
    <?php include_once './includes/footer.php'; ?>

</body>

</html>