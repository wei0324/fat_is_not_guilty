<?php


$link = mysqli_connect("localhost", "root", "root123456", "group_15") // 建立MySQL的資料庫連結
or die("無法開啟MySQL資料庫連結!<br>");
?>
<?php include("EditSQL.php");
   mysqli_close($link); // 關閉資料庫連結
 ?>
  <script src="js/passwordEdit.js"></script>
  <script src="js/check.js"></script>
<!-- Modal -->
<div class="modal fade member" id="Edit" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true"><!--reservationModalLabel-->
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4 bg-image" style="background-image: url(images/bg_3.jpg);background-position : center ;"></div>
                    <div class="col-lg-8 p-5">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <small>CLOSE </small><span aria-hidden="true">&times;</span>
                        </button>
                        <h1 class="mb-4">會員資料</h1>
                            <div class="row">
                              <label for="account">帳號</label>
                                <div class="col-md-6 form-group">
                                    <?php echo $row[0]; ?>
                                </div>
                            </div>
                            <div class="row">
                              <label for="pwd" >密碼</label>
                                <div class="col-md-12 form-group" id="pwdShow" style="display:block">
                                    <div class="col-md-6 form-group">
                                    <input type="button" id="pwdButtonE" class="btn btn-primary btn-lg btn-block" value="修改" >
                                  </div>
                                </div>
                                  <div class="col-md-12 form-group" id="pwdEdit" style="display:none">

                                    <form class="" action="" method="post" id="pwd_edit" name="pwd_edit">
                                      <div class="col-md-6 form-group" >
                                      <input type="hidden" name="pwdedit" id="pwdedit" value="">
                                      <label for="pwd" >舊密碼</label> <label  class="error" for="pwd"></label>
                                      <input type="password" class="form-control" id="pwdInfro" name="pwdInfro" value="" placeholder="8-12字元" >
                                    </div>
                                    <div class="col-md-6 form-group" >
                                      <label for="m_lname">新密碼</label> <label id="pwd2-error" class="error" for="pwd"></label>
                                      <input type="password" class="form-control" id="Newpwd" name="Newpwd" value="" placeholder="8-12字元">
                                    </div>
                                    <div class="col-md-6 form-group" >
                                      <label for="m_lname" >新密碼確認</label> <label id="pwd2-error" class="error" for="pwd2"></label>
                                      <input type="password" class="form-control" id="Newpwd2" name="Newpwd2" value="" placeholder="需與新密碼相符" >
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="submit" id="pwdSave" class="btn btn-primary btn-lg btn-block" value="儲存" >
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="reset" id="pwdReset" class="btn btn-primary btn-lg btn-block" value="取消" >
                                        </div>
                                    </div>


                                  </form>
                                </div>

                              <?php include("EditSQL.php"); ?>
                              <?php // 如果提交了表单

                                if (isset($_POST['pwdInfro']) && @$_POST['Newpwd'] !="") {
                                  $pwd = trim($_POST['pwdInfro']);
                                  $pwd1 = trim($_POST['Newpwd']);
                                  $pwd2 = trim($_POST['Newpwd2']);

                                    if ($pwd1==$pwd2 && $pwd == $row[1]) {
                                      $sql="update account set password='".@$_POST['Newpwd']."' where account='".$_SESSION['account']."'";
                                      mysqli_query($link, $sql);
                                      echo "<script> alert('恭喜，密碼修改成功！')</script>";
                                      echo '<meta http-equiv=refresh content=0;url="#">';



                                    }

                                    else if($pwd1!=$pwd2 ){

                                      echo "<script> alert('兩次輸入的新密碼不同，請重新輸入!')</script>";
                                    }
                                    else if($pwd != $row[1]){
                                      echo "<script> alert('舊密碼不正确，請重新輸入!')</script>";
                                    }

                                  }



                                mysqli_close($link); // 關閉資料庫連結
                              ?>
                            </div>
                            <div class="row">
                              <label for="m_email">Email</label>
                                <div class="col-md-12 form-group" id="mailShow" style="display:block">
                                      <p  id="mailData"><?php echo $row[2]; ?> </p>
                                        <div class="col-md-6 form-group">

                                    <input type="button" id="mailButtonE" class="btn btn-primary btn-lg btn-block" value="修改" >
                                  </div>
                                </div>
                                <div class="col-md-12 form-group" id="mailEdit" style="display:none">

                                    <form class="" action="" method="post" id="email_edit" name="email_edit">

                                      <input type="email" class="form-control" name="emailInfro" id="emailInfro" >
                                      <div class="row">
                                          <div class="col-md-6 form-group">
                                            <input type="submit" id="mailSave" class="btn btn-primary btn-lg btn-block" value="儲存" >
                                          </div>
                                          <div class="col-md-6 form-group">
                                              <input type="reset" id="mailReset" class="btn btn-primary btn-lg btn-block" value="取消" >
                                          </div>
                                      </div>

                                    </form>
                                    <?php
                                    if (@$_POST['emailInfro'] != "" && isset($_POST['emailInfro'])) {

                                      include("EditSQL.php");
                                        $sql="update account set email='".@$_POST['emailInfro']."' where account='".$_SESSION['account']."'";
                                        mysqli_query($link, $sql);
                                         mysqli_close($link); // 關閉資料庫連結
                                         echo "<script> alert('信箱變更成功!!')</script>";
                                           echo '<meta http-equiv=refresh content=0;url="#">';

                                       }

                                    ?>
                                  </div>
                            </div>
                            <div class="row">
                              <label for="m_email">地址</label>
                                <div class="col-md-12 form-group" id="addrShow" style="display:block">

                                    <p  id="addrData"><?php echo $row[3]; ?> </p>
                                    <div class="col-md-6 form-group">
                                    <input type="button" id="addrButtonE" class="btn btn-primary btn-lg btn-block" value="修改" >
                                  </div>
                                </div>
                                <div class="col-md-12 form-group" style="display:none" id="addrEdit">
                                  <form class="" action="" method="post" id="addr_edit">

                                    <input type="text" class="form-control" name="addrInfro" id="addrInfro" name="addrInfro" >
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                          <input type="submit" id="addrSave" class="btn btn-primary btn-lg btn-block" value="儲存">

                                        </div>
                                        <div class="col-md-6 form-group">
                                          <input type="reset" id="addrReset" class="btn btn-primary btn-lg btn-block" value="取消" >
                                        </div>
                                    </div>
                                  </form>
                                </div>
                                <?php
                                  if (@$_POST['addrInfro'] != "" && isset($_POST['addrInfro'])) {
                                    // code...
                                    include("EditSQL.php");
                                    $sql="update account set address='".@$_POST['addrInfro']."' where account='".$_SESSION['account']."'";
                                    mysqli_query($link, $sql);
                                    mysqli_close($link); // 關閉資料庫連結
                                    echo "<script> alert('地址變更成功!')</script>";
                                      echo '<meta http-equiv=refresh content=0;url="#">';

                                  }


                                ?>
                            </div>

                            <div class="row">
                            </div>

<?php




//mysqli_close($link); // 關閉資料庫連結*/

?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Modal -->
