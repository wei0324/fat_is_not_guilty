<?php
header('Content-Type: text/xml;charset=utf-8;Pragma: no-cache;Cache-Control: no-cache;');
$user = @$_GET[account];
$link = mysqli_connect("localhost","root","root123456","group_15")// 建立MySQL的資料庫連結
or die("無法開啟MySQL資料庫連結!<br>");

$sql = "SELECT * FROM account where account='$user' ";// 指定SQL查詢字串

// 送出Big5編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf-8');
mysqli_query($link,"SET collation_connection = 'big5_chinese_ci'");

// 送出查詢的SQL指令
if ( $result = mysqli_query($link, $sql) ) {
    if( $row = mysqli_fetch_assoc($result) ) echo "1"; //帳號已存在
    else echo "0" ; //帳號不存在

    mysqli_free_result($result); // 釋放佔用的記憶體
}

mysqli_close($link); // 關閉資料庫連結

?>