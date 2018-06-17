<?php
session_start();
$link = mysqli_connect("localhost", "root", "root123456", "group_15") // 建立MySQL的資料庫連結
or die("無法開啟MySQL資料庫連結!<br>");
date_default_timezone_set('Asia/Taipei');
$date = date('Y-m-d H:i:s', time());

mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

$arr_oper = array("insert" => "新增", "update" => "修改", "delete" => "刪除");
$oper = $_POST['oper'];

if ($oper == "query") {
      $authority = mysqli_query($link, "SELECT * FROM account where account = '$_SESSION['account']'");
      //$result = mysqli_query($link, "SELECT * FROM account where authority = '$'");
      $row = @mysqli_fetch_row($authority);
      if ($row[5]==1){
        $sql = "select * from comment";
        if ($result = mysqli_query($link, $sql)) {
              while ($row = mysqli_fetch_assoc($result)) {
                    $a['data'][] = array($row["account"], $row["content"],$row["date"], "<button type='button' class='btn btn-warning btn-xs' id='btn_update'><i class='glyphicon glyphicon-pencil'></i>修改</button> <button type='button' class='btn btn-danger btn-xs' id='btn_delete'><i class='glyphicon glyphicon-remove'></i>刪除</button>");
              }
      }
            mysqli_free_result($result); // 釋放佔用的記憶體
      }
      mysqli_close($link); // 關閉資料庫連結

      echo json_encode($a);
      exit;
}

if ($oper == "insert") {
      $sql = "insert into comment(account,content,date,productID) values ('" . $_SESSION['account'] . "','" . $_POST['content'] .  "'," .$time. "," . $_GET['id'] ")";
}

if ($oper == "update") {
      $sql = "update comment set account='" . $_SESSION['account'] . "',content='" . $_POST['content'] .  "',productID='" . $_GET['id'] . "' where no='" . $row[0] . "'";
}

if ($oper == "delete") {
      $sql = "delete from comment where no='" . $row[0] . "'";
}

if (strlen($sql) > 10) {
      if ($result = mysqli_query($link, $sql)) {
            $a["code"] = 0;
            $a["message"] = "資料" . $arr_oper[$oper] . "成功!";
      } else {
            $a["code"] = mysqli_errno($link);
            $a["message"] = "資料" . $arr_oper[$oper] . "失敗! <br> 錯誤訊息: " . mysqli_error($link);
      }
      mysqli_close($link); // 關閉資料庫連結

      echo json_encode($a);
      exit;
}
?>
