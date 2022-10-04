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


    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col text">
                    <h1 class="ml10">
                        <span class="text-wrapper">
                            <span class="letters">NOTICIAS</span>
                        </span>
                    </h1>
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
            <div class="col-md-4 my-3 fb">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FConsultora-Sisterra-101005149250419&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=204163626794259" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
        </div>
    </div>

    <br><br><br>

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