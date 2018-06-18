<?php session_start();
if (!isset($_SESSION['account']) || @$_SESSION['authority'] != 1) {
    echo "<script>alert('非管理者!!!');</script>";
  echo '<meta http-equiv=refresh content=0;url="login.php">';
}?>
<!DOCTYPE html>
<html>

<head>
    <title>胖不是罪 甜點專賣網</title>
    <?php include("link.php"); ?>
    <script src="//jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">
    <!--<script src="//code.jquery.com/jquery-3.3.1.js"></script>-->
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script src="js/management.js"></script>
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
                <div class="col-md-12 text-center">
                    <ul class="nav ftco-tab-nav nav-pills mb-5" id="" role="">
                        <li class="nav-item ftco-animate" id="">
                            <a class="nav-link active" id="products_select" data-toggle="pill" href="" role="" aria-controls="" aria-selected="true">products</a>
                        </li>
                        <li class="nav-item ftco-animate" id="">
                            <a class="nav-link" id="comment_select" data-toggle="pill" href="" role="" aria-controls="" aria-selected="false">comment</a>
                        </li>
                        <li class="nav-item ftco-animate" id="">
                            <a class="nav-link" id="message_select" data-toggle="pill" href="" role="" aria-controls="" aria-selected="false">message</a>
                        </li>
                        <li class="nav-item ftco-animate" id="">
                            <a class="nav-link" id="order_select" data-toggle="pill" href="" role="" aria-controls="" aria-selected="false">order</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 text-center" id="CRUD"></div>
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
    <?php include("loader.php"); ?>
</body>

</html>
