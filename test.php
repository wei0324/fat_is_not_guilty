<?php
session_start();
    if (isset($_SESSION['cart'])) {
        $cnt = count($_SESSION['cart']);
    } else {
        $cnt = 0;
    }
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>胖不是罪 甜點專賣網</title>
    <link rel="shortcut icon" href="images/icon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="google" value="notranslate">
    <meta name="viewport" content="initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <!-- styles-->
    <link href="https://dt9jl8a7gc9zr.cloudfront.net/assets/application-da885503914433bedb54117531928d84.css" media="all" rel="stylesheet" />
    <!--<link href="https://dt9jl8a7gc9zr.cloudfront.net/assets/themes/ell-4caeda8c53718486094b6096d2b5b33e.css" media="screen" rel="stylesheet" />-->
    <!-- styles-->

    <style type="text/css">
      .aaa,
      .aaa .bbb {
        -webkit-tap-highlight-color: transparent;
        position: relative;
      }

      .aaa .bbb img {
        display: block;
        width: 100%;
      }

      #gotop {
        position: fixed;
        border-radius: 50px;
        right: 20px;
        bottom: 30px;
        padding: 10px 16px;
        font-size: 25px;
        background: rgba(0, 0, 0, 0.36);
        color: #FAFCFD;
        cursor: pointer;
        z-index: 1000;
      }
    </style>
  </head>

  <body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">
    <div id="gotop">˄</div>
    <section class="bg-dark">
      <div class="container" style="height: 100px">
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
          <div class="container">
            <a class="navbar-brand" href="index.php">胖不是罪</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="oi oi-menu"></span> Menu
                  </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link">首頁</a></li>
                <li class="nav-item"><a href="#section-news" class="nav-link">活動快訊</a></li>
                <li class="nav-item"><a href="#section-menu" class="nav-link">商品專區</a></li>
                <li class="nav-item"><a href="index.php#section-offer" class="nav-link">本日精選</a></li>
                <li class="nav-item"><a href="index.php#section-about" class="nav-link">關於我們</a></li>
                <li class="nav-item"><a href="index.php#section-contact" class="nav-link">連繫我們</a></li>
                <li class="nav-item"><a href="register.php" class="nav-link"><span class="fa fa-user"> </span><span class="menu-words">登入會員</span></a></li>
                <li class="nav-item">
                  <a href="index.php" class="nav-link">
                    <span class="fa fa-shopping-cart"> </span><span class="menu-words">購物車</span>
                    <span class="cart-count ng-binding ng-hide" ng-show="currentCart.getItemCount()>0">
                      <span class="hidden-xs">(</span>0<span class="hidden-xs">)</span>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </section>
    <!-- END nav -->
    <section class="ftco-section bg-light form-inline" id="section-menu">
      <div class="container">
        <div class="container content-controller" ng-controller="ProductsShowController">
          <div class="row">
            <div class="col-md-6">
              <product-variant-gallery item-size="72" item-margin="10" class="ng-scope">
                <!-- ngIf: selectedMedia -->
                <div class="variant-gallery-stage text-center ng-scope" ng-if="selectedMedia" ng-swipe-left="selectNext()" ng-swipe-right="selectPrevious()">
                  <a ng-click="enlargeImage(selectedMedia)">
                    <img id="sl-product-image" class="img-responsive sl-lazy-image inline-block" data-ref-element=".variant-gallery-stage" ng-src="https://shoplineimg.com/5a224d3759d52417b700071b/5adea13610abb99eb500caed/400x.webp?source_format=jpg" src="https://shoplineimg.com/5a224d3759d52417b700071b/5adea13610abb99eb500caed/800x.webp?source_format=jpg">
                  </a>
                </div>
                <!-- end ngIf: selectedMedia -->
                <div class="variant-gallery row" ng-class="{'no-arrow': canSelectPrevious() !== true &amp;&amp; canSelectNext() !== true }">
                  <style type="text/css" class="ng-binding">
                    .variant-gallery-control {
                      line-height: 72px;
                    }

                    .variant-image {
                      width: 72px;
                      height: 72px;
                      margin-right: 10px;
                    }

                    @media screen and (min-width: 769px) {
                      product-variant-gallery.vertical .variant-gallery-stage {
                        padding-right: 77px;
                      }
                      product-variant-gallery.vertical .variant-gallery {
                        right: 72px;
                      }
                    }
                  </style>
                  <div class="variant-gallery-control left disable ng-hide" ng-click="selectPrevious()" ng-class="{ hide: canSelectPrevious() !== true &amp;&amp; canSelectNext() !== true, disable: canSelectPrevious() !== true }" ng-show="medias.length > maxImageContain">
                    <i class="fa fa-caret-left fa-inverse" aria-hidden="true"></i>
                  </div>
                  <div class="variant-gallery-scroll-container">
                    <div class="variant-gallery-slider">
                      <!-- ngRepeat: media in medias -->
                      <div class="variant-image ng-scope selected" ng-class="{ selected: media == selectedMedia }" ng-repeat="media in medias">
                        <a ng-click="selectMedia(media)">
                          <div class="image-container sl-lazy-image" data-resizing-segment="100" ng-style="getThumbnailStyle(media)" style="background-image:url(https://shoplineimg.com/5a224d3759d52417b700071b/5adea13610abb99eb500caed/200x.webp?source_format=jpg);"></div>
                        </a>
                      </div>
                      <!-- end ngRepeat: media in medias -->
                      <div class="variant-image ng-scope" ng-class="{ selected: media == selectedMedia }" ng-repeat="media in medias">
                        <a ng-click="selectMedia(media)">
                          <div class="image-container sl-lazy-image" data-resizing-segment="100" ng-style="getThumbnailStyle(media)" style="background-image:url(https://shoplineimg.com/5a224d3759d52417b700071b/5adea11500fdde703800cc8a/200x.webp?source_format=jpg);"></div>
                        </a>
                      </div>
                      <!-- end ngRepeat: media in medias -->
                    </div>
                  </div>
                  <div class="variant-gallery-control right ng-hide" ng-click="selectNext()" ng-class="{ hide: canSelectPrevious() !== true &amp;&amp; canSelectNext() !== true, disable: canSelectNext() !== true  }" ng-show="medias.length > maxImageContain">
                    <i class="fa fa-caret-right fa-inverse" aria-hidden="true"></i>
                  </div>
                </div>
              </product-variant-gallery>
              <div class="visible-lg visible-md">
              </div>
            </div>
            <div ng-non-bindable="" class="title global-primary dark-primary">
              <h1>初夏桑椹乳酪蛋糕 6吋</h1>
              <div class="Product-promotions">
                <p class="Product-promotions-tag" ng-non-bindable="">
                  全店，會員獨享，消費滿1500元，可享免運費~
                </p>
              </div>
              <div class="global-primary dark-primary price-regular price price-crossed">
                NT$580
              </div>
              <div class="price-sale price">
                NT$520
              </div>
              <hr>
              <h2 id="sec0" class="global-primary dark-primary">商品描述</h2>
              <div ng-non-bindable="" class="global-secondary dark-secondary description-container">
                <p style="margin: 0in; line-height: 20pt; font-family: 微軟正黑體; font-size: 12pt; color: black;"><span lang="en-US" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">#&nbsp;</span>
                  <span lang="zh-TW" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">無奶油</span>
                  <span lang="en-US" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&nbsp;-&nbsp;</span>
                  <span lang="zh-TW" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">蛋糕變得簡單、純淨</span>
                </p>
                <p lang="en-US" style="margin: 0in; line-height: 20pt; font-family: 微軟正黑體; font-size: 12pt; color: black;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&nbsp;</span></p>
                <p style="margin: 0in; line-height: 20pt; font-family: 微軟正黑體; font-size: 12pt; color: black;"><span lang="en-US" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">#&nbsp;</span>
                  <span lang="zh-TW" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">無澱粉</span>
                  <span lang="en-US" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&nbsp;-&nbsp;</span>
                  <span lang="zh-TW" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">蛋糕變得更「輕」</span>
                </p>
                <p style="margin: 0in; line-height: 20pt; font-family: 微軟正黑體; font-size: 10pt; color: black;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><br></span></p>
                <p lang="en-US" style="margin: 0in; line-height: 20pt; font-family: 微軟正黑體; font-size: 12pt; color: black;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">#TATURA乳酪，更純淨</span></p>
                <p lang="en-US" style="margin: 0in; line-height: 20pt; font-family: 微軟正黑體; font-size: 12pt; color: black;">&nbsp;</p>
                <p style="margin: 0in; line-height: 20pt; font-family: 微軟正黑體; font-size: 12pt; color: black;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">#殺菌液蛋，無蛋殼，更安全</span></p>
                <p style="margin: 0in; line-height: 20pt; font-family: 微軟正黑體; font-size: 12pt; color: black;">&nbsp;</p>
                <p style="margin: 0in; line-height: 20pt; font-family: 微軟正黑體; font-size: 12pt; color: black;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">#天然系「日式輕浴蒸烤技術」</span></p>
                <p style="margin: 0in; line-height: 20pt; font-family: 微軟正黑體; font-size: 10pt; color: black;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"></span></p>
                <span lang="en-US" style="font-size: 12pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&nbsp;</span>
                <span lang="en-US" style="font-size: 12pt;">&nbsp;</span>
                </p>
                <p style="text-align: center;"></p>
              </div>
              <div class="action-title global-secondary">數量</div>
              <div class="extra-quantity">
                <label for="quantity" class="sr-only">數量</label>
                <div class="quantity-number input-group " id="quanInput">
                  <span class="add-down add-action input-group-addon"><i class="fa fa-minus"></i></span>
                  <input id="item-quantity" class="form-control item_quantity" type="text" name="quantity" size="2" value="1">
                  <span class="add-up add-action input-group-addon"><i class="fa fa-plus"></i></span>
                </div>
              </div>
              <br>
              <button type="button" class="btn btn-primary">加入購物車</button>
              <button type="button" class="btn btn-danger">馬上購買</button>
              <br>
              <div class="clear"></div>
            </div>
            <span>&nbsp;</span>
          </div>
          <h2 id="sec0" class="global-primary dark-primary">相關產品</h2>
          <div class="row">
            <ul class="related-products boxify-container">
              <li class="boxify-item product-item">
                <a href="/products/5aed7aae4e22a61e09006ab0" ng-click="sendGaProductClick(&quot;5aed7aae4e22a61e09006ab0&quot;, &quot;SET-310&quot;, [], &quot;門市詢問度 No.1  天然乳酪香 濃厚濕潤朱古力  (6吋原味+6吋朱古力)&quot;)">
                  <div class="boxify-image-wrapper">
                    <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(https://shoplineimg.com/5a224d3759d52417b700071b/5aed7ac110abb9c3b00054c0/400x400f.webp?source_format=png)"></div>
                  </div>
                  <div class="info-box" style="">
                    <div class="info-box-inner-wrapper">
                      <div class="title text-primary-color title-container ellipsis" ng-non-bindable="" style="word-wrap: break-word;">
                        門市詢問度 No.1 天然乳酪香 濃厚濕潤朱古力 (6吋原味+6吋朱古力)
                      </div>
                      <!-- <div class="global-primary dark-primary price " ></div>
                      <div class="price-sale"></div> -->
                      <div class="global-primary dark-primary price price-crossed">
                        NT$1,030
                      </div>
                      <div class="price-sale price">
                        NT$920
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <!--li-->
              <li class="boxify-item product-item">
                <a href="/products/5aed746e9a76f0189e000a6f" ng-click="sendGaProductClick(&quot;5aed746e9a76f0189e000a6f&quot;, &quot;SET-178&quot;, [], &quot;線上獨家，老顧客指定款(6吋原味+4吋藍莓)&quot;)">
                  <div class="boxify-image-wrapper">
                    <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(https://shoplineimg.com/5a224d3759d52417b700071b/5aed708000fdde47980058f8/400x400f.webp?source_format=png)"></div>
                  </div>
                  <div class="info-box" style="">
                    <div class="info-box-inner-wrapper">
                      <div class="title text-primary-color title-container ellipsis" ng-non-bindable="" style="word-wrap: break-word;">
                        線上獨家，老顧客指定款(6吋原味+4吋藍莓)
                      </div>
                      <!-- <div class="global-primary dark-primary price " ></div>
                      <div class="price-sale">
                      </div> -->
                      <div class="global-primary dark-primary price price-crossed">
                        NT$870
                      </div>
                      <div class="price-sale price">
                        NT$790
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <!--li-->
              <li class="boxify-item product-item">
                <a href="/products/5aed741a0e64fefaee006394" ng-click="sendGaProductClick(&quot;5aed741a0e64fefaee006394&quot;, &quot;SET-141&quot;, [], &quot;不可錯過的雙重滿足(6吋原味+6吋藍莓)&quot;)">
                  <div class="boxify-image-wrapper">
                    <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(https://shoplineimg.com/5a224d3759d52417b700071b/5aed708000fdde47980058f8/400x400f.webp?source_format=png)"></div>
                  </div>
                  <div class="info-box" style="">
                    <div class="info-box-inner-wrapper">
                      <div class="title text-primary-color title-container ellipsis" ng-non-bindable="" style="word-wrap: break-word;">
                        不可錯過的雙重滿足(6吋原味+6吋藍莓)
                      </div>
                      <!-- <div class="global-primary dark-primary price " ></div>
                      <div class="price-sale">
                      </div> -->
                      <div class="global-primary dark-primary price price-crossed">
                        NT$1,030
                      </div>
                      <div class="price-sale price">
                        NT$920
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <!--li-->
              <li class="boxify-item product-item">
                <a href="/products/5aed6fe100fdde47460061e0" ng-click="sendGaProductClick(&quot;5aed6fe100fdde47460061e0&quot;, &quot;SET-140&quot;, [], &quot;原味與初夏桑椹的天然滋味&quot;)">
                  <div class="boxify-image-wrapper">
                    <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(https://shoplineimg.com/5a224d3759d52417b700071b/5aed6c584e22a6fa77003b60/400x400f.webp?source_format=png)"></div>
                  </div>
                  <div class="info-box" style="">
                    <div class="info-box-inner-wrapper">
                      <div class="title text-primary-color title-container ellipsis" ng-non-bindable="" style="word-wrap: break-word;">
                        原味與初夏桑椹的天然滋味
                      </div>
                      <!-- <div class="global-primary dark-primary price " ></div>
                      <div class="price-sale">
                      </div> -->
                      <div class="global-primary dark-primary price price-crossed">
                        NT$1,030
                      </div>
                      <div class="price-sale price">
                        NT$920
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <!--li-->
              <!--@products.each-->
              <div class="clear"></div>
            </ul>
            <!--boxify-container-->
          </div>
        </div>
        <div class="fb-comments" data-href="test.php" data-numposts="5" data-width=100%></div>
      </div>
    </section>
    <!-- END section -->
    <div id="fb-root"></div>
    <script>
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v3.0';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md ftco-animate">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">The Shop</h2>
                  <ul class="list-unstyled">
                    <li><a href="#section-about" class="py-2 d-block">About Us</a></li>
                    <li><a href="#section-news" class="py-2 d-block">Events</a></li>
                    <li><a href="#section-contact" class="py-2 d-block">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md ftco-animate">
                <div class="ftco-footer-widget mb-4">
                  <!--<h2 class="ftco-heading-2">Communities</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">Support</a></li>
                                    <li><a href="#" class="py-2 d-block">Sharing is Caring</a></li>
                                    <li><a href="#" class="py-2 d-block">Better Web</a></li>
                                    <li><a href="#" class="py-2 d-block">Good Template</a></li>
                                </ul>-->
                </div>
              </div>
              <div class="col-md ftco-animate">
                <div class="ftco-footer-widget mb-4">
                  <!--<h2 class="ftco-heading-2">Useful links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">Bootstrap 4</a></li>
                                    <li><a href="#" class="py-2 d-block">jQuery</a></li>
                                    <li><a href="#" class="py-2 d-block">HTML5</a></li>
                                    <li><a href="#" class="py-2 d-block">Sass</a></li>
                                </ul>-->
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="facebook.html"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="instagram.html"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md text-left">
          </div>
        </div>
      </div>
    </footer>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        var header = document.getElementById("myDIV");
        var btns = header.getElementsByClassName("page-item");

        btns[0].addEventListener("click", function() {
          for (var i = 2; i < 4; i++) {
            if ($(btns[i]).hasClass("active") == true) {
              btns[i].className = btns[i].className.replace(" active", "");
              btns[i - 1].className += " active";
              location.href = "#section-offer";
            }
          }
        });
        btns[4].addEventListener("click", function() {
          for (var i = 2; i > 0; i--) {
            if ($(btns[i]).hasClass("active") == true) {
              btns[i].className = btns[i].className.replace(" active", "");
              btns[i + 1].className += " active";
              location.href = "#section-menu";
            }
          }
        });
      });
    </script>
    <script>
      // Add active class to the current button (highlight it)
      var header = document.getElementById("myDIV");
      var btns = header.getElementsByClassName("page-item");

      for (var i = 1; i < 4; i++) {
        btns[i].addEventListener("click", function() {
          btns[1].className = btns[1].className.replace(" active", "");
          btns[2].className = btns[2].className.replace(" active", "");
          btns[3].className = btns[3].className.replace(" active", "");
          this.className += " active";
          location.href = "#section-menu";
        });
      }
    </script>
    <script type="text/javascript">
      $("#gotop").click(function() {
        jQuery("html,body").animate({
          scrollTop: 0
        }, 500);
      });
      $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
          $('#gotop').fadeIn("fast");
        } else {
          $('#gotop').stop().fadeOut("fast");
        }
      });
    </script>
  </body>

  </html>
