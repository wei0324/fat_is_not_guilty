<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>胖不是罪 甜點專賣網</title>
    <?php include("link.php"); ?>
    <link rel="stylesheet" href="css/sidebar.css">
    <script type="text/javascript">
    var xmlHttp;

    function sendRequest($i, $j) {
        if (window.XMLHttpRequest) xmlHttp = new XMLHttpRequest(); //建立XMLHttpRequest物件
        else if (window.ActiveXObject) xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        var url = 'products_ajax.php?page=' + $i + "&category=" + $j;
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
                /*alert('執行錯誤,代碼:' + xmlHttp.status + '\(' + xmlHttp.statusText + '\)');*/
            }
        }
    }
    </script>
</head>

<body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">
    <!-- END nav -->
    <section class="ftco-section bg-light" style="padding-top: 0;" id="">
        <?php include("navbar.php"); ?>
    </section>
    <!-- END section -->
    <section class="bg-light" id="section-news">
        <div class="container" style="padding: 50px">
            <div id="aaa" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#aaa" data-slide-to="0" class="active"></li>
                    <li data-target="#aaa" data-slide-to="1"></li>
                    <li data-target="#aaa" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href=""><img class="d-block w-100" src="images/ad_1.jpg" alt="First slide" height="200px" ></a>
                    </div>
                    <div class="carousel-item">
                        <a href=""><img class="d-block w-100" src="images/ad_2.jpg" alt="Second slide" height="200px" ></a>
                    </div>
                    <div class="carousel-item">
                        <a href=""><img class="d-block w-100" src="images/ad_3.jpg" alt="Third slide" height="200px" ></a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#aaa" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                <a class="carousel-control-next" href="#aaa" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
            </div>
        </div>
    </section>
    <!-- END section -->
    <section class="ftco-section bg-light form-inline" id="section-menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin:auto;width:400px">
                <a class="navbar-brand" href="#">產品分類</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="products.php?category=0#section-menu" id="navbarDropdown" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" onclick="sendRequest(1,0)">
          蛋糕
        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">1</a>
                                <a class="dropdown-item" href="#">2</a>
                                <a class="dropdown-item" href="#">3</a>
                            </div>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="products.php?category=1#section-menu" id="navbarDropdown" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" onclick="sendRequest(1,1)">
          泡芙
        </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">1</a>
                                    <a class="dropdown-item" href="#">2</a>
                                    <a class="dropdown-item" href="#">3</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="products.php?category=2#section-menu" id="navbarDropdown" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" onclick="sendRequest(1,2)">
          其他
        </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">1</a>
                                    <a class="dropdown-item" href="#">2</a>
                                    <a class="dropdown-item" href="#">3</a>
                                </div>
                            </li>
                    </ul>
                </div>
            </nav>
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="false" data-wrap="false">
                        <?php
$link = mysqli_connect('localhost', 'root', 'root123456', 'group_15');
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
if (!$link) {
    echo "連結錯誤代碼: " . mysqli_connect_errno() . "<br>"; //顯示錯誤代碼
    echo "連結錯誤訊息: " . mysqli_connect_error() . "<br>"; //顯示錯誤訊息
    exit();
}
echo "<div  id='products_content'>";
if(isset($_GET['category']))
    $category=$_GET['category'];
else
    $category=0;
if ($result = mysqli_query($link, "SELECT * FROM products where category=".$category)) {
    $total_records = mysqli_num_rows($result);
    $total_page = ceil($total_records / 9);


}
echo "</div></div></div>";

echo "<div style=\"margin: auto\" id=\"myDIV\">
                <nav aria-label=\"Page navigation example\" id='page_nav'>


<ul class=\"pagination\">
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                                    <span aria-hidden=\"true\">&laquo;</span>
                                    <span class=\"sr-only\">Previous</span>
                                </a>
                        </li>";

                        if(!isset($_GET['page']))
                        {
                            echo "<script type=\"text/javascript\">sendRequest(1,".$category.");</script>";

                            echo "<li class=\"page-item active\" data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
        echo 0;
        echo "\"><a class=\"page-link\" href='" . $_SERVER['PHP_SELF'] . "?page=1#section-menu'>1</a></li>";
        for ($i = 2; $i <= $total_page; $i++) {
    {

        echo "<li class=\"page-item\" data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
        echo $i - 1;
        echo "\"><a class=\"page-link\" href='" . $_SERVER['PHP_SELF'] . "?page=$i#section-menu'>$i</a></li>";
        
    }

}
                        }
                        else
                        {


for ($i = 1; $i <= $total_page; $i++) {
    
        if(@$_GET['page']==$i)
            echo "<li class=\"page-item active\" data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
        else
            echo "<li class=\"page-item\" data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
        echo $i - 1;
        echo "\"><a class=\"page-link\" href='" . $_SERVER['PHP_SELF'] . "?page=$i#section-menu'>$i</a></li>";
        
    

}
 }
echo "<li class=\"page-item\">
                            <a class=\"page-link\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                                   <span aria-hidden=\"true\">&raquo;</span>
                                   <span class=\"sr-only\">Next</span>
                               </a>
                        </li>
                    </ul>
    





                </nav>
            </div>";

mysqli_close($link); // 關閉資料庫連結
?>
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
                    <?php
                    if(isset($_GET['category']))
    $category=$_GET['category'];
else
    $category=0;
echo "sendRequest(i-1,".$category.");";
                    ?>

                    location.href = "#section-menu";
                }
            }
        });
        btns[btns.length - 1].addEventListener("click", function() {
            for (var i = btns.length - 3; i > 0; i--) {
                if ($(btns[i]).hasClass("active") == true) {
                    btns[i].className = btns[i].className.replace(" active", "");
                    btns[i + 1].className += " active";
                    <?php
                    if(isset($_GET['category']))
    $category=$_GET['category'];
else
    $category=0;
echo "sendRequest(i+1,".$category.");";
                    ?>
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
                    <?php
                    if(isset($_GET['category']))
    $category=$_GET['category'];
else
    $category=0;
echo "sendRequest(j,".$category.");";
                    ?>
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