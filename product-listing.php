<?php
include_once("Classes/dbclasses/Product_db.php");
$product1=new Product_db();
?>
<html>
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
    <title>NEETHI - Product Listing</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
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
    <script type="text/javascript" src="Scripts/product_details_script.js"></script>
    
    <!-- Custom-->
    <link rel="stylesheet" href="css/style.css">
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
      <div class="ps-products-wrap pt-80 pb-80">
        <div class="ps-products" data-mh="product-listing">
          <div class="ps-product-action">
            <div class="ps-product__filter">
              <select class="ps-select selectpicker"  id="drpid">
                <option value="ALL">Shortby</option>
                <option value="AZ">Name(A to Z)</option>
                <option value="ZA">Name(Z to A)</option>
                <option value="LH">Price (Low to High)</option>
                <option value="HL">Price (High to Low)</option>
              </select>
            </div>
            <div class="ps-pagination">
              
            </div>
          </div>
          <div class="ps-product__columns">
           
          <?php

         if(isset($_GET['filter']))
         {
          $filerval=$_GET['filter'];
         }
         else{
          $filerval="ALL";
         }
$result=$product1->SelectAllProductbyFilter($filerval);

while($row=mysqli_fetch_array($result))
   {
    $actualprice=((int)($row['SellingPrice']))-((int)($row['SellingPrice'])*(int)($row['Discount'])/100);
  
 $Imageresult=$product1->SelectImageDetailsById($row['ItemId']);
  $result2=mysqli_fetch_assoc($Imageresult);
  if($result2["ImageUrl"]==""||$result2["ImageUrl"]==null)
  {
    $result2["ImageUrl"]="upload/default.jpg";
  }

        echo '<div class="ps-product__column">
              <div class="ps-shoe mb-30">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div>
                  <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-'.$row['Discount'].'%</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="Admin/'.$result2["ImageUrl"].'" alt=""><a class="ps-shoe__overlay" href="product-detail.php?ItemId='.$row['ItemId'].'"></a>
                </div>
                <div class="ps-shoe__content">
                  <div class="ps-shoe__variants">
                  <div class="ps-shoe__variant normal">';


                  while($row1=mysqli_fetch_array($Imageresult))
                  {
                   
                 echo  '<img src="Admin/'.$row1["ImageUrl"].'" alt="">';
                  
                 };
                  echo  '</div>
                    
                    <select class="ps-rating ps-shoe__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </div>
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">'.$row['ItemName'].'</a>
                    <p class="ps-shoe__categories"><a href="#">Lense </a>,<a href="#">'.$row['ItemCode'].'</a></p><span class="ps-shoe__price">
                      <del>RS'.$row['SellingPrice'].' </del>Rs '.$actualprice.'</span>
                  </div>
                </div>
              </div>
    </div>';
                
              }
?>




          </div>
          
        </div>
        
      </div>
      <!-- <div class="ps-subscribe">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                  <h3><i class="fa fa-envelope"></i>Sign up to Newsletter</h3>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                  <form class="ps-subscribe__form" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="">
                    <button>Sign up now</button>
                  </form>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                  <p>...and receive  <span>$20</span>  coupon for first shopping.</p>
                </div>
          </div>
        </div>
      </div> -->
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
