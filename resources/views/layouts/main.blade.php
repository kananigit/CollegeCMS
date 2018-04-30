<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Oasis || College of Technology</title>
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

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>
    <!-- Page Content
    ================================================== -->
    <!-- Hero -->

    <!-- Header -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="/"><img src="img/oct.png" width="60px" title="OCT" /></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#about">About Us</a></li>
          <li><a href="#features">Admission</a></li>
          <li><a href="#portfolio">Courses</a></li>
          <li><a href="#team">Apply Now</a></li>
          <li class="menu-has-children"><a href="">Courses</a>
            <ul>
              <li><a href="#">Department of ICT</a></li>
              <li><a href="#">Department of Business</a></li>
              <li><a href="#">Department of Hospitality</a></li>
              <li><a href="#">Department Social Studies</a></li>
              <li><a href="#">Department of Agriculture</a></li>
              <li><a href="#">Department of Education</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->

      <nav class="nav social-nav pull-right hidden-sm-down">
        <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
      </nav>
    </div>
  </header><!-- #header -->

    @yield('content')

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="section-title">Contact Us</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 offset-lg-2">
            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Nehema Complex, 2nd Floor<br>Behind khetias Supermarket</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>collegeoct@gmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+254 724 871 111 <br>+254 729 543 970 </p>
              </div>

            </div>
          </div>

          <div class="col-lg-5">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

    <footer class="site-footer">
      <div class="bottom">
        <div class="container">
          <div class="row">

            <div class="col-lg-6 col-xs-12 text-lg-left text-center">
              <p class="copyright-text">
                © BELL Theme
              </p>
              <div class="credits">
                <a href="https://bootstrapmade.com/">Bootstrap Themes</a> by BootstrapMade
              </div>
            </div>

            <div class="col-lg-6 col-xs-12 text-lg-right text-center">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="index.html">Home</a>
                </li>

                <li class="list-inline-item">
                  <a href="#about">About Us</a>
                </li>

                <li class="list-inline-item">
                  <a href="#features">Features</a>
                </li>

                <li class="list-inline-item">
                  <a href="#portfolio">Portfolio</a>
                </li>

                <li class="list-inline-item">
                  <a href="#team">Team</a>
                </li>

                <li class="list-inline-item">
                  <a href="#contact">Contact</a>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </footer>
    <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a> <!-- JavaScript


    <!-- Required JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/tether/js/tether.min.js"></script>
    <script src="lib/stellar/stellar.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/easing/easing.js"></script>
    <script src="lib/stickyjs/sticky.js"></script>
    <script src="lib/parallax/parallax.js"></script>
    <script src="lib/lockfixed/lockfixed.min.js"></script>

    <!-- Template Specisifc Custom Javascript File -->
    <script src="js/custom.js"></script>

    <script src="contactform/contactform.js"></script>

  </body>
</html>
