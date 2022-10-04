<style>
    .topcontrol {
        position: fixed;
        bottom: 70px;
        right: 20px;
        opacity: 0.8;
        cursor: pointer;
        z-index: 100;
        background: #00D553;
        width: 50px;
        height: 50px;
        padding-top: 8px;
        padding-left: 11px;
        border: 2px solid none;
        border-radius: 50%;
        transition: all 2 ease-in-out;
    }

    .topcontrol:hover {
        transform: scale(1.06);
    }

    .topcontrol i {
        color: white;
    }

    .topcontrol2 {
        position: fixed;
        bottom: 80px;
        right: 80px;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        width: 100px;
        height: 30px;
        background: #F8F9FA;
        border-radius: 0.25rem;
        border: 1px solid red;
        /* padding-top: 6px; */
        /* padding-left: 9px; */
        /* border-radius: 50%; */
        transition: all 2 ease-in-out;
    }

    .topcontrol2 span {

        align-items: center;
        justify-content: center;
        text-align: center;
        font-weight: bold;
        color: var(--color1);
        padding: 1rem 1rem;
    }

    .politicas {
        margin-left: 1rem;
        font-size: 14px;
        color: #9FC532;
        cursor: pointer;
    }

    #footer {
        background: linear-gradient(rgba(24, 56, 131, 0.9) 100%, #ffff 10%, #ffff 50%),
            url("./assets/img/web/tapiz.jpg");
        background-size: 80%;
        background-position: top;
        /*background-attachment: fixed; */
        background-repeat: no-repeat;
        background-size: cover;
        /* mix-blend-mode: multiply; */
        padding: 4rem 0 0;

    }

    #footer-social {

        color: var(--color1);
        display: flex;
        justify-content: center;
        /* position: absolute; */
        /*  left: 10px;
        bottom: 180px;  */
        z-index: 99999;


    }

    #footer-social a {
        font-size: 16px;
        color: var(--color1);
        border: 1px solid var(--color1);
        text-align: center;
        border-radius: 50%;
        width: 28px;
        height: 28px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: white;
        margin: 0px 3px 0px 3px;
    }

    #footer-inf {

        background-color: var(--color1);
    }

    #div-footer-inf {
        margin: 0px 15px 0px 0px;
        padding-right: 1rem;
        border-right: solid 3px var(--color2);
    }


    @media (max-width: 500px) {

        .topcontrol {
            display: none;
        }

        .topcontrol2 {
            display: none;
        }

        .politicas {
            display: none;
        }

    }
</style>

<footer id="footer">
    <div class="container">
        <div class="row" style="display:flex;justify-content:center;align-items:center;">
            <div class="col-lg-3">
                <img src="./assets/img/icons/logo.png" width="100%">
                <div>
                    <p style="text-align: justify; color: #CECECE;">
                        Somos una Institución de Formación Técnica, ubicada en el distrito de San Juan de Miraflores.
                    </p>
                </div>
            </div>

            <div class=" col-lg-3 contact mt-md-0 mt-3 mx-5">
                <h4 class="title pb-3" style="border-bottom:solid 2px var(--color1); width:min-content;">CONTACTO</h4>
                <p class="text"> <span><i class="fas fa-location-arrow" style="color: var(--color1)"></i>Av. San Juan 821 – Frente al Colegio Maristas - SJM</p>
                <p class="text"> <span><i class="fas fa-mobile-alt" style="color: var(--color1)"></i></span>903578533</p>
                <p class="text"> <span><i class="fas fa-envelope" style="color: var(--color1)"></i></span>ejemplo@ejemplo.com</p>
                <p class="text"> <span><i class="fas fa-clock" style="color: var(--color1)"></i></span> Lunes a Sabado de 8:00 am - 6:00 pm </p>
            </div>
            <div class=" col-lg-2 contact mt-md-0 mt-3 mx-3">
                <h4 class="title pb-3" style="border-bottom:solid 2px var(--color1); width:min-content;">CARRERAS</h4>
                <p class="text"> <span><i class="fas fa-minus" style="color: var(--color1)"></i></span>&nbsp;Cosmetología</p>
                <p class="text"> <span><i class="fas fa-minus" style="color: var(--color1)"></i></span>&nbsp;Gastronomía </p>
                <p class="text"> <span><i class="fas fa-minus" style="color: var(--color1)"></i></span>&nbsp;Pastelería</p>
                <p class="text"> <span><i class="fas fa-minus" style="color: var(--color1)"></i></span>&nbsp;Panadería</p>
                <p class="text"> <span><i class="fas fa-minus" style="color: var(--color1)"></i></span>&nbsp;Repostería</p>
            </div>
            <div class=" col-lg-2 contact mt-md-0 mt-3 mx-3">
                <h4 class="title pb-3" style="border-bottom:solid 2px var(--color1); width:min-content;">CURSOS</h4>
                <p class="text"> <span><i class="fas fa-minus" style="color: var(--color1)"></i></span>&nbsp;Computación</p>
                <p class="text"> <span><i class="fas fa-minus" style="color: var(--color1)"></i></span>&nbsp;Diseño Gráfico</p>
                <p class="text"> <span><i class="fas fa-minus" style="color: var(--color1)"></i></span>&nbsp;Ind. Vestido</p>
                <p class="text"> <span><i class="fas fa-minus" style="color: var(--color1)"></i></span>&nbsp;Barbería</p>
                <br>
                <br>
            </div>

            <!--  <div class="col-lg notice mt-md-0 mt-3">
                <h4> NOTICIAS RECIENTES </h4>

                <div class="row">
                    <div class="col-md-6">
                        <div class="item py-3">
                            <img src="./assets/img/galeria/noticia1P.jpg" height="80">
                            <div class="text">
                                <a class="title" href="view.php?pag=noticia1">Conoce las funciones de INDECI</a>
                                <p> <span><i class="far fa-clock"></i></span> 05 Agos 2022</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="item py-3">
                            <img src="./assets/img/galeria/noticia2P.jpg" height="80">
                            <div class="text">
                                <a class="title" href="view.php?pag=noticia2">Conoce las funciones de CENEPRED</a>
                                <p> <span><i class="far fa-clock"></i></span> 05 Agos 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <br>
    <section id="footer-inf" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-start align-items-center">
                    <p class="my-1 text-center" style="font-size: 14px; color: var(--color3);">&nbsp;&nbsp;&nbsp;&nbsp;Desarrollado por <a href="https://www.cubicol.pe/agencia/" target="_blank" style="color:var(--color3); font-weight: bold;">Sensoft Solutions</a></p>
                </div>
                <div class="col d-flex justify-content-end align-items-center py-3">
                    <div id="div-footer-inf">
                        <p class="my-1 text-center" style="font-size: 14px; color: var(--color3);">Instituto SISTEC</p>
                    </div>

                    <!-- <p class="my-1 text-center" style="font-size: 14px; color: var(--color3)">Desarrollado por <a href="https://www.cubicol.pe/agencia/" target="_blank" style="color: #9FC532; font-weight: bold;">Sensoft Solutions</a></p> -->
                    <div id="footer-social">
                        <!-- <div class="red">
            <a class="yt" href="#" target="_blank">
                <span><i class="fab fa-youtube"></i></span>
            </a>
        </div> -->
                        <div class="red">
                            <a class="fb" href="https://www.facebook.com/sistecsjm" target="_blank">
                                <span><i class="fab fa-facebook-f"></i></span>
                            </a>
                        </div>
                        <!-- <div class="red">
            <a class="tw" href="#" target="_blank">
                <span><i class="fab fa-twitter"></i></span>
            </a>
        </div> -->
                        <div class="red">
                            <a class="ig" href="https://www.instagram.com/tecnologicossistemas/" target="_blank">
                                <span><i class="fab fa-instagram"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="topcontrol">
        <a href="https://api.whatsapp.com/send?phone=51903578533" target="_blank">
            <span>
                <i class="fab fa-whatsapp fa-2x"></i>
            </span>
        </a>
    </div>
    <div class="topcontrol2">
        <span>Informes</span>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="politicasFooter" tabindex="-1" aria-labelledby="politicasFooterLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="politicasFooterLabel" style="color: var(--color1);">POLÍTICAS DE PRIVACIDAD</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe src="./assets/img/files/politicas_privacidad.pdf" width="100%" height="500"></iframe>
            </div>
        </div>
    </div>
</div>