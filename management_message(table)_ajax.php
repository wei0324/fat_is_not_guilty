<?php

$link = mysqli_connect("localhost", "root", "root123456", "group_15") // 建立MySQL的資料庫連結
or die("無法開啟MySQL資料庫連結!<br>");

mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");


$arr_oper = array("insert" => "新增", "update" => "修改", "delete" => "刪除");
$oper = $_POST['oper'];

if ($oper == "query") {
      $sql = "select * from message";
      if ($result = mysqli_query($link, $sql)) {
            while ($row = mysqli_fetch_assoc($result)) {
                  $a['data'][] = array($row["name"], "$".$row["email"], nl2br($row["message"]),"<button type='button' class='btn btn-warning btn-xs' id='btn_update'><i class='glyphicon glyphicon-pencil'></i>修改</button> <button type='button' class='btn btn-danger btn-xs' id='btn_delete'><i class='glyphicon glyphicon-remove'></i>刪除</button>",$row["id"]);
            }
            mysqli_free_result($result); // 釋放佔用的記憶體
      }
      mysqli_close($link); // 關閉資料庫連結

      echo json_encode($a);
      exit;
}

if ($oper == "insert") {
      $sql = "insert into message(name,price,description,image_name) values ('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['message'] . "')";
}

if ($oper == "update") {
      $sql = "update message set name='" . $_POST['name'] . "',email='" . $_POST['email'] . "',message='" . $_POST['message'] . "' where id='" . $_POST['id'] . "'";
}

if ($oper == "delete") {
      $sql = "delete from message where id='" . $_POST['id'] . "'";
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