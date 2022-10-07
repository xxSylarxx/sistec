<style>
    .abajo {
        /* background-color: var(--color2); */
        background-color: var(--color3);
        /* background: #091135 !important; */
        /* -moz-box-shadow: 0 3px 3px rgba(94, 94, 94, 0.75); */
        /* -webkit-box-shadow: 0 3px 3px rgba(94, 94, 94, 0.75); */
        box-shadow: 0 3px 3px rgba(94, 94, 94, 0.75);
        /* color: var(--color2); */
    }

    .abajo .navbar-light .navbar-nav .nav-link {
        color: var(--color2) !important;
        /* color: var(--color3) !important; */
        /* color: var(--color4) !important; */
    }

    .abajo .barsup {
        display: none;
    }



    @media (max-width: 500px) {
        #header .barsup .contact span {
            display: none;
        }

        #header .navbar .blog {
            display: none;
        }

        #header .navbar .navbar-brand .logo {
            height: 70px;
        }

        #valores .item .info {
            margin-left: 1rem;
        }

        #valores .item img {
            height: 60px;
            width: 60px;
        }


    }

    @media (min-width:501px) {
        #header .navbar .blog2 {
            display: none;
        }
    }
</style>

<div id="head-top"></div>
<header class="fixed-top" id="header">

    <div class="barsup">
        <div class="d-flex flex-wrap justify-content-between justify-content-sm-between align-items-lg-center">

            <div class="d-flex contact justify-content-start justify-content-lg-start align-items-center ">
                <div class="contact-item">
                    <a href="https://api.whatsapp.com/send?phone=51903578533" class="me-4" target="_blank"> <i class="fas fa-phone-alt me-2"></i> <span> 903578533</span> </a>
                    <a href="mailto:ejemplo@ejemplo.com" class="me-4" target="_blank"> <i class="fas fa-envelope me-2"></i> <span> ejemplo@ejemplo.com </span> </a>
                </div>
            </div>

            <div class="d-flex justify-content-end mb-lg-0 ">
                <div class="d-flex flex-row mininav">
                    <div class="mininav-item "><a href="https://www.facebook.com/sistecsjm" target="_blank"><i class="fab fa-facebook"></i> </a></div>
                    <!-- <div class="mininav-item "><a href="" target="_blank"><i class="fab fa-youtube"></i> </a></div>
                    <div class="mininav-item "><a href="" target="_blank"><i class="fab fa-twitter"></i> </a></div> -->
                    <div class="mininav-item "><a href="https://www.instagram.com/tecnologicossistemas/" target="_blank"><i class="fab fa-instagram"></i> </a></div>
                </div>
            </div>

        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light py-0">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img class="logo" src="./assets/img/icons/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.php">
                            <!-- <i class="fas fa-home"></i> -->Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./nosotros.php"> Nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Carreras Técnicas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="cosmetologia.php">Cosmetología</a></li>
                            <li><a class="dropdown-item" href="./gastronomia.php">Gastronomía</a></li>
                            <li><a class="dropdown-item" href="pasteleria.php">Pastelería</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Panadería</a></li> -->
                            <!-- <li><a class="dropdown-item" href="#">Repostería</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cursos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="computacion.php">Computación</a></li>
                            <li><a class="dropdown-item" href="diseno.php">Diseño Gráfico</a></li>
                            <li><a class="dropdown-item" href="vestido.php">Ind del Vestido</a></li>
                            <li><a class="dropdown-item" href="barberia.php">Barbería</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="noticias.php">Noticias</a>
                    </li>
                    <li class="nav-item blog2">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>

<script type="text/javascript">
    window.addEventListener("scroll", function() {
        var header = document.querySelector("header");

        header.classList.toggle("abajo", window.scrollY > 100);
    })
</script>

<script>
    var height = document.getElementById('header').clientHeight;
    document.getElementById('head-top').style.height = height + "px";
</script>