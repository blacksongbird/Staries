<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="logo.ico">
    <title>Staries</title>
    <link href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/et-line.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/vertical.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/searchbar2.css">
    <link rel="stylesheet" href="css/stars.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src='js/removeBanner.js'></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

    <!--Delete after config-->
    <link href="css/style.changer.css" rel="stylesheet">
    <link id="theme" href="css/theme/theme-blue.css" rel="stylesheet">
    <style media="screen">
      #redes-sociales a:before{
        border:1px solid #21759B;
      }
      #redes-sociales i:before{
        color:#21759B;
      }
      #redes-sociales{
        margin-left: 10px;
      }

      .logo .small-height span{
         color:#21759B !important;
      }
    </style>
  </head>
  <body class="appear-animate">
		<?php
			if (isset($_SESSION['loggedin'])) {
			}
			else {
					echo "<div class='alert alert-danger mt-4' role='alert'>
					<h4>You need to log in to access this page.</h4>
					<p><a href='Login/login.php'>Log in Here!</a></p></div>";
					exit;
			}
		?>
    <div id="top"></div>
    <!-- Navigation panel-->
    <nav class="main-nav white transparent stick-fixed">
      <div class="full-wrapper relative clearfix">
        <!-- Logo ( paste you text or image)-->
        <div class="nav-logo-wrap"><a href="staries-home.php" class="logo"><span class="higl">Star</span>ies</a></div>
        <div class="navbar-mobile"><i class="fa fa-bars"></i></div>
        <!-- Main Menu-->


        <div class="inner-nav navbar-desktop">
          <ul class="clearlist scroll scroll-nav">
            <li class="active"><a href="#">Your Constellation <ion-icon name="planet" style="font-size:20px;margin-bottom:-5px;"></ion-icon></a></li>
            <!-- Item With Sub-->
            <li><a href="#" class="menu-has-sub">Filter <ion-icon name="filter" style="font-size:20px;margin-bottom:-5px;"></ion-icon></a>
            <ul class="filter menu-sub">
              <li class="active"><a href="#" data-filter="*" style="color:white;">All the Stars</a></li>
              <li><a href="#" data-filter=".branding" style="color:white;">Novels</a></li>
              <li><a href="#" data-filter=".design" style="color:white;">Short Stories and Poems</a></li>
            </ul>
            </li>
            <li><a href="#team">Authors <ion-icon name="pencil-sharp" style="font-size:20px;margin-bottom:-5px;"></ion-icon></a></li>
            <li><a href="#" class="menu-has-sub"><?php echo $_SESSION['name']; ?> <ion-icon name="person" style="font-size:20px;margin-bottom:-5px;"></ion-icon></a>
              <!-- Sub-->
              <ul class="menu-sub">
                <li><a href="Login/logout.php">Log Out <ion-icon name="log-out" style="font-size:20px;margin-bottom:-5px;margin-left:55px;"></ion-icon></a></li>
              </ul>
              <!-- End Sub-->
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Start section hero-->



      <!-- partial -->
    <div id="page" class="page">
      <!--Portfolio Start-->
      <section id="portfolio" class="bg-light pb-60" style="background:#21759B; color: white;">
        <div class="container" style="z-index: 100;">
          <div class="row mt-40 mt-xs-20">
            <div class="col-md-12 text-center">
              <h3 style="color:white;">Your <bstyle="color:white; font-size: 50px;">Constellation</b></h3>
            </div>
          </div>
        </div>
        <ul class="filter text-center mt-60 mt-xs-30">

        </ul>
        <div class="container">
          <div data-wow-delay="0.1s" data-wow-duration="2s" class="work-container mt-40 mt-xs-20 wow fadeIn">
            <canvas id="sky" style="margin-top:-130px;"></canvas>
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12 work-item branding">
                <div class="figure effect-hover"><img src="img/tyd/tyd-square.png" alt="img01" style="border-radius:50px;">
                  <div class="figcaption">
                    <h5 class="alt-font" style="color:white; margin-bottom:25px;">Tonadas<br>y<br>Desmemorias<br><br><b style="font-size:12px; color:white;"> Gabriel Lobo</b></h5>
                    <h5 class="alt-font" style="font-size:12px; font-family:'Dosis', Arial, sans-serif;color:white"><ion-icon name="star" style="font-size:25px; margin-bottom:-5px; color: white;"></ion-icon> New!</h5>
                  </div><a href="Tonadas y Desmemorias.php">Read Star</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12 work-item branding">
                <div class="figure effect-hover"><img src="img/mym/mym-square.png" alt="img01" style="border-radius:50px;">
                  <div class="figcaption">
                    <h5 class="alt-font" style="color:white; margin-bottom:60px;">Melodías<br>y<br>Memorias<br><br><b style="font-size:12px; color:white;"> Gabriel Lobo</b></h5>
                  </div><a href="Melodías y Memorias.php">Read Star</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12 work-item branding">
                <div class="figure effect-hover"><img src="img/mym/m&m.png" alt="img01" style="border-radius:50px;">
                  <div class="figcaption">
                    <h5 class="alt-font" style="color:white; margin-bottom:25px;">Memories<br>&<br>Melodies<br><br><b style="font-size:12px; color:white;"> Gabriel Lobo</b></h5>
                    <h5 class="alt-font" style="font-size:12px; font-family:'Dosis', Arial, sans-serif;color:white"><ion-icon name="language" style="font-size:25px; margin-bottom:-5px; color: white;"></ion-icon> English Novel!</h5>
                  </div><a href="Memories & Melodies.php">Read Star</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12 work-item design">
                <div class="figure effect-hover"><img src="img/portfolio/destello.png" alt="img01" style="border-radius:50px;">
                  <div class="figcaption">
                    <h5 class="alt-font" style="color:white; margin-bottom:60px;">El Destello Caído<br>del Firmamento<br><br><b style="font-size:12px; color:white;"> Gabriel Lobo</b></h5>
                  </div><a href="El Destello Caído del Firmamento/El Destello Caído del Firmamento.php">Read Star</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12 work-item branding">
                <div class="figure effect-hover"><img src="img/cyr/cyr-square.png" alt="img01" style="border-radius:50px;">
                  <div class="figcaption">
                    <h5 class="alt-font" style="color:white; margin-bottom:60px;">Canciones<br>y<br>Recuerdos<br><br><b style="font-size:12px; color:white;"> Gabriel Lobo</b></h5>
                  </div><a href="Canciones y Recuerdos.php">Read Star</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12 work-item design">
                <div class="figure effect-hover"><img src="img/portfolio/condicion.png" alt="img01" style="border-radius:50px;">
                  <div class="figcaption">
                    <h5 class="alt-font" style="color:white; margin-bottom:60px;">La Condición<br>Humana<br><br><b style="font-size:12px; color:white;"> Gabriel Lobo</b></h5>
                  </div><a href="La Condición Humana/La Condición Humana.php">Read Star</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12 work-item design">
                <div class="figure effect-hover"><img src="img/portfolio/lienzo.png" alt="img01" style="border-radius:50px;">
                  <div class="figcaption">
                    <h5 class="alt-font" style="color:white; margin-bottom:80px;">Lienzo<br><b style="font-size:12px; color:white;"><br>Alyssa Fallas</b></h5>
                  </div><a href="Poemas/Lienzo/Lienzo-index.php">Read Star</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12 work-item design">
                <div class="figure effect-hover"><img src="img/portfolio/noenamorada.png" alt="img01" style="border-radius:50px;">
                  <div class="figcaption">
                    <h5 class="alt-font" style="color:white; margin-bottom:60px;">Usted No Está Enamorada<br><b style="font-size:12px; color:white;"><br>Alyssa Fallas</b></h5>
                  </div><a href="Poemas/Usted No Está Enamorada/Usted No Está Enamorada-index.php">Read Star</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12 work-item design">
                <div class="figure effect-hover"><img src="img/portfolio/hipocresia.png" alt="img01" style="border-radius:50px;">
                  <div class="figcaption">
                    <h5 class="alt-font" style="color:white; margin-bottom:60px;">Hipocresía<br>Demoniaca<br><b style="font-size:12px; color:white;"><br>Alyssa Fallas</b></h5>
                  </div><a href="Poemas/Hipocresía Demoniaca/Hipocresía Demoniaca-index.php">Read Star</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12 work-item design">
                <div class="figure effect-hover"><img src="img/portfolio/barcoyfaro.png" alt="img01" style="border-radius:50px;">
                  <div class="figcaption">
                    <h5 class="alt-font" style="color:white; margin-bottom:60px;">El Barco<br>y<br>el Faro<br><b style="font-size:12px; color:white;"><br>Alyssa Fallas</b></h5>
                  </div><a href="Poemas/El Barco y el Faro/El Barco y el Faro-index.php">Read Star</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12 work-item design">
                <div class="figure effect-hover"><img src="img/portfolio/vegetal.png" alt="img01" style="border-radius:50px;">
                  <div class="figcaption">
                    <h5 class="alt-font" style="color:white; margin-bottom:80px;">Vegetal<br><b style="font-size:12px; color:white;"><br>Canadian Johan</b></h5>
                  </div><a href="Poemas/Vegetal/Vegetal-index.php">Read Star</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12 work-item design">
                <div class="figure effect-hover"><img src="img/portfolio/inotropico.png" alt="img01" style="border-radius:50px;">
                  <div class="figcaption">
                    <h5 class="alt-font" style="color:white; margin-bottom:80px;">Inotrópico<br><b style="font-size:12px; color:white;"><br>Canadian Johan</b></h5>
                  </div><a href="Poemas/Inotrópico/Inotrópico-index.php">Read Star</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12 work-item design">
                <div class="figure effect-hover"><img src="img/portfolio/gelida.png" alt="img01" style="border-radius:50px;">
                  <div class="figcaption">
                    <h5 class="alt-font" style="color:white; margin-bottom:80px;">Gélida<br><b style="font-size:12px; color:white;"><br>Canadian Johan</b></h5>
                  </div><a href="Poemas/Gélida/Gélida-index.php">Read Star</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12 work-item design">
                <div class="figure effect-hover"><img src="img/portfolio/vertedero.png" alt="img01" style="border-radius:50px;">
                  <div class="figcaption">
                    <h5 class="alt-font" style="color:white; margin-bottom:80px;">Vertedero<br><b style="font-size:12px; color:white;"><br>Canadian Johan</b></h5>
                  </div><a href="Poemas/Vertedero/Vertedero-index.php">Read Star</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Portfolio End-->

      <section id="team">
        <div class="container">
          <div class="row mt-40 mt-xs-20">
            <div class="col-md-12 text-center">
              <h3>Our <b style="color:#21759B;">Writers</b></h3>
            </div>
          </div>
          <div class="row mt-80 mt-xs-40 mb-80 mb-xs-40 team-slider">
            <div class="col-sm-12">
              <figure class="team-item"><img src="img/team/p7.jpg" style="width: 200px; height: 200px;" alt="200x200" class="resp img-circle">
                <div class="social-links team-social" id="redes-sociales"><a href="https://www.instagram.com/fallasalyssa/" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></div>
                <figcaption>
                  <h5 class="alt-font">Alyssa Fallas <br><small>Official Poetess</small></h5>
                  <p>Good stories and evening coffee lover.</p>
                </figcaption>
              </figure>
            </div>
            <div class="col-sm-12">
              <figure class="team-item"><img src="img/team/p10.jpg" style="width: 200px; height: 200px;" alt="200x200" class="resp img-circle">
                <div class="social-links team-social" id="redes-sociales"><a href="https://twitter.com/the_retirw" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/the_retirw" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></div>
                <figcaption>
                  <h5 class="alt-font">Gabriel Lobo<br><small>Official Poet and Writer</small></h5>
                  <p>Music and stars lover.</p>
                </figcaption>
              </figure>
            </div>
            <div class="col-sm-12">
              <figure class="team-item"><img src="img/team/p6.jpg" style="width: 200px; height: 200px;" alt="200x200" class="resp img-circle">
                <div class="social-links team-social" id="redes-sociales"><a href="https://www.instagram.com/johan.cv06/" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></div>
                <figcaption>
                  <h5 class="alt-font">Canadian Johan<br><small>Official Poet</small></h5>
                  <p>Let's reify without emotional senses.</p>
                </figcaption>
              </figure>
            </div>
          </div>
        </div>

      <!-- Page Footer Start-->
      <footer class="page-footer" style="background:#21759B; color: white;">
        <div class="container text-center">
          <!-- Social links-->
          <div class="social-links"><a href="https://twitter.com/stariesbooks" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/stariesbooks/?hl=es-la" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></div>
          <div class="copy-right mt-50"style="color:white;"><a href="#" class="alt-font" style="color:white;">© Staries 2020</a>
            <p style="color:white;">Fallen From the Sky</p>
            <br>
            <br>
            <img src="img/team/GEO.png" width="200px" height="250px">
          </div>
        </div><a href="#top" class="scroll scroll-to-top"><i class="fa fa-angle-up"style="color:white;"></i></a>
      </footer>
      <!-- Page footer end -->
    </div>

    <!--JS sctipts-->
    <script src="js/vendor/jquery-2.1.3.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/plagins.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;amp;language=en"></script>
    <script src="js/gmap3.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src='https://requirejs.org/docs/release/2.1.15/minified/require.js'></script>
    <script src='https://rawgit.com/ironwallaby/delaunay/master/delaunay.js'></script>
    <script src="js/style.changer.js"></script>
    <script src="js/searchbarstars2.js"></script>
    <script src="js/searchbar.js"></script>


  </body>
</html>
