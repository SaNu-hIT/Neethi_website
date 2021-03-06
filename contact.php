<?php

$errname="";
$errphone="";
$erremail="";
$phoneVal="";
if(isset($_POST['submit']))
{
if(empty($_POST['name']))
{
    $errname="Name required";
}
if(empty($_POST['phone']))
{
    $errphone="Phone number required";
}
if(empty($_POST['email']))
{
    $erremail="Email required";
}
}
?>

<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="Nghia Minh Luong">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>NEETHI - Contact Us</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="plugins/revolution/css/navigation.css">
    <!-- Custom-->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body class="ps-loading">
    <div class="header--sidebar"></div>
    <header class="header">
      <div class="header__top">
        <div class="container-fluid">
          <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                  <p>Neethi Opticals
                        Eliza plaza, Mangattukavala, 685585 Idukki, India</p>
                </div>
                <!-- <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                  <div class="header__actions"><a href="#">Login & Regiser</a>
                    <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD<i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#"><img src="images/flag/usa.svg" alt=""> USD</a></li>
                        <li><a href="#"><img src="images/flag/singapore.svg" alt=""> SGD</a></li>
                        <li><a href="#"><img src="images/flag/japan.svg" alt=""> JPN</a></li>
                      </ul>
                    </div>
                    <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">English</a></li>
                        <li><a href="#">Japanese</a></li>
                        <li><a href="#">Chinese</a></li>
                      </ul>
                    </div>
                  </div>
                </div> -->
          </div>
        </div>
      </div>
      <nav class="navigation"  >
        <div class="container-fluid">
          <div class="navigation__column left">
            <div class="header__logo"><a class="ps-logo" href="index.php"><img src="images/logo_n.png" alt=""></a></div>
          </div>
          <div class="navigation__column center" >
                <ul class="main-menu menu">
                  <li class="menu-item"><a href="index.php">Home</a>

                  </li>
                  <li class="menu-item"><a href="product-listing.php">Products</a>

                  </li>


                  <li class="menu-item"><a href="contact.php">Contact</a>

                  </li>
                  <li class="menu-item"><a href="#">About</a>

                  </li>
                </ul>
          </div>
          <div class="navigation__column right"  >
            <form class="ps-search--header" action="product-listing.php" method="post">
              <input class="form-control" type="text" placeholder="Search Product…">
              <button><i class="ps-icon-search"></i></button>
            </form>
            
            <div class="menu-toggle"><span></span></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="header-services">
      <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get 37% discount on every order with Neethi</p>
                <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get 37% discount on every order with Neethi</p>
              </div>
    </div>
    <main class="ps-main">
      <div class="ps-contact ps-contact--2 ps-section pt-80 pb-80">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <div class="ps-section__header pt-50">
                    <h2 class="ps-section__title" data-mask="Contact">- Get in touch</h2>
                    <form class="ps-contact__form"  method="post">
                      <div class="form-group">
                        <label>Name <sub>*</sub></label>
                         <input class="form-control" type="text" name="name"><font color="red"><?php echo $errname ?></font>
                           
                      </div>
                      <div class="form-group">
                        <label>Email <sub>*</sub></label>
                        <input class="form-control" type="email" name="email"><font color="red"><?php echo $erremail ?></font>
                           </div>

                           <div class="form-group">
                              <label>Phone<span>*</span>
                              </label>
                              <input class="form-control" type="text" name="phone" value="<?php echo $phoneVal ?>"><font color="red"><?php echo $errphone ?></font>
                            </div>
                       <div class="form-group mb-25">
                        <label>Your Message <sub>*</sub></label>
                        <textarea class="form-control" rows="6" name="message" ></textarea>
                      </div>
                      <div class="form-group">
                      <input class="ps-btn ps-btn--fullwidth" type="submit" name="submit" value="Send Message"> 
                        
                        </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <div id="contact-map" data-address="Mangattukavala, 685585 Idukki, India" data-title="Shoe Store!" data-zoom="17"></div>
                </div>
          </div>
        </div>
      </div>
    
      <div class="ps-footer bg--cover" data-background="images/background/parallax.jpg">
        <div class="ps-footer__content">
          <div class="ps-container">
            <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info">
                      <header><a class="ps-logo" href="index.html"><img src="images/logo_n.png" alt=""></a>
                        <h3 class="ps-widget__title"> Kothamangalam </h3>
                      </header>
                      <footer>
                        <p><strong>Neethi Opticals
                              Eliza plaza, Mangattukavala, 685585 Idukki, India</strong></p>
                        <p>Email: <a href='mailto:support@neethi.com'>support@neethi.com</a></p>
                        <p>Phone: +91 88916 61161</p>

                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info second">
                      <header>
                        <h3 class="ps-widget__title">Thodupuzha</h3>
                      </header>
                      <footer>
                        <p><strong>Neethi Opticals
                              Eliza plaza, Mangattukavala, 685585 Idukki, India</strong></p>
                        <p>Email: <a href='mailto:support@neethi.com'>support@neethi.com</a></p>
                        <p>Phone: +91 88916 61161</p>

                      </footer>
                    </aside>
                  </div>
                  <!-- <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">Find Our store</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--link">
                          <li><a href="#">Coupon Code</a></li>
                          <li><a href="#">SignUp For Email</a></li>
                          <li><a href="#">Site Feedback</a></li>
                          <li><a href="#">Careers</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div> -->
                  <!-- <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">Get Help</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--line">
                          <li><a href="#">Order Status</a></li>
                          <li><a href="#">Shipping and Delivery</a></li>
                          <li><a href="#">Returns</a></li>
                          <li><a href="#">Payment Options</a></li>
                          <li><a href="#">Contact Us</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div> -->
                  <!-- <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">Products</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--line">
                          <li><a href="#">Shoes</a></li>
                          <li><a href="#">Clothing</a></li>
                          <li><a href="#">Accessries</a></li>
                          <li><a href="#">Football Boots</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div> -->
            </div>
          </div>
        </div>
        <div class="ps-footer__copyright">
          <div class="ps-container">
            <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <p>&copy; <a href="#">Leeways</a>, Inc. All rights Resevered. Design by <a href="leewaylabs.com"> Leeways</a></p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <ul class="ps-social">
                      <li><a href="#https://www.facebook.com/neethiopticals/"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                  </div>
            </div>
          </div>
        </div>
      </div>

    </main>
    <!-- JS Library-->
    <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/gmap3.min.js"></script>
    <script type="text/javascript" src="plugins/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="plugins/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="plugins/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="plugins/slick/slick/slick.min.js"></script>
    <script type="text/javascript" src="plugins/elevatezoom/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script><script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <!-- Custom scripts-->
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if(isset($_POST['submit']))
{
   
   if((!empty($_POST['name']))&&(!empty($_POST['phone'])))
   {
   echo "fd";
        $Welcome="Hi. <br/><br/> You have a  feedback message from neethi website please do needfull  details are given below  : <br/><br/>";
        
        $custtomerdetails="<b>Customer details</b> <br/><br/> Frist name  : ". $_POST['name']."<br/> Email   : ". $_POST['email']."<br/> Phone   : ". $_POST['phone']."";
        $message=$Welcome."<br/><br/>".$custtomerdetails;
        $message=$message."<br/><br/> Message given below <br/><br/>".$_POST['message']."<br/><br/> <b>Thanks and regrds </b>";
        $to      = 'sanufeliz@gmail.com';
        $subject = 'Feedback';
        $message = $message;
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
      
        mail($to, $subject, $message, $headers);
        $phoneVal="dsdsd";
       echo '<script>swal("Success !", "Feedback Send successfully!", "success")</script>';
    
        
   }
    
}
}
?> 