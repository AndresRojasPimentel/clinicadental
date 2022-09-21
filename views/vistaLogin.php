<?php
  if(isset($_POST['btnIngresar'])){
    require_once('../models/modelo.php');
    $logUser= new Usuario;
    $login=$logUser->Login($_POST['user'],sha1($_POST['pass']));
    require_once('../models/modeloDentista.php');
    $logUser= new Dentista;
    $login=$logUser->LoginDentista($_POST['user'],sha1($_POST['pass']));
  }
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
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="../img/logoDW2.png" alt="ProOnliPc">
        </div>

        <h1>BIENVENIDOS A NUESTRA CLÍNICA</h1>
        <h2>Encargados de formar <span class="rotating"> sonrisas para toda la familia.</span></h2>
        
        <div class="actions">
          <a href="#about" class="btn-get-started">Ingresar</a>
          <a href="vistaRegister.php#about" class="btn-services">Registrar</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Sección de encabezado
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="../index.php"><img src="../img/logoDW3.png" alt="" title="" /></img></a>
        <!-- Descomenta abajo si prefieres usar una imagen de texto -->
        <!--<h1><a href="#hero">Encabezado 1</a></h1>-->
      </div>

      
      
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  About Section
  ============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <!-- INICIO DEL FORM -->
          <form action="#" method="post">
          <h3 class="section-title">Login</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Más de 10 años dedicados a la salud bucal nos dan el conocimiento y la experiencia necesaria para brindarte el mejor tratamiento.</p>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">
        <div class="col-md-6 col-md-push-6 about-content">
          <!-- <h2 class="about-title">Usuario</h2> -->
          <p class="about-text" >
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example1">USUARIO</label>
                      <input type="text" id="form2Example1" class="form-control" name="user" maxlength="49" required/>
                      
                    </div>          
          </p>

          <!-- <h2 class="about-title">MISIÓN</h2> -->
          <p class="about-text">
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example2">CONTRASEÑA</label>
                    <input type="password" id="form1Example2" class="form-control" name="pass" required maxlength="40" />
                    
                  </div>
          </p>
          <!-- <h2 class="about-title">VALORES</h2> -->
          <p class="about-text">
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example2">Son mas de 10 mil clientes satisfechos con nuestro servicio, que esperas para unirte a nuestro grupo,registrate aquí                 <a href="vistaRegister.php#header">Registrar</a> </label> 
                  
                  </div>
                  <br>
            <button type="submit" class="btn btn-primary btn-block" name="btnIngresar">Ingresar</button>
          </p>
          </form>
        </div>
      </div>
    </div>
  </section>



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
            Proyecto Programación Web Rojas - Nolberto
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
