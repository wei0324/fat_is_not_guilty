<!DOCTYPE html>
<?php
session_start();

  if (!isset( $_SESSION['accountForget'])) {
      echo '<meta http-equiv=refresh content=0;url="index.php">';
  }
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>修改密碼</title>
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
  <?php include("navbar.php"); ?>
      <section class="ftco-cover" style="background-image: url(images/bg_3.jpg);" id="section-home">
          <div class="container">
              <div class="row align-items-center justify-content-center text-center ftco-vh-100">
                  <div class="col-md-12">
                      <h1 class="ftco-heading ftco-animate mb-3">胖不是罪</h1>
                      <h2 class="h5 ftco-subheading mb-5 ftco-animate">精緻、用心、美味 甜點專賣網</h2>
                      <div class="" id="login" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true"><!--reservationModalLabel-->
                          <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                  <div class="modal-body">
                                      <div class="row">
                                          <div class="col-lg-4 bg-image" style="background-image: url(images/bg_3.jpg);background-position : center ;"></div>
                                          <div class="col-lg-8 p-5">

                                              <h1 class="mb-4">修改密碼</h1>
                                              <div class="row">

                                                    <div class="col-md-12 form-group" id="pwdEdit" >

                                                      <form class="" action="" method="post" id="pwd_forget" name="pwd_forget">

                                                      <div class="col-md-6 form-group" >
                                                        <label for="m_lname">新密碼</label> <label id="pwd2-error" class="error" for="pwd"></label>
                                                        <input type="password" class="form-control" id="NpwdForget" name="NpwdForget" value="" placeholder="8-12字元">
                                                      </div>
                                                      <div class="col-md-6 form-group" >
                                                        <label for="m_lname" >新密碼確認</label> <label id="pwd2-error" class="error" for="pwd2"></label>
                                                        <input type="password" class="form-control" id="NpwdForget2" name="NpwdForget2" value="" placeholder="需與新密碼相符" >
                                                      </div>
                                                      <div class="row">
                                                          <div class="col-md-6 form-group">
                                                              <input type="submit" id="pwdSave" class="btn btn-primary btn-lg btn-block" value="送出" >
                                                          </div>

                                                      </div>


                                                    </form>
                                                  </div>

                                                <?php include("EditSQL.php"); ?>
                                                <?php // 如果提交了表单

                                                  if (isset($_POST['NpwdForget']) && isset($_POST['NpwdForget2']) ) {

                                                    $pwd1 = trim($_POST['NpwdForget']);
                                                    $pwd2 = trim($_POST['NpwdForget2']);

                                                      if ($pwd1==$pwd2 ) {
                                                        $sql="update account set password='".@$_POST['NpwdForget']."' where account='".$_SESSION['accountForget']."'";
                                                        mysqli_query($link, $sql);
                                                        echo "<script> alert('恭喜，密碼修改成功！')</script>";
                                                        echo '<meta http-equiv=refresh content=0;url="index.php">';
                                                        session_destroy();

                                                      }

                                                      else if($pwd1!=$pwd2 ){

                                                        echo "<script> alert('兩次輸入的新密碼不同，請重新輸入!')</script>";
                                                      }

                                                    }



                                                  mysqli_close($link); // 關閉資料庫連結
                                                ?>
                                              </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- END Modal -->
                  </div>
              </div>
          </div>
        </div>
      </section>
      <!-- END section -->
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
