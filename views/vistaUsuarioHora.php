
<?php
session_start();
if(!isset($_SESSION['id'])){
    
    header('Location:../index.php');
}
error_reporting(0);
$calendar=$_POST['calendary'];

                        
/* echo "usuario:".$_SESSION['usuario']."<br>";
echo "usuario:".$_SESSION['correo']."<br>";
echo "usuario:".$_SESSION['nombre']."<br>";
echo "usuario:".$_SESSION['telefono']."<br>"; */
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>ClinicaDentalWhite</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate-css/animate.min.css" rel="stylesheet">

  
  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">

</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <!-- <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="../img/logoDW2.png" alt="ProOnliPc">
        </div>

        <h1>BIENVENIDOS A NUESTRA CL??NICA</h1>
        <h2>Encargados de formar <span class="rotating"> sonrisas para toda la familia.</span></h2>
        
        <div class="actions">
          <a href="#about" class="btn-get-started">Ingresar</a>
          <a href="vistaRegister.php#about" class="btn-services">Registrar</a>
        </div>
      </div>
    </div>
  </section> -->

  <!--==========================
  Secci??n de encabezado
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="#"><img src="../img/logoDW3.png" alt="" title="" /></img></a>
        <!-- Descomenta abajo si prefieres usar una imagen de texto -->
        <!--<h1><a href="#hero">Encabezado 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          
          <li><a href="../views/vistaUsuarios.php#services"><?php echo $_SESSION['nombre'];?></a></li>
          <li><a href="../views/vistaUsuarios.php#portfolio">Casos cl??nicos</a></li>
          <li><a href="../controllers/controlMisReservas.php">Mis Reservas</a></li>
          <li><a href="../views/vistaUsuario.php#testimonials">Reservar Cita</a></li>
           <!-- <li class="menu-has-children"><a href="">Drop Down</a>
           <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
         <li><a href="../controllers/cerrarSesion.php">Cerrar Sesi??n</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
      
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  About Section
  ============================-->
  <!-- <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12"> -->
          <!-- INICIO DEL FORM -->
          <!-- <form action="#" method="post">
          <h3 class="section-title">Login</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">M??s de 10 a??os dedicados a la salud bucal nos dan el conocimiento y la experiencia necesaria para brindarte el mejor tratamiento.</p>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">
        <div class="col-md-6 col-md-push-6 about-content"> -->
          <!-- <h2 class="about-title">Usuario</h2> -->
         <!--  <p class="about-text" >
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example1">USUARIO</label>
                      <input type="text" id="form2Example1" class="form-control" name="user" maxlength="49" required/>
                      
                    </div>          
          </p> -->

          <!-- <h2 class="about-title">MISI??N</h2> -->
         <!--  <p class="about-text">
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example2">CONTRASE??A</label>
                    <input type="password" id="form1Example2" class="form-control" name="pass" required maxlength="40" />
                    
                  </div>
           --></p>
          <!-- <h2 class="about-title">VALORES</h2> -->
         <!--  <p class="about-text">
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example2">Son mas de 10 mil clientes satisfechos con nuestro servicio, que esperas para unirte a nuestro grupo,registrate aqu??                 <a href="vistaRegister.php#header">Registrar</a> </label> 
                  
                  </div>
                  <br>
            <button type="submit" class="btn btn-primary btn-block" name="btnIngresar">Ingresar</button>
          </p>
          </form>
        </div>
      </div>
    </div>
  </section>
 -->
   <!--==========================
  Seccion de textimonios
  ============================-->
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Reservar Cita</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">En esta secci??n usted podra realizar una reserva en DentalWhite</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="../img/logoDW4.jpg" alt=""></div>
            <h4>Ubicaci??n <i class='fa fa-map-marker'></i></h4>
            <span>Av. Benavides 457 OF. 5E Miraflores-Lima</span>
          </div>
        </div>
        <div class="col-md-9">
          <div class="quote">
            <b><img src="../img/quote_sign_left.png" alt=""></b><small><img src="img/quote_sign_right.png" alt=""></small>
            <h3>Elegir Horario Disponible</h3>
            <?php
                if(isset($_POST['btnValidar'])){
                    require_once('../models/modeloReserva.php');
                    //esto es para mostrar reservas totales
                    $calendar=$_POST['calendary'];
                    $_SESSION['calendario']=$calendar;
                    $reserva= new Reserva();
                    $horas=$reserva->getReservaXdia($calendar);
                    $time=9;
                    echo "<form action='vistaSelectDentista.php' method='post'>";
                    for ($i=0; $i <8 ; $i++) { 
                        //falta buscar reservas por d??as
                    if($horas[0]['hora']==$time.":00hs"||$horas[1]['hora']==$time.":00hs"||$horas[2]['hora']==$time.":00hs"||
                    $horas[3]['hora']==$time.":00hs"||$horas[4]['hora']==$time.":00hs"||$horas[5]['hora']==$time.":00hs"||
                    $horas[6]['hora']==$time.":00hs"||$horas[7]['hora']==$time.":00hs"||$horas[8]['hora']==$time.":00hs")
                    
                        echo "<br><input type='submit' class='btn btn-primary btn-block' name='".$time.":00hs' value='Ocupado - ".$time.":00hs' disabled>";
                        else
                        echo "<br><input type='submit' class='btn btn-primary btn-block' name='".$time.":00hs' value='Disponible +".$time.":00hs'>";
                        $time++;
                        
                    }
                        //ME QUEDE EN LA PARTE DE APRETAR EL BOTON Y SALEN SEG??N LAS HORAS RESERVADAS EN LA BASE DE DATOS
                    echo "<br>";
                    echo "<br>
                    </form>";
                    
                    
                }
            ?>
          </div>
        </div>
      </div>

      

    </div>
  </section>

  <!--==========================
  Seccion de servicios 
  ============================-->
<!--   <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Nuestro Servicios</h3>
          <div class="section-title-divider"></div>
          <p class="section-description"> En la actualidad y gracias a los avances de la odontolog??a, es posible tener una sonrisa bella y saludable sin grandes sacrificios y a costos asequibles.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-heartbeat"></i></div>
          <h4 class="service-title"><a href="">Endodoncia</a></h4>
          <p class="service-description">Este procedimiento microquir??rgico permite salvar tus dientes, para luego restaurarlos evitando as?? las extracciones.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-smile-o"></i></div>
          <h4 class="service-title"><a href="">Periodoncia</a></h4>
          <p class="service-description">Nos dedicamos a prevenir, diagn??sticar y tratar a las lesiones en tejidos que recubren los dientes, como la gingivitis y periodontitis.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-child"></i></div>
          <h4 class="service-title"><a href="">ORTODONCIA Y ORTOPEDIA</a></h4>
          <p class="service-description">Alineamos tus dientes y corregimos las alteraciones de posici??n para devolverte la funci??n masticatoria y una linda sonrisa, tanto en los ni??os como en adultos.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-plus-square"></i></div>
          <h4 class="service-title"><a href="">Cirug??a Oral</a></h4>
          <p class="service-description">Las intervenciones quir??rgicas m??s comunes en Odontolog??a son las extracciones dentales, aquellas piezas da??adas que no son viables para su reconstrucci??n, o en el caso de las terceras molares (muelas de juicio).</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-heart"></i></div>
          <h4 class="service-title"><a href="">Implantes</a></h4>
          <p class="service-description"> La mejor alternativa para reemplazar piezas dentales perdidas es la colocaci??n de implantes dentales. Mediante una intervanci??n simple y sin dolor es posible insertar estas ra??ces artificiales en el hueso remanente, para luego reconstruir la parte externa del diente, devolviendo la funci??n y la est??tica.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-hospital-o"></i></div>
          <h4 class="service-title"><a href="">REHABILITACI??N ORAL</a></h4>
          <p class="service-description">Te devolvemos la est??tica dental y el 100 % de tu capacidad masticatoria para que puedas sonre??r y disfrutar de la mejor gastronom??a del Per?? y del mundo.</p>
        </div>
      </div>
    </div>
  </section> -->

  <!--==========================
  Subscrbe Section
  ============================-->
  <!-- <section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
          <h3 class="subscribe-title">Subscribe For Updates</h3>
          <p class="subscribe-text">Join our 1000+ subscribers and get access to the latest tools, freebies, product announcements and much more!</p>
        </div>
        <div class="col-md-4 subscribe-btn-container">
          <a class="subscribe-btn" href="#">Subscribe Now</a>
        </div>
      </div>
    </div>
  </section> -->

  
  <!--==========================
  Porfolio Section
  ============================-->

  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">CASOS CL??NICOS</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">En esta secci??n usted encontrar?? los servicios que realizamos en nuestra cl??nica en DentalWhite.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(../img/ortodoncia.jpg);" href="">
            <div class="details">
              <h4>Caso 1 - Ortodoncia</h4>
              <span>Tratamientos de ortodoncia y ortopedia a ni??os y adolescentes.</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(../img/caso2.jpg);" href="">
            <div class="details">
              <h4>Caso 2 - Apicectom??a</h4>
              <span>Eliminaci??n de quiste apical mediante Apicectom??a de la pieza 2.1 y obturaci??n retrograda con MTA.</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(../img/caso3.jpg);" href="">
            <div class="details">
              <h4>Caso 3- Implantes</h4>
              <span>Colocaci??n de 06 implantes Frontier GMI, Plataforma H.I y Regeneraci??n ??sea Guiada (ROG). 
                Enero, 2020r</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(../img/caso4.jpg);" href="">
            <div class="details">
              <h4>Caso 4 - Ortodoncia</h4>
              <span>Corregir los defectos y las irregularidades de posici??n de los dientes</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(../img/cirugiaMaxilofacial.jpg);" href="">
            <div class="details">
              <h4>Caso 5 - Cirug??a Maxilofacial e implantolog??a</h4>
              <span>Recesi??n de tumoraci??n, biopsia y exodoncia de 3ra molar, posici??n III con colocaci??n de plasma rico en plaquetas.</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(../img/caso6.jpg);" href="">
            <div class="details">
              <h4>Caso 6 - Sonrisa en Zirconio</h4>
              <span>Rehabilitaci??n multidisciplinaria en Zirconio con tratamiento de endodoncia, periodoncia y ortodoncia del maxilar inferior, apoyado con microimplantes.</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(../img/caso7.jpg);" href="">
            <div class="details">
              <h4>Caso 7 - Ortodoncia</h4>
              <span>Portal de Ortodoncia a adolescente de 17 a??os.</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(../img/caso8.jpg);" href="">
            <div class="details">
              <h4>Caso 8 - Rehabilitaci??n Integral</h4>
              <span>Rehabilitaci??n superior e inferior en porcelana, apoyado con los servicios de cirug??a, endodoncia y periodoncia.</span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>


  <!--==========================
  Team Section
  ============================-->
  <!-- <section id="team">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Our Team</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="../img/team-1.jpg" alt=""></div>
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="../img/team-2.jpg" alt=""></div>
            <h4>Sarah Jhinson</h4>
            <span>Product Manager</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="../img/team-3.jpg" alt=""></div>
            <h4>William Anderson</h4>
            <span>CTO</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="../img/team-4.jpg" alt=""></div>
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section> -->

  <!--==========================
  Contact Section
  ============================-->
  <!-- <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contact Us</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>info@example.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+1 5589 55488 55s</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Ingresa un Correo Valido" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres del tema" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section> -->

  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
              <strong>DENTAL WHITE</strong> <br>     <i class="fa fa-map-marker"></i> Av. Benavides 457 OF. 5E Miraflores-Lima
              <br> <p><i class="fa fa-phone"></i> 969315517</p>
          </div>
          <div class="credits">
            Proyecto Programaci??n Web Rojas - Nolberto
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>
  <script src="../lib/morphext/morphext.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/stickyjs/sticky.js"></script>
  <script src="../lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="../js/custom.js"></script>

  <script src="../contactform/contactform.js"></script>


</body>

</html>

