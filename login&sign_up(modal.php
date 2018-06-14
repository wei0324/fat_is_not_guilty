<!-- Modal -->
<div class="modal fade member" id="login" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true"><!--reservationModalLabel-->
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4 bg-image" style="background-image: url(images/bg_3.jpg);background-position : center ;"></div>
                    <div class="col-lg-8 p-5">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <small>CLOSE </small><span aria-hidden="true">&times;</span>
                        </button>
                        <h1 class="mb-4">登入</h1>
                        <form action="#" method="post" id="form2">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="account_login">帳號</label>
                                    <input type="text" class="form-control" id="account_login" name="account_login" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="password_login">密碼</label>
                                    <input type="password" class="form-control" id="password_login" name="password_login" required>
                                </div>
                            </div>
                            <div>
                              <div class="row">
                                  <div class="col-md-6 form-group">

                                      <a href="passwordEdit.php" target="_blank" class="btn btn-outline-white btn-lg ftco-animate" >忘記密碼？</a>
                                  </div>
                              </div>
                            </div>
                              <div>
                                <?php
$link = mysqli_connect("localhost", "root", "root123456", "group_15") // 建立MySQL的資料庫連結
or die("無法開啟MySQL資料庫連結!<br>");

// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
if (isset($_POST['account_login']) && isset($_POST['password_login'])) {
// 送出查詢的SQL指令
$id=$_POST['account_login'];
$pw=$_POST['password_login'];
$result = mysqli_query($link, "SELECT * FROM account where account = '$id'");
$row = @mysqli_fetch_row($result);
if ($row[0] == $id && $row[1] == $pw) {
//將帳號寫入session，方便驗證使用者身份
$_SESSION['account'] = $id;
} else {
echo "<script>
$(function(){
$('#login').modal({
show:true,
})
});
</script>" . "<span style=\"color:red\">帳號或密碼錯誤</span>";
}
}
mysqli_close($link); // 關閉資料庫連結
?>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="登入">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Modal -->
<!-- Modal -->
<div class="modal fade member" id="Create" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true"><!--reservationModalLabel-->
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4 bg-image" style="background-image: url(images/bg_3.jpg);background-position : center ;"></div>
                    <div class="col-lg-8 p-5">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <small>CLOSE </small><span aria-hidden="true">&times;</span>
                        </button>
                        <h1 class="mb-4">註冊</h1>
                        <form action="#" method="post" id="form1" name="form1">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="account">帳號</label> <label id="account-error" class="error" for="account"></label>
                                    <input type="text" class="form-control" id="account" name="account" value="" placeholder="4-10字元" onkeyup=sendRequest();>
                                    <span id='show_msg' style="color:red"></span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label id="same-error" class="error" for="same"></label>
                                    <input type="text" id="same" name="same" style="visibility: hidden;width: 1px">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="pwd">密碼</label> <label id="pwd-error" class="error" for="pwd"></label>
                                    <input type="password" class="form-control" id="pwd" name="pwd" value="" placeholder="8-12字元">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="m_lname">密碼確認</label> <label id="pwd2-error" class="error" for="pwd2"></label>
                                    <input type="password" class="form-control" id="pwd2" name="pwd2" value="" placeholder="需與密碼相符">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="m_email">Email</label> <label id="email-error" class="error" for="email"></label>
                                    <input type="email" class="form-control" id="email" name="mail">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="m_email">地址</label> <label id="addr-error" class="error" for="addr"></label>
                                    <input type="text" class="form-control" name="addr" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="checkbox" name="news" value="1" checked>　訂閱商品/活動訊息
                                    <br/>
                                    <font size="2px">不定期透過email通知最新商品活動及優惠資訊。</font>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="註冊">
                                </div>
                            </div>
                        </form>
<?php
$link = mysqli_connect("localhost","root","root123456","group_15")
or die("無法開啟MySQL資料庫連結!<br>");
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

if (isset($_POST['account']))
{
$sql="insert into account values ('" . $_POST['account'] . "','" . $_POST['pwd'] . "','" . $_POST['mail']. "','" . $_POST['addr'] ."','" . $_POST['news'] ."',0)";

if ( $result = mysqli_query($link, $sql) ) // 送出查詢的SQL指令
$msg= "<span style='color:#0000FF'>資料新增成功!<br>影響記錄數: ". mysqli_affected_rows($link) . "筆</span>";
else
$msg= "<span style='color:#FF0000'>資料新增失敗！<br>錯誤代碼：" . mysqli_errno($link) . "<br>錯誤訊息：" .mysqli_error($link) ."</span>";


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
