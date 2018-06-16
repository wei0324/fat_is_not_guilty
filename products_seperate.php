<?php
  session_start();
$link = mysqli_connect('localhost', 'root', 'root123456', 'group_15');
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
if (!$link) {
    echo "連結錯誤代碼: " . mysqli_connect_errno() . "<br>"; //顯示錯誤代碼
    echo "連結錯誤訊息: " . mysqli_connect_error() . "<br>"; //顯示錯誤訊息
    exit();
}

$sql="SELECT * FROM products where id=".$_GET['id'];
$result = mysqli_query($link, $sql);
if ( $result ) {
    $row = mysqli_fetch_assoc($result);
    if (!$row) {
        header("Location:products.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>胖不是罪 甜點專賣網</title>
    <link rel="shortcut icon" href="images/icon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <link rel="stylesheet" href="css/products_seperate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript">
    var xmlHttp;

    function sendRequest($i) {
        if (window.XMLHttpRequest) xmlHttp = new XMLHttpRequest(); //建立XMLHttpRequest物件
        else if (window.ActiveXObject) xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        var url = 'products_ajax.php?page=' + $i;
        xmlHttp.open('GET', url, true); //建立XMLHttpRequest連線要求
        xmlHttp.onreadystatechange = catchResult; //指定處理程式
        xmlHttp.send(null);
    }

    function catchResult() {
        if (xmlHttp.readyState == 4 || xmlHttp.readyState == 'complete') { //取得XMLHttpRequest物件的狀態值,4--動作完成
            if (xmlHttp.status == 200) { //執行狀態：200：OK 、403：Forbidden 、404：Not Found.......
                var str = xmlHttp.responseText; //接收以文字方式傳回的執行結果
                document.getElementById('products_content').innerHTML = str;
            } else {
                alert('執行錯誤,代碼:' + xmlHttp.status + '\(' + xmlHttp.statusText + '\)');
            }
        }
    }
    </script>
    <style type="text/css">
    .ftco-navbar-light {
        top: 0px;
        position: absolute;
    }
    /*@media (min-width: 961px) {

        #temp_section{
            height:100px;

    }
    }
    @media (max-width: 309px) {

        #temp_section{
            height:80px;

    }
    }*/

    s
    </style>
    <script type="text/javascript">
    function add() {
        document.getElementById("item-quantity").value++;
    }

    function minus() {
        if (document.getElementById("item-quantity").value > 1) {
            document.getElementById("item-quantity").value--;
        }

    }
    </script>
</head>

<body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">
    <!-- END nav -->
    <section class="ftco-section bg-light" style="padding: 5%;" id="">
        <?php include("navbar.php"); ?>
    </section>
    <!-- END section -->
    <section class="ftco-section bg-light form-inline products_inner" id="">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <product-variant-gallery class="">
                        <!-- ngIf: selectedMedia -->
                        <div class="variant-gallery-stage text-center ">
                            <!--!!!!!!!!!-->
                            <a><img id="sl-product-image" class="img-responsive sl-lazy-image inline-block"
                                <?php

$link = mysqli_connect('localhost', 'root', 'root123456', 'group_15');
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
if (!$link) {
    echo "連結錯誤代碼: " . mysqli_connect_errno() . "<br>"; //顯示錯誤代碼
    echo "連結錯誤訊息: " . mysqli_connect_error() . "<br>"; //顯示錯誤訊息
    exit();
}
$sql="SELECT * FROM products where id=".$_GET['id'];
if ( $result = mysqli_query($link, $sql) ) {
$row = mysqli_fetch_assoc($result);
echo "src=\"images/products/".$row["image_name"]."\"";
}


?>> </a>
                        </div>
                        <!-- end ngIf: selectedMedia -->

                    </product-variant-gallery>
                    <div class="visible-lg visible-md">
                    </div>
                </div>
                <div class="title global-primary dark-primary col-md-6">
                    <h1><?php

$link = mysqli_connect('localhost', 'root', 'root123456', 'group_15');
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
if (!$link) {
    echo "連結錯誤代碼: " . mysqli_connect_errno() . "<br>"; //顯示錯誤代碼
    echo "連結錯誤訊息: " . mysqli_connect_error() . "<br>"; //顯示錯誤訊息
    exit();
}
$sql="SELECT * FROM products where id=".$_GET['id'];
if ( $result = mysqli_query($link, $sql) ) {
$row = mysqli_fetch_assoc($result);
echo $row["name"];
}


?></h1>
                    <div class="Product-promotions">
                        <p class="Product-promotions-tag" ng-non-bindable="">
                            全店，會員獨享，消費滿1500元，可享免運費~
                        </p>
                    </div>
                    <div class="price-sale price">
                        NT$
                        <?php

$link = mysqli_connect('localhost', 'root', 'root123456', 'group_15');
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
if (!$link) {
    echo "連結錯誤代碼: " . mysqli_connect_errno() . "<br>"; //顯示錯誤代碼
    echo "連結錯誤訊息: " . mysqli_connect_error() . "<br>"; //顯示錯誤訊息
    exit();
}
$sql="SELECT * FROM products where id=".$_GET['id'];
if ( $result = mysqli_query($link, $sql) ) {
$row = mysqli_fetch_assoc($result);
echo $row["price"];
}


?>
                    </div>
                    <hr>
                    <h2 id="sec0" class="global-primary dark-primary">商品描述</h2>
                    <div ng-non-bindable="" class="global-secondary dark-secondary description-container p_style">
                        <?php

$link = mysqli_connect('localhost', 'root', 'root123456', 'group_15');
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
if (!$link) {
    echo "連結錯誤代碼: " . mysqli_connect_errno() . "<br>"; //顯示錯誤代碼
    echo "連結錯誤訊息: " . mysqli_connect_error() . "<br>"; //顯示錯誤訊息
    exit();
}

$sql="SELECT * FROM products where id=".$_GET['id'];
if ( $result = mysqli_query($link, $sql) ) {
    $row = mysqli_fetch_assoc($result);
    echo nl2br($row["description"]);
}


?>
                            <!--<p class="p_style"><span lang="en-US" class="span_style">#&nbsp;</span>
                            <span lang="zh-TW" class="span_style">無奶油</span>
                            <span lang="en-US" class="span_style">&nbsp;-&nbsp;</span>
                            <span lang="zh-TW" class="span_style">蛋糕變得簡單、純淨</span>
                        </p>
                        <p lang="en-US" class="p_style"><span class="span_style">&nbsp;</span></p>
                        <p class="p_style"><span lang="en-US" class="span_style">#&nbsp;</span>
                            <span lang="zh-TW" class="span_style">無澱粉</span>
                            <span lang="en-US" class="span_style">&nbsp;-&nbsp;</span>
                            <span lang="zh-TW" class="span_style">蛋糕變得更「輕」</span>
                        </p>
                        <p style="margin: 0in; line-height: 20pt; font-family: 微軟正黑體; font-size: 10pt; color: black;"><span class="span_style"><br></span></p>
                        <p lang="en-US" class="p_style"><span class="span_style">#TATURA乳酪，更純淨</span></p>
                        <p lang="en-US" class="p_style">&nbsp;</p>
                        <p class="p_style"><span class="span_style">#殺菌液蛋，無蛋殼，更安全</span></p>
                        <p class="p_style">&nbsp;</p>
                        <p class="p_style"><span class="span_style">#天然系「日式輕浴蒸烤技術」</span></p>
                        <p style="margin: 0in; line-height: 20pt; font-family: 微軟正黑體; font-size: 10pt; color: black;"><span class="span_style"></span></p>
                        <span lang="en-US" style="font-size: 12pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&nbsp;</span>
                        <span lang="en-US" style="font-size: 12pt;">&nbsp;</span>
                        </p>
                        <p style="text-align: center;"></p>-->
                    </div>
                    <hr>
                    <h3>數量</h3>
                    <div class="extra-quantity">
                        <label for="quantity" class="sr-only">數量</label>
                        <div class="quantity-number input-group " id="quanInput">
                            <button class="add-down add-action input-group-addon" onclick="minus()" style="cursor:pointer"><i class="fa fa-minus"></i></button>
                            <input id="item-quantity" class="form-control item_quantity" type="text" name="quantity" size="2" value="1" disabled="disabled">
                            <button class="add-up add-action input-group-addon" onclick="add()" style="cursor:pointer"><i class="fa fa-plus"></i></button>
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
            <hr>
            <h2 id="sec0" class="global-primary dark-primary">相關產品</h2>
            <div class="row">
                <ul class="related-products boxify-container">
                    <li class="boxify-item product-item">
                        <a href="/products/5aed7aae4e22a61e09006ab0">
                            <div class="boxify-image-wrapper">
                                <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(images/products/12.jpg)"></div>
                            </div>
                            <div class="info-box" style="">
                                <div class="info-box-inner-wrapper">
                                    <div class="title text-primary-color title-container ellipsis products_inner_a" style="word-wrap: break-word;">
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
                        <a href="/products/5aed746e9a76f0189e000a6f">
                            <div class="boxify-image-wrapper">
                                <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(images/products/13.jpg)"></div>
                            </div>
                            <div class="info-box" style="">
                                <div class="info-box-inner-wrapper">
                                    <div class="title text-primary-color title-container ellipsis products_inner_a" style="word-wrap: break-word;">
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
                        <a href="/products/5aed741a0e64fefaee006394">
                            <div class="boxify-image-wrapper">
                                <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(images/products/13.jpg)"></div>
                            </div>
                            <div class="info-box" style="">
                                <div class="info-box-inner-wrapper">
                                    <div class="title text-primary-color title-container ellipsis products_inner_a" style="word-wrap: break-word;">
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
                        <a href="/products/5aed6fe100fdde47460061e0">
                            <div class="boxify-image-wrapper">
                                <div class="boxify-image center-contain sl-lazy-image" style="background-image:url(images/products/14.jpg)"></div>
                            </div>
                            <div class="info-box" style="">
                                <div class="info-box-inner-wrapper">
                                    <div class="title text-primary-color title-container ellipsis products_inner_a" style="word-wrap: break-word;">
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
            <div class="fb-comments" data-href="test.php" data-numposts="5" data-width=100%></div>
        </div>
    </section>
    <!-- END section -->
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
            for (var i = 2; i < btns.length - 1; i++) {
                if ($(btns[i]).hasClass("active") == true) {
                    btns[i].className = btns[i].className.replace(" active", "");
                    btns[i - 1].className += " active";
                    sendRequest(i - 1);
                    location.href = "#section-menu";
                }
            }
        });
        btns[btns.length - 1].addEventListener("click", function() {
            for (var i = btns.length - 3; i > 0; i--) {
                if ($(btns[i]).hasClass("active") == true) {
                    btns[i].className = btns[i].className.replace(" active", "");
                    btns[i + 1].className += " active";
                    sendRequest(i + 1);
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

    for (var i = 1; i < btns.length - 1; i++) {
        btns[i].addEventListener("click", function() {
            for (var j = 1; j < btns.length - 1; j++) {
                if ($(btns[j]).hasClass("active") == true) {
                    btns[j].className = btns[j].className.replace(" active", "");
                }
            }
            this.className += " active";
            for (var j = 1; j < btns.length - 1; j++) {
                if ($(btns[j]).hasClass("active") == true) {
                    sendRequest(j);
                    location.href = "#section-menu";
                }
            }
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
