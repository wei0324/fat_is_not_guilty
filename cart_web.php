<?php
    session_start();
    if (!isset($_SESSION['account'])) {
      echo "<script>alert('請先登入!')</script>";
      echo '<meta http-equiv=refresh content=0;url="index.php">';
    }
    
 ?>
    <!DOCTYPE html>
    <html>

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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="//jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
        <link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">
        <!--<script src="//code.jquery.com/jquery-3.3.1.js"></script>-->
        <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
        <script src="js/cart_web_products.js"></script>
        <style>
        body {
            font-family: "微軟正黑體";
            color: black;
        }

        .error {
            color: #D82424;
            font-weight: normal;
            display: inline;
            padding: 1px;
        }
        </style>
    </head>

    <body>
        <section class="ftco-section" style="padding-top: 0;" id="">
            <?php include("navbar.php"); ?>
        </section>
        <section class="ftco-section" id="section-menu">
            <!--<div class="container">-->
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 text-center" id="CRUD">
                    <div class="row" id="comment">
                        <form class="" name="form1" id="form1" method="post" style="overflow: auto;width:100%">
                            <input type="hidden" name="oper" id="oper" value="insert">
                            <input type="hidden" name="no" id="no" value="">
                            <table id="edit" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">品名</th>
                                        <th class="text-center">商品描述</th>
                                        <th class="text-center">數量</th>
                                        <th class="text-center">存檔/取消</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <input type="text" id="name" name="name">
                                            <br/>
                                            <label id="name-error" class="error" for="name"></label>
                                        </td>
                                        <td class="text-center">
                                            <textarea id="description" name="description" style="resize:none;height: 100%;width:100%" class="area"></textarea>
                                            <br/>
                                            <label id="description-error" class="error" for="description"></label>
                                        </td>
                                        <td class="text-center">
                                            <input type="text" id="num" name="num">
                                            <br/>
                                            <label id="num-error" class="error" for="num"></label>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary btn-xs" id="btn-save"><i class="glyphicon glyphicon-save"></i>存檔</button>
                                            <button type="reset" class="btn btn-danger btn-xs" id="btn-cancel">取消</button>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </form>
                        <table id="example1" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">品名</th>
                                    <th class="text-center">商品描述</th>
                                    <th class="text-center">數量</th>
                                    <th class="text-center">修改/刪除</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </section>
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
                                </div>
                            </div>
                            <div class="col-md ftco-animate">
                                <div class="ftco-footer-widget mb-4">
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
        <!--<script src="js/jquery.min.js"></script>-->
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