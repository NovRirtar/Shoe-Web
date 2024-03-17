<?php

require_once("backend/auth.php");
require_once("repository/shoeRepository.php");
require_once("repository/cartRepository.php");

$cartRepository = new CartRepository();
$shoeRepository = new ShoeRepository();
$infoUser = Auth::loginWithCookie();
$shoe = $shoeRepository->getById($_GET['id'])->fetch_assoc();
$listShoe = $shoeRepository->getAll(12);
$arrLinkImage = $shoeRepository->getImage($_GET['id']);


if (isset($_POST['submit_cart'])) {
  $user_id = Auth::loginWithCookie()['id'];
  if ($cartRepository->findByUserIdAndShoeIdAndStatus($user_id, $_GET['id'], 1)->num_rows == 0)
    $cartRepository->insert($user_id, $_GET['id'], $_POST['choose_color'], $_POST['choose_size'], 1);
  header("Location: cart.php");
}

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
  <meta name="author" content="Nghia Minh Luong">
  <meta name="keywords" content="Default Description">
  <meta name="description" content="Default keyword">
  <title>Sky - Product Detail</title>
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
  <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
  <!--WARNING: Respond.js doesn't work if you view the page via file://-->
  <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
<style>
  #imageShoeMini {
    width: 50px;
    height: 50px;
    object-fit: cover;
  }

  #shoeImageZoom {
    width: 620px;
    height: 620px;
    object-fit: cover;
  }

  #imageShoe2 {
    max-width: 100%;
    max-height: 310px;
    min-height: 310px;
    object-fit: cover;
  }

  .ps-shoe .ps-shoe__price {
    position: unset !important;
  }
</style>

<body class="ps-loading">
  <div class="header--sidebar"></div>
  <header class="header">
    <div class="header__top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
            <p>460 West 34th Street, 15th floor, New York - Hotline: 804-377-3580 - 804-399-3580</p>
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
            <li class="menu-item menu-item-has-children dropdown"><a href="index.php">Home</a>
            </li>
            <li class="menu-item"><a href="product-listing.php">Product</a></li>
            <li class="menu-item menu-item-has-children dropdown"><a href="blog-list.php">News</a>
            </li>
            <li class="menu-item menu-item-has-children dropdown"><a href="contact-us.php">Contact</a>
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
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
    </div>
  </div>
  <main class="ps-main">
    <div class="test">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
          </div>
        </div>
      </div>
    </div>
    <div class="ps-product--detail pt-60">
      <div class="ps-container">
        <div class="row">
          <div class="col-lg-10 col-md-12 col-lg-offset-1">
            <div class="ps-product__thumbnail">
              <div class="ps-product__preview">
                <div class="ps-product__variants">
                  <?php
                  foreach ($arrLinkImage as $linkImage) {
                  ?>
                    <div class="item"><img id="imageShoeMini" src="<?php echo $linkImage['link_image'] ?>" alt=""></div>
                  <?php
                  }
                  ?>
                </div>
              </div>
              <div class="ps-product__image">
                <?php
                foreach ($arrLinkImage as $linkImage) {
                ?>
                  <div class="item"><img id="shoeImageZoom" class="zoom" src="<?php echo $linkImage['link_image'] ?>" alt="" data-zoom-image="<?php echo $linkImage['link_image'] ?>"></div>
                <?php
                }
                ?>
              </div>
            </div>
            <div class="ps-product__thumbnail--mobile">
              <div class="ps-product__main-img"><img src="images/shoe-detail/1.jpg" alt=""></div>
              <div class="ps-product__preview owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false" data-owl-item="3" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on"><img src="images/shoe-detail/1.jpg" alt=""><img src="images/shoe-detail/2.jpg" alt=""><img src="images/shoe-detail/3.jpg" alt=""></div>
            </div>
            <div class="ps-product__info">
              <div class="ps-product__rating">
                <select class="ps-rating">
                  <option value="1">1</option>
                  <option value="1">2</option>
                  <option value="1">3</option>
                  <option value="1">4</option>
                  <option value="1">5</option>
                </select><a href="#">(Read all 8 reviews)</a>
              </div>
              <h1><?php echo $shoe['shoe_name'] ?></h1>
              <p class="ps-product__category"><a href="#"><?php echo $shoe['name'] ?></a></p>
              <h3 class="ps-product__price">
                <?php
                echo ($shoe['price'] - $shoe['price'] * $shoe['sale'] * 0.01);
                ?> VND<del><br><?php echo $shoe['price'] ?> VND</del></h3>
              <div class="ps-product__block ps-product__quickview">
                <h4>QUICK REVIEW</h4>
                <p><?php echo substr($shoe['review'], 0, 100); ?></p>
              </div>
              <form action="" method="POST">
                <div class="ps-product__block ps-product__size">
                  <h4>CHOOSE YOUR COLOR</h4>
                  <select name="choose_color" class="ps-select selectpicker">
                    <?php
                    $arrColor = explode(",", $shoe['color']);
                    foreach ($arrColor as $color) {
                    ?>
                      <option value="<?php echo $color; ?>"><?php echo $color; ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="ps-product__block ps-product__size">
                  <h4>CHOOSE SIZE</h4>
                  <select name="choose_size" class="ps-select selectpicker">
                    <?php
                    $arrSize = explode(",", $shoe['size']);
                    foreach ($arrSize as $size) {
                    ?>
                      <option value="<?php echo $size; ?>"><?php echo $size; ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="ps-product__shopping">
                  <button name="submit_cart" class="ps-btn mb-10">Add to cart<i class="ps-icon-next"></i></button>
                  <div class="ps-product__actions"><a class="mr-10" href="whishlist.php"><i class="ps-icon-heart"></i></a><a href="compare.php"><i class="ps-icon-share"></i></a></div>
                </div>
              </form>

            </div>
            <div class="clearfix"></div>
            <div class="ps-product__content mt-50">
              <ul class="tab-list" role="tablist">
                <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Overview</a></li>
                <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Review</a></li>
              </ul>
            </div>
            <div class="tab-content mb-60">
              <div class="tab-pane active" role="tabpanel" id="tab_01">
                <p><?php echo $shoe['review']; ?></p>
              </div>
              <div class="tab-pane" role="tabpanel" id="tab_02">
                <p class="mb-20">1 review for <strong>Shoes Air Jordan</strong></p>
                <div class="ps-review">
                  <div class="ps-review__thumbnail"><img src="images/user/1.jpg" alt=""></div>
                  <div class="ps-review__content">
                    <header>
                      <select class="ps-rating">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="5">5</option>
                      </select>
                      <p>By<a href=""> Alena Studio</a> - November 25, 2017</p>
                    </header>
                    <p>Soufflé danish gummi bears tart. Pie wafer icing. Gummies jelly beans powder. Chocolate bar pudding macaroon candy canes chocolate apple pie chocolate cake. Sweet caramels sesame snaps halvah bear claw wafer. Sweet roll soufflé muffin topping muffin brownie. Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie.</p>
                  </div>
                </div>
                <form class="ps-product__review" action="_action" method="post">
                  <h4>ADD YOUR REVIEW</h4>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                      <div class="form-group">
                        <label>Name:<span>*</span></label>
                        <input class="form-control" type="text" placeholder="">
                      </div>
                      <div class="form-group">
                        <label>Email:<span>*</span></label>
                        <input class="form-control" type="email" placeholder="">
                      </div>
                      <div class="form-group">
                        <label>Your rating<span></span></label>
                        <select class="ps-rating">
                          <option value="1">1</option>
                          <option value="1">2</option>
                          <option value="1">3</option>
                          <option value="1">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ">
                      <div class="form-group">
                        <label>Your Review:</label>
                        <textarea class="form-control" rows="6"></textarea>
                      </div>
                      <div class="form-group">
                        <button class="ps-btn ps-btn--sm">Submit<i class="ps-icon-next"></i></button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ps-section ps-section--top-sales ps-owl-root pt-40 pb-80">
      <div class="ps-container">
        <div class="ps-section__header mb-50">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
              <h3 class="ps-section__title" data-mask="Related item">- YOU MIGHT ALSO LIKE</h3>
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
                        <p class="ps-shoe__categories"><a href="#"><?php echo $shoe['name'] ?></a></p><span class="ps-shoe__price">
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
    <div class="ps-footer bg--cover" data-background="img\banner\3.jpg">
      <div class="ps-footer__content">
        <div class="ps-container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <aside class="ps-widget--footer ps-widget--info">
                <header><a class="ps-logo" href="index.php"><img src="images/logo-white.png" alt="" style="max-width: 50%;"></a>
                  <h3 class="ps-widget__title">Address Office </h3>
                </header>
                <footer>
                  <p><strong>369/1 đỗ xuân hợp quận 9</strong></p>
                  <p>Email: <a href='mailto:photoandtrick@gmail.com'>photoandtrick@gmail.com</a></p>
                  <p>Phone: 036 5707 345</p>
                  <p>Fax: 036 5707 345</p>
                </footer>
              </aside>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <aside class="ps-widget--footer ps-widget--link">
                <section class="mapbox" data-mapbox>
                  <figure>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.63277465028!2d106.69072621039763!3d10.762759089340939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f16ad86371b%3A0x949d258c9508b1f2!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBWxINuIExhbmcgLSBDxqEgc-G7nyAx!5e0!3m2!1svi!2s!4v1685120958975!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </section>
              </aside>
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
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script>
  <script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
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