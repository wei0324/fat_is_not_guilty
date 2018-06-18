
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>胖不是罪 甜點專賣網</title>
    <?php include("link.php"); ?>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    <!--additional method - for checkbox .. ,require_from_group method ...-->
    <script src="//jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <!--中文錯誤訊息-->
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js "></script>
    <script src="js/check.js"></script>
    <style type="text/css">
    .error {
        color: red !important;
        font-weight: normal;
        font-family: "微軟正黑體";
        display: inline;
        padding: 1px;
    }
    </style>
    <style type="text/css">
    .ftco-navbar-light {
        background: transparent !important;
        position: absolute;
    }
    </style>
    <script type="text/javascript">
    var xmlHttp;

    function sendRequest() {
        if (window.XMLHttpRequest) xmlHttp = new XMLHttpRequest(); //建立XMLHttpRequest物件
        else if (window.ActiveXObject) xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        var url = 'register.php?account=' + document.form1.account.value;
        xmlHttp.open('GET', url, true); //建立XMLHttpRequest連線要求
        xmlHttp.onreadystatechange = catchResult; //指定處理程式
        xmlHttp.send(null);
    }

    function catchResult() {
        if (xmlHttp.readyState == 4 || xmlHttp.readyState == 'complete') { //取得XMLHttpRequest物件的狀態值,4--動作完成
            if (xmlHttp.status == 200) { //執行狀態：200：OK 、403：Forbidden 、404：Not Found.......
                var str = xmlHttp.responseText; //接收以文字方式傳回的執行結果
                if (str == '1')
                {
                     document.getElementById('show_msg').innerHTML = '此帳號已存在!';
                     document.getElementById('same').value="";
                }
                else
                {
                    document.getElementById('show_msg').innerHTML = '';
                    document.getElementById('same').value="0";
                }
            } else {
                alert('執行錯誤,代碼:' + xmlHttp.status + '\(' + xmlHttp.statusText + '\)');
            }
        }
    }
    </script>
</head>

<body data-spy="scroll" data-target="#ftco-navbar" data-offset="200" onload="a();">
    <?php include("navbar.php"); ?>
    <!-- END nav -->
    <section class="ftco-cover" style="background-image: url(images/bg_3.jpg);" id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center ftco-vh-100">
                <div class="col-md-12">
                    <h1 class="ftco-heading ftco-animate mb-3">胖不是罪</h1>
                    <h2 class="h5 ftco-subheading mb-5 ftco-animate">精緻、用心、美味 甜點專賣網</h2>
                    <?php if (!isset($_SESSION['account'])): ?>
                      <p><a href="" target="_blank" class="btn btn-outline-white btn-lg ftco-animate" data-toggle="modal" data-target="#login">會員登入</a> <a href="" target="_blank" class="btn btn-outline-white btn-lg ftco-animate" data-toggle="modal" data-target="#Create">加入會員</a></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->
    <section class="ftco-section bg-light" id="section-offer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5 ftco-animate">
                    <h4 class="ftco-sub-title">Featured Today</h4>
                    <h2 class="display-4"><!--Offers &amp; -->本日精選</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <p class="lead">為您挑選「最適合今天」的精緻美味甜點</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel ftco-owl">
                        <?php
                            $link = mysqli_connect('localhost', 'root', 'root123456', 'group_15');
                            mysqli_query($link, 'SET CHARACTER SET utf8');
                            mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
                            if (!$link) {
                                echo "連結錯誤代碼: " . mysqli_connect_errno() . "<br>"; //顯示錯誤代碼
                                echo "連結錯誤訊息: " . mysqli_connect_error() . "<br>"; //顯示錯誤訊息
                                exit();
                            }
                            $result = mysqli_query($link, "SELECT * FROM products");
                                for ($i=0; $i < 6 ; $i++) {
                                    echo "<div class=\"item\">";



                                            $row = mysqli_fetch_assoc($result);
                                            if(!is_null($row))
                                            {
                                                echo "<div class=\"media d-block mb-4 text-center ftco-media ftco-animate border-0\">";
                                                echo "<img class=\"mr-3\" src=\"images/products/".$row["image_name"]."\" height=\"400px\">";
                                                echo "<div class=\"media-body p-4\">";
                                                echo "<h5 class=\"text-primary\">$".$row["price"]."</h5>";
                                                echo "<h5 class=\"mt-0 h4\">".$row["name"]."</h5>";
                                                if(mb_strwidth( $row["description"], "utf-8")>150)
                {
                    $description=mb_strimwidth( $row["description"],0,150)."......";

                }
                else
                {   
                    $temp="";
                    if(mb_strlen( $row["description"], "utf-8")<150)
                        for ($k=0; $k < 150-mb_strwidth( $row["description"], "utf-8") ; $k++) { 
                            $temp=$temp."&nbsp;";
                        }
                    $description=$row["description"]."......".$temp;
                }
                                                echo "<p class=\"mb-4\">".$description."</p>";
                                                echo "<p class=\"mb-0\"><a href=\"products_seperate.php?id=".$row["id"]."\" class=\"btn btn-primary btn-sm\">馬上訂購</a> ";
                                                echo "<button onclick=\"cart(1,".$row["id"].")\" class=\"btn btn-primary btn-sm p".$row["id"]."\">加入購物車</button></p>";

                                                echo "</div>";
                                                echo "</div>";
                                            }

                                    echo "</div>";
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->
    <section class="ftco-section" id="section-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5 ftco-animate">
                    <h4 class="ftco-sub-title">products</h4>
                    <h2 class="display-4"><a href="products.php"  style="color: black">商品專區</a></h2>
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <p class="lead">本店提供各類甜點，無論是蛋糕、鬆餅、或是小甜食，所有您想吃的都在這裡。
                                <br/>保證能滿足您挑剔的味蕾。</p>
                        </div>
                    </div>
                    <a href="products.php">查看更多 More...</a>
                </div>
                <div class="col-md-12 text-center">
                    <ul class="nav ftco-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
                        <li class="nav-item ftco-animate">
                            <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">蛋糕</a>
                        </li>
                        <li class="nav-item ftco-animate">
                            <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">泡芙</a>
                        </li>
                        <li class="nav-item ftco-animate">
                            <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">鬆餅</a>
                        </li>
                    </ul>
                    <div class="tab-content text-left">
                        <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                            <div class="row">
                                <?php

$link = mysqli_connect('localhost', 'root', 'root123456', 'group_15');
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
if (!$link) {
    echo "連結錯誤代碼: " . mysqli_connect_errno() . "<br>"; //顯示錯誤代碼
    echo "連結錯誤訊息: " . mysqli_connect_error() . "<br>"; //顯示錯誤訊息
    exit();
}
$result = mysqli_query($link, "SELECT * FROM products");
                                for ($i=0; $i < 2 ; $i++) {
                                    echo "<div class=\"col-md-6 ftco-animate\">";


                                        for ($j=0; $j < 3 ; $j++) {
                                            $row = mysqli_fetch_assoc($result);
                                            if(!is_null($row))
                                            {
                                                echo "<div class=\"media menu-item\">";
                                                echo "<img class=\"mr-3\" src=\"images/products/".$row["image_name"]."\" class=\"img-fluid\">";
                                                echo "<div class=\"media-body\">";
                                                echo "<h5 class=\"mt-0\">".$row["name"]."</h5>";
                                                if(mb_strwidth( $row["description"], "utf-8")>150)
                {
                    $description=mb_strimwidth( $row["description"],0,150)."......";

                }
                else
                {   
                    $temp="";
                    if(mb_strlen( $row["description"], "utf-8")<150)
                        for ($k=0; $k < 150-mb_strwidth( $row["description"], "utf-8") ; $k++) { 
                            $temp=$temp."&nbsp;";
                        }
                    $description=$row["description"]."......".$temp;
                }

                                                echo "<p>".$description."</p>";
                                                echo "<h6 class=\"text-primary menu-price\">$".$row["price"]."</h6>";
                                                echo "<span class=\"mb-0\"><a href=\"products_seperate.php?id=".$row["id"]."\" class=\"btn btn-primary btn-sm\">馬上訂購</a> ";
                                                echo "<button onclick=\"cart(1,".$row["id"].")\" class=\"btn btn-primary btn-sm p".$row["id"]."\">加入購物車</button></p>";
                                                echo "</div>";
                                                echo "</div>";
                                            }
                                    }
                                    echo "</div>";
                                }


?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                            <div class="row">
                                <?php

$link = mysqli_connect('localhost', 'root', 'root123456', 'group_15');
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
if (!$link) {
    echo "連結錯誤代碼: " . mysqli_connect_errno() . "<br>"; //顯示錯誤代碼
    echo "連結錯誤訊息: " . mysqli_connect_error() . "<br>"; //顯示錯誤訊息
    exit();
}
$result = mysqli_query($link, "SELECT * FROM products");
                                for ($i=0; $i < 2 ; $i++) {
                                    echo "<div class=\"col-md-6 ftco-animate\">";


                                        for ($j=0; $j < 3 ; $j++) {
                                            $row = mysqli_fetch_assoc($result);
                                            if(!is_null($row))
                                            {
                                                echo "<div class=\"media menu-item\">";
                                                echo "<img class=\"mr-3\" src=\"images/products/".$row["image_name"]."\" class=\"img-fluid\">";
                                                echo "<div class=\"media-body\">";
                                                echo "<h5 class=\"mt-0\">".$row["name"]."</h5>";
                                                echo "<p>".$row["description"]."</p>";
                                                echo "<h6 class=\"text-primary menu-price\">$".$row["price"]."</h6>";
                                                echo "<span class=\"mb-0\"><a href=\"products_seperate.php?id=".$row["id"]."\" class=\"btn btn-primary btn-sm\">馬上訂購</a> ";
                                                echo "<button onclick=\"cart(1,".$row["id"].")\" class=\"btn btn-primary btn-sm p".$row["id"]."\">加入購物車</button></p>";
                                                echo "</div>";
                                                echo "</div>";
                                            }
                                    }
                                    echo "</div>";
                                }


?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                            <div class="row">
                                <?php

$link = mysqli_connect('localhost', 'root', 'root123456', 'group_15');
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
if (!$link) {
    echo "連結錯誤代碼: " . mysqli_connect_errno() . "<br>"; //顯示錯誤代碼
    echo "連結錯誤訊息: " . mysqli_connect_error() . "<br>"; //顯示錯誤訊息
    exit();
}
$result = mysqli_query($link, "SELECT * FROM products");
                                for ($i=0; $i < 2 ; $i++) {
                                    echo "<div class=\"col-md-6 ftco-animate\">";


                                        for ($j=0; $j < 3 ; $j++) {
                                            $row = mysqli_fetch_assoc($result);
                                            if(!is_null($row))
                                            {
                                                echo "<div class=\"media menu-item\">";
                                                echo "<img class=\"mr-3\" src=\"images/products/".$row["image_name"]."\" class=\"img-fluid\">";
                                                echo "<div class=\"media-body\">";
                                                echo "<h5 class=\"mt-0\">".$row["name"]."</h5>";
                                                echo "<p>".$row["description"]."</p>";
                                                echo "<h6 class=\"text-primary menu-price\">$".$row["price"]."</h6>";
                                                echo "<span class=\"mb-0\"><a href=\"products_seperate.php?id=".$row["id"]."\" class=\"btn btn-primary btn-sm\">馬上訂購</a> ";
                                                echo "<button onclick=\"cart(1,".$row["id"].")\" class=\"btn btn-primary btn-sm p".$row["id"]."\">加入購物車</button></p>";
                                                echo "</div>";
                                                echo "</div>";
                                            }
                                    }
                                    echo "</div>";
                                }


?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="text-primary" style="text-align: right"><a href="products.php">查看更多 More...</a></h3>
        </div>
    </section>
    <!-- END section -->
    <section class="ftco-section bg-light" id="section-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5 ftco-animate">
                    <h4 class="ftco-sub-title">news & events</h4>
                    <h2 class="display-4" style="margin-bottom: 50px"><!--News &amp; -->活動快訊</h2>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href=""><img class="d-block w-100" src="images/ad_1.jpg" alt="First slide" height="289px" width=""></a>
                            </div>
                            <div class="carousel-item">
                                <a href=""><img class="d-block w-100" src="images/ad_2.jpg" alt="Second slide" height="289px" width="1110px"></a>
                            </div>
                            <div class="carousel-item">
                                <a href=""><img class="d-block w-100" src="images/ad_3.jpg" alt="Third slide" height="289px" width="1110px"></a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->
    <section class="ftco-section" id="section-about">
        <div class="container">
            <div class="row">
                <div class="col-md-5 ftco-animate mb-5">
                    <h4 class="ftco-sub-title">Our Story</h4>
                    <h2 class="ftco-primary-title display-4">Welcome</h2>
                    <p>甜食，可以是一種享受、一種信仰，更可以是一種態度。</p>
                    <p class="mb-4">吃吧！盡情的吃吧！減肥這種事就留給明天的自己，一生只有一次，何不好好享受當下呢？</p>
                    <p><a href="#" class="btn btn-secondary btn-lg">Our Story</a></p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 ftco-animate img" data-animate-effect="fadeInRight">
                    <img src="images/about_img_1.jpg" height="500px">
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->
    <section class="ftco-section bg-light" id="section-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5 ftco-animate">
                    <h4 class="ftco-sub-title">Contact Us</h4>
                    <h2 class="display-4">聯繫我們</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <p class="lead">本店致力於提供客戶最滿意的服務。
                                <br/>若有任何的問題，還望您不吝指教。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-5 ftco-animate">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="姓名 (Enter your name)">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="信箱 (Enter your email)">
                        </div>
                        <div class="form-group">
                            <label for="message" class="sr-only">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="內容 (Write your message)"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-lg" value="傳送訊息">
                        </div>
                    </form>
<?php
$link = mysqli_connect("localhost","root","root123456","group_15")
or die("無法開啟MySQL資料庫連結!<br>");
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

if (isset($_POST['name']))
{
  $sql="insert into message (name,email,message) values ('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['message']."')";

  if ( $result = mysqli_query($link, $sql) ) // 送出查詢的SQL指令
    $msg= "<span style='color:#0000FF'>資料新增成功!<br>影響記錄數: ". mysqli_affected_rows($link) . "筆</span>";
  else
    $msg= "<span style='color:#FF0000'>資料新增失敗！<br>錯誤代碼：" . mysqli_errno($link) . "<br>錯誤訊息：" .mysqli_error($link) ."</span>";

  echo $msg;
}
mysqli_close($link); // 關閉資料庫連結

?>
                </div>
            </div>
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
      <?php include("login&sign_up(modal.php"); ?>
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
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
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
