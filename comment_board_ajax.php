<?php

$link = mysqli_connect("localhost", "root", "root123456", "group_15") // 建立MySQL的資料庫連結
or die("無法開啟MySQL資料庫連結!<br>");

mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

$sql = "select * from comment where productID=\"".$_POST['productID']."\"";
      if ($result = mysqli_query($link, $sql)) {
            while ($row = mysqli_fetch_assoc($result)) {
                  $a['data'][] = array($row["account"], nl2br($row["content"]),$row["time"]);
            }
            mysqli_free_result($result); // 釋放佔用的記憶體
      }
      mysqli_close($link); // 關閉資料庫連結
      echo json_encode(@$a);
      exit;




?>