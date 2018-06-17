
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>會員登入</title>
      <?php include("link.php"); ?>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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
    #gotop {
        position: fixed;
        border-radius: 50px;
        right: 20px;
        bottom: 30px;
        padding: 5px;
        font-size: 25px;
        background: rgba(0, 0, 0, 0.36);
        color: #FAFCFD;
        cursor: pointer;
        z-index: 1000;
        width: 50px;
        height: 50px;
        text-align: center;
    }

    #cart {
        border-radius: 5px;
        font-size: 10px;
        background: rgba(255, 0, 0, 0.9);
        color: #FAFCFD;
        width: 20px;
        height: 20px;
        text-align: center;
    }

    .ftco-navbar-light {
        background: transparent !important;
        position: absolute;
    }
    </style>

  </head>
  <body body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">
    <div id="gotop"><i class="fas fa-angle-up"></i></div>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.php">胖不是罪</a>

        </nav>
        <!-- END nav -->
    </div>
        <section class="ftco-cover" style="background-image: url(images/bg_3.jpg);" id="section-home">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center ftco-vh-100">
                    <div class="col-md-12">
                        <h1 class="ftco-heading ftco-animate mb-3">胖不是罪</h1>
                        <h2 class="h5 ftco-subheading mb-5 ftco-animate">精緻、用心、美味 甜點專賣網</h2>
                        <p><a href="" target="_blank" class="btn btn-outline-white btn-lg ftco-animate" data-toggle="modal" data-target="#login">會員登入</a> <a href="" target="_blank" class="btn btn-outline-white btn-lg ftco-animate" data-toggle="modal" data-target="#Create">加入會員</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END section -->
        <?php include("login&sign_up(modal.php"); ?>
        <!-- loader -->
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
