<?php
include('db.php');

customerAuth();
if(!isset($_GET['pid'])){
	rount('index.php');
	exit;
}

$cart = $_SESSION['cart'];
$buydate = date('Y-m-d H:i:s');

$sql = "INSERT INTO `purchase`  VALUES 
(NULL, '{$_SESSION['user']['id']}', '$buydate', '{$_SESSION['cart_sum']['total']}', '{$_SESSION['cart_sum']['vat']}', '{$_SESSION['cart_sum']['shipping']}', '{$_SESSION['cart_sum']['net']}');";

$insert = set($sql);

$purId = mysqli_insert_id($conn);

foreach($cart as $c){
	$pid = $c['id'];
	$amount = $c['amount'];
	$price = $c['price'];
	$sum = $c['sum'];
	$sql = "INSERT INTO `purchase_list`  VALUES('$purId','$pid','$amount','$price','$sum')";
	$inPurl = set($sql);
	
}

unset($_SESSION['cart']);
unset($_SESSION['cart_sum']);

rount('cart_detail.php?purid='.$purId);




?>