<?php
session_start();
if (!isset($_SESSION['account'])) {
	return;
	
}
if(isset($_SESSION['cart']))
    $cart = $_SESSION['cart'];
else
    $cart="";
$arr_cart = array_filter(explode(",",$cart));//將購物車Cookie轉成陣列,並移除空值
if(isset($_POST['id']))
{
	$oper = $_POST['oper'];
	$id = $_POST['id'];

	if ($oper==1)//加入購物車
	{
	    if (!in_array($id,$arr_cart))
	    $arr_cart[]=$id;//加入陣列
	}
	if ($oper==2)//取消購物車
	{
		unset($arr_cart[array_search($id,$arr_cart)]);//搜尋陣列元素並移除該元素
		$arr_cart=array_values($arr_cart);//重新排列陣列順序
	}


	$cart = implode(",",$arr_cart); //將所有商品以逗號連結成一字串
	$_SESSION['cart']=$cart;//寫入SESSION
}
//傳回JSON格式資料
echo json_encode($arr_cart);

?>