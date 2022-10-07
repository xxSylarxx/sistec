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
        #portada {
            background: linear-gradient(rgba(136, 28, 34, 0.8) 100%, #ffff 10%, #ffff 50%),
                url('./assets/img/web/computacion_portada_principal.jpg');
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
                    <p>NOTICIAS</p>
                </div>
            </div>
        </div>
    </section>

    <section id="noticias">
        <div class="container">
            <!-- <div class="row">
                <div class="col-lg col-lg-6 my-auto">
                    <div id="titulo" class="ps-4" style="border-left: 3px solid var(--color1);">
                        <h2 id="parte2">Nuestras</h2>
                        <h2 id="parte1">&nbsp;Noticias</h2>
                    </div>
                    <div class="ps-4">
                        <br>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae et porro, amet molestiae, rerum excepturi illum obcaecati nulla nisi rem maxime maiores consequuntur atque dolore cum eveniet, tempore ullam nam!
                        </p>
                    </div>
                </div>
            </div> -->
            <br>
            <div class="row">
                <div class="col-md-3 my-3">
                    <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                        <a href="#" style="overflow: hidden;">
                            <img src="./assets/img/galeria/noticia1_portada.jpg" width="100%" height="300">
                            <span class="news">Carreras</span>
                        </a>
                        <div class="card-body">
                            <a href="#">
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
                            <div> <span><i class="far fa-calendar"></i></span>07, Oct 2022</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                        <a href="#" style="overflow: hidden;">
                            <img src="./assets/img/galeria/noticia2_portada.jpg" width="100%" height="300">
                            <span class="news">Carreras</span>
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h5 class="title fw-bold text-uppercase mt-4">CURSOS DE COSMETOLOGÍA</h5>
                            </a>
                            <div class="detalle">
                                No te pierdas la oportunidad de estudiar con nosotros 100% Prácticas de manera presencial.
                            </div>
                        </div>
                        <div class="card-footer" style="font-size: 16px;">
                            <div> <span><i class="far fa-calendar"></i></span>07, Oct 2022</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                        <a href="#" style="overflow: hidden;">
                            <img src="./assets/img/galeria/noticia3_portada.jpg" width="100%" height="300">
                            <span class="news">Carreras</span>
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h5 class="title fw-bold text-uppercase mt-4">CURSOS DE COSMETOLOGÍA</h5>
                            </a>
                            <div class="detalle">
                                No te pierdas la oportunidad de estudiar con nosotros 100% Prácticas de manera presencial.
                            </div>
                        </div>
                        <div class="card-footer" style="font-size: 16px;">
                            <div> <span><i class="far fa-calendar"></i></span>07, Oct 2022</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                        <a href="#" style="overflow: hidden;">
                            <img src="./assets/img/galeria/noticia4_portada.jpg" width="100%" height="300">
                            <span class="news">Carreras</span>
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h5 class="title fw-bold text-uppercase mt-4">¿Ya conoces nuestros cursos y carreras?</h5>
                            </a>
                            <div class="detalle">
                                Aprovecha este mes de junio con nuestras carreras técnicas 100% Practicas
                            </div>
                        </div>
                        <div class="card-footer" style="font-size: 16px;">
                            <div> <span><i class="far fa-calendar"></i></span>07, Oct 2022</div>
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