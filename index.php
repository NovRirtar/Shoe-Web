<?php
require_once("repository/shoeRepository.php");
require_once("sendemail.php");
$shoeRepository = new ShoeRepository();
$sendEmail = new SendEMail();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link href="apple-touch-icon.png" rel="apple-touch-icon">
  <link href="favicon.png" rel="icon">
  <meta name="author" content="">
  <meta name="keywords" content="Default Description">
  <meta name="description" content="Default keyword">
  <title>Sky - Homepage</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom-->
  <link rel="stylesheet" href="css/style.css">
</head>
<style>
  #imageShoe {
    max-width: 100%;
    max-height: 330px;
    min-height: 330px;
    object-fit: cover;
  }

  #imageShoe2 {
    max-width: 100%;
    max-height: 310px;
    min-height: 310px;
    object-fit: cover;
  }

  #imageShoeMini {
    max-width: 50px;
    min-width: 50px;
    max-height: 50px;
    min-height: 50px;
    object-fit: cover;
  }

  #imageShoeBanner {
    max-width: 98%;
    min-width: 98%;
    max-height: 400px;
    min-height: 400px;
    object-fit: cover;
  }

  .ps-shoe .ps-shoe__price {
    position: unset;
  }
  .ps-section--features-product .ps-masonry__filter li > a{
    border: none;
  }
</style>

<body class="ps-loading">
  <div class="header--sidebar"></div>
  <header class="header">
    <div class="header__top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
            <p>460 West 34th Street, 15th floor, New York - Hotline: 804-377-3580 - 804-399-3580
            </p>
          </div>
          <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
            <div class="header__actions">
              <?php
              require_once("backend/filterWithCookie.php");
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navigation">
      <div class="container-fluid">
        <div class="navigation__column left">
          <div class="header__logo"><a class="ps-logo" href="index.php"><img src="images/logo.png" alt=""></a></div>
        </div>
        <div class="navigation__column center">
        <ul class="main-menu menu">
              <li class="menu-item"><a href="index.php">Home</a>
              </li>
              <li class="menu-item"><a href="product-listing.php">Product</a></li>
              <li class="menu-item "><a href="blog-list.php">News</a>
              </li>
              <li class="menu-item "><a href="contact-us.php">Contact</a>
              </li>
            </ul>
        </div>
        <div class="navigation__column right">
          <form class="ps-search--header" action="do_action" method="post">
            <input class="form-control" type="text" placeholder="Search Product…">
            <button><i class="ps-icon-search"></i></button>
          </form>
          <div class="ps-cart"><a class="ps-cart__toggle" href="cart.php"><i class="ps-icon-shopping-cart"></i></a>
            <?php require_once("formCart.php") ?>
          </div>
          <div class="menu-toggle"><span></span></div>
        </div>
      </div>
    </nav>
  </header>
  <div class="header-services">
    <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard
        delivery on all orders within Ho Chi Minh City</p>
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard
        delivery on all orders within Ho Chi Minh City</p>
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard
        delivery on all orders within Ho Chi Minh City</p>
    </div>
  </div>
  <main class="ps-main">
    <div class="ps-banner">
      <div class="rev_slider fullscreenbanner" id="home-banner">
        <ul>
          <li class="ps-banner" data-index="rs-2972" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0"><img class="rev-slidebg" src="./images/banner/home-banner-2.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
          </li>
          <li class="ps-banner ps-banner--white" data-index="rs-100" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0">
            <img class="rev-slidebg" src="./images/banner/home-banner-2.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
          </li>
        </ul>
      </div>
    </div>
    <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
      <div class="ps-container">
        <div class="ps-section__header mb-50">
          <h3 class="ps-section__title" data-mask="Products">Products</h3>
          <ul class="ps-masonry__filter">
            <li class="current"><a href="#" data-filter="*">All
                <sup><?php echo $shoeRepository->countShoeByCategoryName(''); ?></sup></a></li>
            <li>
              <a href="#" data-filter=".nike">Nike
                <sup><?php echo $shoeRepository->countShoeByCategoryName('nike'); ?></sup></a>
            </li>
            <li>
              <a href="#" data-filter=".adidas">Adidas
                <sup><?php echo $shoeRepository->countShoeByCategoryName('adidas'); ?></sup></a>
            </li>
            <li>
              <a href="#" data-filter=".vans">Vans
                <sup><?php echo $shoeRepository->countShoeByCategoryName('vans'); ?></sup></a>
            </li>
            <li>
              <a href="#" data-filter=".converse">Converse
                <sup><?php echo $shoeRepository->countShoeByCategoryName('converse'); ?></sup></a>
            </li>
          </ul>
        </div>
        <div class="ps-section__content pb-50">
          <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
            <div class="ps-masonry">
              <div class="grid-sizer"></div>
              <?php
              $checkNew = false;
              $listShoe = $shoeRepository->getAll(15);
              foreach ($listShoe as $shoe) {
              ?>
                <div class="grid-item <?php echo $shoe['name'] ?>">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail">
                        <?php
                        if (!$checkNew) {
                          echo '<div class="ps-badge"><span>New</span></div>';
                          $checkNew = true;
                        }
                        if ($shoe['sale'] > 0) {
                          echo '<div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-' . $shoe['sale'] . ' %</span></div>';
                        }
                        ?>

                        <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                        <?php
                        $arrLinkImage = $shoeRepository->getImage($shoe['shoe_id']);
                        if ($arrLinkImage->num_rows > 0) {
                          echo '<img id="imageShoe" src="' . $arrLinkImage->fetch_assoc()['link_image'] . '" alt="">';
                        } else {
                          echo '<img src="images/shoe/1.jpg" alt="">';
                        }
                        ?>
                        <a class="ps-shoe__overlay" href="product-detail.php?id=<?php echo $shoe['shoe_id'] ?>"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal">
                            <?php
                            foreach ($arrLinkImage as $linkImage) {
                            ?>
                              <img id="imageShoeMini" src="<?php echo $linkImage['link_image'] ?>" alt="">
                            <?php
                            }
                            ?>
                          </div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#"><?php echo $shoe['shoe_name'] ?></a>
                          <p class="ps-shoe__categories"><a href="#"><?php echo $shoe['name'] ?></a></p>
                          <span class="ps-shoe__price">
                            <?php
                            if ($shoe['sale'] > 0) {
                              echo '<del>' . $shoe['price'] . ' VND</del>';
                            }
                            ?>
                            <?php
                            echo ($shoe['price'] - $shoe['price'] * $shoe['sale'] * 0.01) . " VND";
                            ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ps-section ps-section--top-sales ps-owl-root pt-80 pb-80">
      <div class="ps-container">
        <div class="ps-section__header mb-50">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
              <h3 class="ps-section__title" data-mask="BEST SALE">- Top Sales</h3>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
              <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
            </div>
          </div>
        </div>
        <div class="ps-section__content">
          <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
            <?php
            foreach ($listShoe as $shoe) {
              if ($shoe['sale'] > 0) {
            ?>
                <div class="ps-shoes--carousel">
                  <div class="ps-shoe">
                    <div class="ps-shoe__thumbnail">
                      <div class="ps-badge"><span>New</span></div>
                      <?php
                      echo '<div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-' . $shoe['sale'] . ' %</span></div>';
                      ?>
                      <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                      <?php
                      $arrLinkImage = $shoeRepository->getImage($shoe['shoe_id']);
                      if ($arrLinkImage->num_rows > 0) {
                        echo '<img id="imageShoe2" src="' . $arrLinkImage->fetch_assoc()['link_image'] . '" alt="">';
                      } else {
                        echo '<img src="images/shoe/1.jpg" alt="">';
                      }
                      ?>
                      <a class="ps-shoe__overlay" href="product-detail.php?id=<?php echo $shoe['shoe_id'] ?>"></a>
                    </div>
                    <div class="ps-shoe__content">
                      <div class="ps-shoe__variants">
                        <div class="ps-shoe__variant normal">
                          <?php
                          foreach ($arrLinkImage as $linkImage) {
                          ?>
                            <img id="imageShoeMini" src="<?php echo $linkImage['link_image'] ?>" alt="">
                          <?php
                          }
                          ?>
                        </div>
                        <select class="ps-rating ps-shoe__rating">
                          <option value="1">1</option>
                          <option value="1">2</option>
                          <option value="1">3</option>
                          <option value="1">4</option>
                          <option value="2">5</option>
                        </select>
                      </div>
                      <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.php"><?php echo $shoe['shoe_name'] ?></a>
                        <p class="ps-shoe__categories"><a href="#"><?php echo $shoe['name'] ?></a></p>
                        <span class="ps-shoe__price">
                          <del><?php echo $shoe['price'] ?> VND</del>
                          <?php
                          echo ($shoe['price'] - $shoe['price'] * $shoe['sale'] * 0.01) . " VND";
                          ?></span>
                      </div>
                    </div>
                  </div>
                </div>
            <?php
              }
            }
            ?>
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
                <header><a class="ps-logo" href="index.php"><img src="images/logo-white.png" alt=""></a>
                  <h3 class="ps-widget__title">Address Office 1</h3>
                </header>
                <footer>
                  <p><strong>460 West 34th Street, 15th floor, New York</strong></p>
                  <p>Email: <a href='mailto:support@store.com'>support@store.com</a></p>
                  <p>Phone: +323 32434 5334</p>
                  <p>Fax: ++323 32434 5333</p>
                </footer>
              </aside>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
              <aside class="ps-widget--footer ps-widget--info second">
                <header>
                  <h3 class="ps-widget__title">Address Office 2</h3>
                </header>
                <footer>
                  <p><strong>PO Box 16122 Collins Victoria 3000 Australia</strong></p>
                  <p>Email: <a href='mailto:support@store.com'>support@store.com</a></p>
                  <p>Phone: +323 32434 5334</p>
                  <p>Fax: ++323 32434 5333</p>
                </footer>
              </aside>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
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
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
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
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
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
            </div>
          </div>
        </div>
      </div>
      <div class="ps-footer__copyright">
        <div class="ps-container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
              <p>&copy; <a href="#">SKYTHEMES</a>, Inc. All rights Resevered. Design by <a href="#"> Alena Studio</a></p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
              <ul class="ps-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
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
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB">
  </script>
  <script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js">
  </script>
  <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js">
  </script>
  <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js">
  </script>
  <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <!-- Custom scripts-->
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>