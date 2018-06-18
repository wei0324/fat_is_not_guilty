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
if(!isset($_GET['id']))
    header("Location:products.php");
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
    <?php include("link.php"); ?>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    <!--additional method - for checkbox .. ,require_from_group method ...-->
    <script src="//jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <!--中文錯誤訊息-->
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js "></script>
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/products_seperate.css">
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
    function add() {
        document.getElementById("item-quantity").value++;
    }

    function minus() {
        if (document.getElementById("item-quantity").value > 1) {
            document.getElementById("item-quantity").value--;
        }

    }
    </script>

    <link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
</head>

<body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">
    <!-- END nav -->
    <section class="ftco-section bg-light" style="padding-top: 0;" id="">
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

                    </div>
                    <hr>
                    <h3>數量</h3>
                    <div class="extra-quantity">
                        <label for="quantity" class="sr-only">數量</label>
                        <div class="quantity-number input-group " id="quanInput">
                            <button class="add-down add-action input-group-addon" onclick="minus()" style="cursor:pointer"><i class="fa fa-minus"></i></button>
                            <input id="item-quantity" class="form-control item_quantity" type="text" name="quantity" size="2" value="1" min="1" disabled="disabled" required>
                            <button class="add-up add-action input-group-addon" onclick="add()" style="cursor:pointer"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                    <br>
                    <?php echo "<button onclick=\"cart(1,".$row["id"].")\" class=\"btn btn-primary p".$row["id"]."\">加入購物車</button>";?>
                    <button type="button" class="btn btn-danger">馬上購買</button>
                    <br>
                    <div class="clear"></div>
                </div>
                <span>&nbsp;</span>
            </div>
            <hr>
            <h2 id="sec0" class="global-primary dark-primary">相關產品</h2>
            <div class="row">
                <ul class="related-products boxify-container" style="width: 100%">
                    <?php
                    $result = mysqli_query($link, "SELECT * FROM products where id=".$_GET['id']);
                    $row = mysqli_fetch_assoc($result);
                    $category=$row["category"];
                    $result = mysqli_query($link, "SELECT * FROM products where category=".$category);
                    for($i=0;$i<4;$i++)
                    {
                        $row = mysqli_fetch_assoc($result);
                        if(!is_null($row))
                        {


                        echo "<li class=\"boxify-item product-item\"><a href=\"products_seperate.php?id=".$row["id"]."\"><div class=\"boxify-image-wrapper\"><div class=\"boxify-image center-contain sl-lazy-image\" style=\"background-image:url(images/products/".$row["image_name"].")\"></div></div><div class=\"info-box\"><div class=\"info-box-inner-wrapper\"><div class=\"info-box-inner-wrapper\"><div class=\"title text-primary-color title-container ellipsis products_inner_a\" style=\"word-wrap: break-word;\">".$row["name"]."</div><div class=\"global-primary dark-primary price price-crossed\">NT$".($row["price"]+100)."</div><div class=\"price-sale price\">NT$".$row["price"]."</div></div></div></a></li>";
                        }
                    }
                    
                    ?>
                    
                        
                            
                              
                            
                    
                    <!--li-->

                    <!--li-->
                    
                    <!--li-->
                    
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
        <section class="ftco-section bg-light" id="section-contact" style="padding-top:0px">
            <h2 class="display-5" style="text-align: center;">留言板</h2>
        <div class="container">
            <?php include 'board.php';?>
            <div class="row">
                <div class="col-md mb-5 ftco-animate">

                    <form action="" method="post" onsubmit="return check_login(); " id="board" name="board">
                        <div class="form-group">
                            <label for="accountConnect" class="sr-only">Account</label>
                            <input type="text" class="form-control" id="accountConnect" name="accountConnect" placeholder="姓名 (Enter your name)" readonly="readonly">
                            <?php
                            if (!isset($_SESSION['account']))
{

    echo "<script>document.getElementById(\"accountConnect\").value=\"欲留言請先登入!!\";document.getElementById('accountConnect').style.cssText = 'color: red !important';</script>";
}
else
{
    echo "<script>document.getElementById(\"accountConnect\").value=\"".$_SESSION['account']."\";document.getElementById('accountConnect').style.color=null;</script>";
}
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="boardContent" class="sr-only">content</label>
                            <textarea name="boardContent" id="boardContent" cols="30" rows="10" class="form-control" placeholder="內容 (Write your content)" required></textarea>
                        </div>
                        <div class="form-group">


                            <input type="submit" class="btn btn-primary btn-lg" value="傳送訊息" >
                        </div>
                    </form>
<?php
$link = mysqli_connect("localhost","root","root123456","group_15")
or die("無法開啟MySQL資料庫連結!<br>");
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

if (isset($_POST['account']))
{
  $sql="insert into comment (productID,account,content,time) values ('". $_GET['id'] . "','" . $_POST['accountConnect'] . "','" . $_POST['boardContent']."',NOW())";

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
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>
    <script src="js/comment_board.js"></script>
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
        function sendRequest($page) {

        $.ajax({
            url: 'comment_board_ajax.php',
            data: {
                productID : <?php echo $_GET['id']; ?>
            },
            type: 'POST',
            dataType: "json",
            success: function(Jdata) {
                $content="";
                for($i=($page-1)*5;$i<($page-1)*5+5;$i++)
                {
                    $content = $content+"<tr><td>"+Jdata.data[$i][0]+"</td><td>"+Jdata.data[$i][1]+"</td><td>"+Jdata.data[$i][2]+"</td></tr>";
                    $("#comment_content").html($content);
                }


            },
            error: function(xhr, ajaxOptions, thrownError) {}
        });
    }
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        var header = document.getElementById("page");
        var btns = header.getElementsByClassName("page-item");

        btns[0].addEventListener("click", function() {
            for (var i = 2; i < btns.length - 1; i++) {
                if ($(btns[i]).hasClass("active") == true) {
                    btns[i].className = btns[i].className.replace(" active", "");
                    btns[i - 1].className += " active";
                    sendRequest(i - 1);
                }
            }
        });
        btns[btns.length - 1].addEventListener("click", function() {
            for (var i = btns.length - 3; i > 0; i--) {
                if ($(btns[i]).hasClass("active") == true) {
                    btns[i].className = btns[i].className.replace(" active", "");
                    btns[i + 1].className += " active";
                    sendRequest(i + 1);
                }
            }
        });
    });
    </script>
    <script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("page");
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
    <script type="text/javascript">
    $.ajax({
            url: 'comment_board_ajax.php',
            data: {
                productID : <?php echo $_GET['id']; ?>
            },
            type: 'POST',
            dataType: "json",
            success: function(Jdata) {
                $content="";
                for($i=0;$i<5;$i++)
                {
                    $content = $content+"<tr><td>"+Jdata.data[$i][0]+"</td><td>"+Jdata.data[$i][1]+"</td><td>"+Jdata.data[$i][2]+"</td></tr>";
                    $("#comment_content").html($content);
                }

            },
            error: function(xhr, ajaxOptions, thrownError) {}
        });
</script>
<script type="text/javascript">
    function check_login() {
        if(<?php if (!isset($_SESSION['account'])) echo "true"; else echo "false"; ?>)
        {
            alert("欲留言請先登入!!");
            document.location.href="login.php";
            return false;
        }
        else
            return true;
    }
</script>
</body>

</html>
