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
            <a class="site-logo" href="index.html">
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
                  <img src="views/app/publicpage/images/iconon.png" width="48px" height="48px">
                </div>
                <div class="service-text">
                    <h3 class="h2" id="OxN">Óxido de Nitrógeno :  ppm</h3>
                    <p>El óxido de nitrógeno esta relacionado con afecciones del sistema nervioso Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam assumenda eius voluptatem, ut vitae molestiae minus id nihil voluptates ad rem fugit dolore qui placeat itaque, officia fugiat obcaecati expedita.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                  <img src="views/app/publicpage/images/f.ico" width="48px" height="48px">
                </div>
                <div class="service-text">
                    <h3 class="h2" id="T">Temperatura:  C &deg </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam suscipit, eius impedit id deleniti asperiores aut non in ad recusandae doloribus sapiente quibusdam nemo, autem aliquid reiciendis. Reprehenderit, quibusdam, sequi!
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
              <div class="service-icon">
                <img src="views/app/publicpage/images/iconoo.png" width="48px" height="48px">
              </div>
                <div class="service-text">
                    <h3 class="h2" id="Oz">Ozono: ppm</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa alias, non earum dolores perspiciatis dolorum quasi aspernatur nobis sed, ut assumenda quaerat sunt, laborum iste ullam, aut. Repellat, inventore, commodi.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <img src="views/app/publicpage/images/iconoc.png" width="48px" height="48px">
                </div>
                <div class="service-text">
                    <h3 class="h2" id="Dx">Dióxido de Carbono: ppm</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi maiores fugit consequatur a possimus quis perferendis beatae mollitia illo laborum illum ad necessitatibus blanditiis, earum vitae porro, molestias sequi rem.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <img src="views/app/publicpage/images/iconop10.png" width="48px" height="48px">
                </div>
                <div class="service-text">
                    <h3 class="h2" id="Pm">Polvo 2.5pm:  ppm</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium.
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-lego-block"></i></div>
                <div class="service-text">
                    <h3 class="h2" id="OA">Óxido de Azufre: 34ppm</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quas alias ipsa quae sit saepe est nulla repudiandae natus, quod cumque laudantium dolor sed, illum. Quidem officia eveniet quam. Labore.
                    </p>
                </div>
            </div>

        </div> <!-- end services-list -->


        <div class="row about-desc" data-aos="fade-up">

        </div> <!-- end about-desc -->
        </section>


        <section id="clients" class="s-clients">

       <div class="row section-header" data-aos="fade-up">
           <div class="col-full">
               <h3 class="subhead">Work Team</h3>
               <h1 class="display-2">Personal</h1>
           </div>
       </div> <!-- end section-header -->
       <div class="row services-list block-2-2 block-tab-full">
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

       </div> <!-- end services-list -->

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
              $("#Dx").text("Dióxido de Carbono: "+data[0].sensorDx+" ppm");
              $("#Pm").text("Polvo 2.5pm: "+data[0].sensorPm+" ppm");
            console.log("Cambio");
          }

        },
        error: function(data) {
          console.log(data);
        }
        });
          }, 1000);
    </script>

</body>

</html>
