<?php

session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = Array();
}

$id = $_GET['id'];//商品ID
  // $_SESSION[$id] = $_SESSION[$id]+1; //記錄同件商品數量
   $_SESSION['cart'][]=$id;//加入陣列
//返回上一頁
$url = $_SERVER['HTTP_REFERER'];
header("Location:$url");
?>
