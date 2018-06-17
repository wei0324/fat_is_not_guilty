<?php
  session_start();
  $link = mysqli_connect("localhost", "root", "root123456", "group_15") // 建立MySQL的資料庫連結
  or die("無法開啟MySQL資料庫連結!<br>");
  date_default_timezone_set('Asia/Taipei');
  $date = date('Y-m-d H:i:s', time());

  mysqli_query($link, 'SET CHARACTER SET utf8');
  mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title></title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">

<script src="//code.jquery.com/jquery-3.3.1.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script src="commentNew.js"></script>
<style>
body {
    font-family: "微軟正黑體";
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
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-center">
            <form class="form-horizontal form-inline" name="form1" id="comment" method="post">
                <input type="hidden" name="oper" id="oper" value="insert">
                <input type="hidden" name="no_old" id="no_old" value="">
                <table id="edit" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">帳號</th>
                            <th class="text-center">內容</th>
                            <th class="text-center">時間</th>
                            <th class="text-center">存檔/取消</th>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <input type="text" id="account" name="account">
                            </td>
                            <td class="text-center">
                                <input type="text" id="content" name="content">
                            </td>
                            <td class="text-center">
                                <?php
                                    echo @$date;
                                 ?>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-primary btn-xs" id="btn-save"><i class="glyphicon glyphicon-save"></i>存檔</button>
                                <button type="reset" class="btn btn-danger btn-xs" id="btn-cancel">取消</button>
                            </td>
                        </tr>
                    </thead>
                </table>
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">帳號</th>
                           <th class="text-center">內容</th>
                           <th class="text-center">時間</th>
                           <?php
                              $data = mysql_query("select * from account") ;
                              $authority = mysqli_fetch_row($date) ;
                              if ($authority[5] == 0)
                                echo '<th class="text-center">修改/刪除</th>';
                            ?>
                        </tr>
                    </thead>
                </table>
        </div>
        <div class="col-md-2"></div>
    </div>
</body>

</html>
