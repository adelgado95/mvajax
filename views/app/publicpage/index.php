<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="es">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>ESTACION</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="views/app/css/base.css">
    <link rel="stylesheet" href="views/app/css/vendor.css">
    <link rel="stylesheet" href="views/app/css/main.css">

    <!-- script
    ================================================== -->
    <script src="views/app/js/modernizr.js"></script>
    <script src="views/app/js/pace.min.js"></script>
     <!-- para que funcione el modal que sea lo que Dios quiera
    ================================================== -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <script src="views/app/js/generales.js"></script>
        <script src="views/app/js/jquery.min.js"></script>
    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="views/app/images/termo.ico" type="image/x-icon">
    <link rel="icon" href="views/app/images/termo.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.php">
                <img src="views/app/images/logo.png" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navegación</h3>

                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Inicio</a></li>
                    <li><a class="smoothscroll"  href="#about" title="about">Mediciones</a></li>
                    <li><a class="smoothscroll"  href="#services" title="services">Equipo</a></li>
                    <li><a class="smoothscroll"  href="#works" title="works">Importancia</a></li>
                    <li><a class="smoothscroll"  href="#clients" title="clients">Contacto</a></li>

                </ul>

          <!-- Iconos de Twitter Facebpk

                <ul class="header-nav__social">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </li>
                </ul>
-->
            </div>
        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->

    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="views/app/images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Bienvenido</h3>

                <h1>
                    Estación de Monitoreo
                </h1>
                    <h3>Universidad Nacional Autónoma de Nicaragua</h3><br>
                    <h3>UNAN-LEON</h3>
                <div class="home-content__buttons">
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        Ver Mediciones
                    </a>
                    <a class="btn btn--stroke" href="index.php?view=login">
                        Iniciar Sesión
                    </a>
                </div>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Bajar</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div> <!-- end home-content -->

<!-- Esto es para los botones de las redes sociales-->


        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='about' class="s-services">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Vea las últimas mediciones</h3>
                <h1 class="subhead subhead--dark" id="hactual">00-00-0000 00:00:00</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full">

          <div class="col-block service-item" data-aos="fade-up">
              <div class="service-icon">
                <img src="views/app/publicpage/images/f.ico" width="48px" height="48px">
              </div>
              <div class="service-text">
                  <h3 class="h2" id="T">Temperatura:  C &deg </h3>
                  <p>León por ser un departamento ubicado en el pacífico por lo general mantiene una temperatura mayor en comparación a la parte central y atlántica del país, durante la estación de verano la temperatura puede alcanzar hasta los 38°C.
                  </p>
              </div>
          </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                  <img src="views/app/publicpage/images/iconon.png" width="48px" height="48px">
                </div>
                <div class="service-text">
                    <h3 class="h2" id="H">Humedad :  %</h3>
                    <p>Es la cantidad de vapor de agua presente en el aire. La humedad del aire es un factor que se relaciona con la comodidad térmica del cuerpo vivo que se mueve en determinado ambiente.
                    </p>
                </div>
            </div>



            <div class="col-block service-item" data-aos="fade-up">
              <div class="service-icon">
                <img src="views/app/publicpage/images/iconoo.png" width="48px" height="48px">
              </div>
                <div class="service-text">
                    <h3 class="h2" id="Oz">Ozono: ppm</h3>
                    <p>El ozono es un gas azulado compuesto por tres átomos de oxígeno, como gas tóxico a concentraciones elevadas puede tener efectos en la salud, afectando el aparato respiratorio e irritando las mucosas dependiendo también del nivel de concentración


                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                      <img src="views/app/publicpage/images/m.ico" width="48px" height="48px">
                </div>
                <div class="service-text">
                    <h3 class="h2" id="Dx">Monóxido de Carbono: ppm</h3>
                    <p>Este un gas sin olor ni color, pero muy peligroso. El CO se encuentra en el humo de la combustión, como lo es el expulsado por automóviles y camiones, o candelabros y estufas.

                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <img src="views/app/images/round.ico" width="48px" height="48px">
                </div>
                <div class="service-text">
                    <h3 class="h2" id="Pm10">PM10     :ppm</h3>
                    <p>Las PM son partículas sólidas o líquidas de polvo, cenizas, hollín, partículas metálicas, cemento o polen, dispersas en la atmósfera, y cuyo diámetro varía entre 2,5 y 10 µm.
                      Estas partículas están asociados a daños en el sistema circulatorio, así como daños en los pulmones.
                    </p>
                </div>
            </div>


            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <img src="views/app/publicpage/images/iconop10.png" width="48px" height="48px">
                </div>
                <div class="service-text">
                    <h3 class="h2" id="Pm">Polvo 2.5pm:  ppm</h3>
                    <p>Mientras las PM10 pueden penetrar hasta las vías respiratorias, las PM2.5 pueden penetrar hasta la zona de intercambio de gases de pulmón y las partículas ultra finas (menores de 100nm, pueden llegar a pasar por el torrente circulatorio).
                    </p>
                </div>
            </div>


        </div> <!-- end services-list -->


        <div class="row about-desc" data-aos="fade-up">

        </div> <!-- end about-desc -->
        </section>



     <!-- end section-header -->
       <!--<div class="row services-list block-2-2 block-tab-full">
         <div class="col-block service-item" data-aos="fade-up">
             <div class="service-icon" style="text-align:center">
                 <img src="views/app/images/1.jpg" style="border-radius: 50%;" width="100px" height="100px">
                      <h3 class="h2" >Alfonso Delgado</h3>
             </div>
          </div>

          <div class="col-block service-item" data-aos="fade-up">
              <div class="service-icon" style="text-align:center">
                  <img src="views/app/images/1.jpg" style="border-radius: 50%;" width="100px" height="100px">
                       <h3 class="h2" >Alfonso Delgado</h3>

              </div>
           </div>

           <div class="col-block service-item" data-aos="fade-up">
               <div class="service-icon" style="text-align:center">
                   <img src="views/app/images/1.jpg" style="border-radius: 50%;" width="100px" height="100px">
                        <h3 class="h2" >Alfonso Delgado</h3>

               </div>
            </div>


            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon" style="text-align:center">
                    <img src="views/app/images/1.jpg" style="border-radius: 50%;" width="100px" height="100px">
                         <h3 class="h2" >Alfonso Delgado</h3>

                </div>
             </div>


             <div class="col-block service-item" data-aos="fade-up">
                 <div class="service-icon" style="text-align:center">
                     <img src="views/app/images/1.jpg" style="border-radius: 50%;" width="100px" height="100px">
                          <h3 class="h2" >Alfonso Delgado</h3>

                 </div>
              </div>

              <div class="col-block service-item" data-aos="fade-up">
                  <div class="service-icon" style="text-align:center">
                      <img src="views/app/images/1.jpg" style="border-radius: 50%;" width="100px" height="100px">
                           <h3 class="h2" >Alfonso Delgado</h3>

                  </div>
               </div>
               -->

       </div> <!-- end services-list -->
       <!-- end footer-bottom -->

   </section> <!-- end s-clients -->




    <!-- Java Script
    ================================================== -->
    <script src="views/app/js/jquery-3.2.1.min.js"></script>
    <script src="views/app/js/plugins.js"></script>
    <script src="views/app/js/main.js"></script>
    <script>
    setInterval(function(){
      $.ajax({
        url: "core/models/lastmeasuresall.php",
        method: "POST",
        success: function(data) {
          if(data[0].fecha == $("#hactual").text())
          {
            console.log("No ha cambiado");
          }
          else {
            $("#hactual").text(data[0].fecha);
            $("#T").text("Temperatura: "+data[0].sensorT+" C");
              $("#Oz").text("Ozono: "+data[0].sensorOz+"ppm");
              $("#Dx").text("Monóxido de Carbono: "+data[0].sensorDx+" ppm");
              $("#Pm").text("Polvo 2.5pm: "+data[0].sensorPm+" ppm");
              $("#H").text("Humedad: "+data[0].sensorH+"%");
              $("#Pm10").text("Polvo 10pm: "+data[0].sensorPm+" ppm");

            console.log("Cambio");
            console.log(data);
          }

        },
        error: function(data) {
          console.log(data);
        }
        });
      }, 1000);
    </script>

    <footer>
      <div class="row section-header">
              <div class="col-full">

                  <h1 class="display-2 display-2--light">Equipo</h1>
              </div>
          </div>
          <div class="col-full" >

                                <div class="col-six">
                                  <img src="views/app/images/3.jpg"
                                      srcset="views/app/images/3.jpg 1000w,
                                      views/app/images/3.jpg 500w"
                                      sizes="(max-width: 300px) 100vw, 300px" alt="">
                                    <h4>Msc. Arnoldo Contreras<br>Coordinador</h4>

                                </div>
                                <div class="col-six">
                                  <img src="views/app/images/4.jpg"
                                      srcset="views/app/images/4.jpg 1000w,
                                      views/app/images/4.jpg 500w"
                                      sizes="(max-width: 300px) 100vw, 300px" alt="">
                                    <h4>Msc. Jorge Cisne<br>Coordinador</h4>

                                </div>
          </div>
            <div class="col-full">

              <div class="col-four">
                <img src="views/app/images/1.jpg"
                    srcset="views/app/images/1.jpg 1000w,
                    views/app/images/1.jpg 500w"
                    sizes="(max-width: 300px) 100vw, 300px" alt="">
                  <h4>Alfonso Delgado <br> Desarrollador</h4>


              </div>
              <div class="col-four">
                <img src="views/app/images/2.jpg"
                    srcset="views/app/images/2.jpg 1000w,
                    views/app/images/2.jpg 500w"
                    sizes="(max-width: 300px) 100vw, 300px" alt="">
                  <h4>Henry Canales <br>Desarrollador </h4>


              </div>

                <div class="col-four">
                  <img src="views/app/images/11.jpg"
                      srcset="views/app/images/11.jpg 1000w,
                      views/app/images/11.jpg 500w"
                      sizes="(max-width: 300px) 100vw, 300px" alt="">
                    <h4>Ana Maritza <br>Desarrolador</h4>


                </div>



            </div>




            </div> <!-- end footer-main -->

            <div class="row footer-bottom">

                <div class="col-twelve">
                    <div class="copyright">
                    </div>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                    </div>
                </div>

            </div> <!-- end footer-bottom -->

        </footer> <!-- end footer -->
</body>

</html>
