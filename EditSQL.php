<?php
$link = mysqli_connect("localhost", "root", "root123456", "group_15") // 建立MySQL的資料庫連結
or die("無法開啟MySQL資料庫連結!<br>");

mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
@$sql = "select * from account where  account='".@$_SESSION['account']."'";
$result = @mysqli_query($link, $sql);
$row = @mysqli_fetch_row($result);
mysqli_free_result($result); // 釋放佔用的記憶體
?>
