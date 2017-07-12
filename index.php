
<?php include 'vistas/encabezado.php' ?>
<body>
<header>
  <figure class="logo">
    <img src="img/nokin.png" class="img-responsive" alt="">
  </figure>
  <div class="tch">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
    </span>
            <span style="color: #65BFB4; font-size: 17px;">PENDIENTE</span><br>
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
    </span>
            <span style="color: #65BFB4; font-size: 17px;">Lunes a Viernes de 9am a 6pm</span><br>
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
    </span>
            <span style="color: #65BFB4; font-size: 17px;">info@nokinservicios.com</span><br>
  </div>

  <div class="menu">
    <ul>
      <a class="marca select" href="index.php">INICIO</a>
      <a class="marca" href="">NOSOTROS</a>
      <a class="marca" href="">SERVICIOS</a>
      <a class="marca" href="">CONTACTO</a>
    </ul>
  </div>
</header>



<section class="mbr-slider mbr-section mbr-section--no-padding carousel slide" data-ride="carousel" data-wrap="true" data-interval="5000" id="slider-5" style="background-color: #4c6972;">
    <div class="mbr-section__container">
        <div>
            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#slider-5" data-slide-to="0" class="active"></li>
                <li data-app-prevent-settings="" data-target="#slider-5" data-slide-to="1"></li>
                <!-- <li data-app-prevent-settings="" data-target="#slider-5" class="" data-slide-to="2"></li> -->
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height active" style="background-image: url(img/image1.jpg);">
                    <div class="mbr-box__magnet mbr-box__magnet--center-right mbr-box__magnet--sm-padding">

                        <div class=" container">

                            <div class="row">
                                <div class=" col-md-8 col-md-offset-2">

                                <div class="mbr-hero">
                                    <h1 class="mbr-hero__text">Consultoría en Administración</h1>

                                    <!-- <p class="mbr-hero__subtext">Slide 2. Centered content</p> -->
                                </div>
                                <div class="mbr-buttons btn-inverse mbr-buttons--center"><a class="mbr-buttons__btn btn btn-lg btn-danger" href="#">SERVICIOS</a> <a class="mbr-buttons__btn btn btn-lg btn-default" href="#">CONTÁCTANOS</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height" style="background-image: url(img/image2.jpg);">
                    <div class="mbr-box__magnet mbr-box__magnet--center-left mbr-box__magnet--sm-padding">

                        <div class=" container">

                            <div class="row">
                                <div class=" col-md-6 col-md-offset-1">

                                <div class="mbr-hero">
                                    <h1 class="mbr-hero__text">Consultoría en Computación</h1>

                                    <!-- <p class="mbr-hero__subtext">Slide 3. Content aligned to right </p> -->
                                </div>
                                <div class="mbr-buttons btn-inverse mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-danger" href="#">SERVICIOS</a> <a class="mbr-buttons__btn btn btn-lg btn-default" href="#">CONTÁCTANOS</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-5">
                <span aria-hidden="true"><</span>
                <span class="sr-only">Previous</span>
            </a>
            <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-5">
                <span aria-hidden="true">></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>



<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'vistas/pie.php' ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/sendCORREO.js"></script>
<script src="js/botonarriba.js"></script>

</body>
</html>
