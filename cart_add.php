<?php
include('db.php');

customerAuth();

if(!isset($_GET['id'])){
	rount('index.php');
	exit();
}

$pid = $_GET['id'];
$product = get("select * from product where id = $pid");

if($product){
	
	if(!isset($_SESSION['cart'][$pid])){
		$_SESSION['cart'][$pid] = $product[0];
		$_SESSION['cart'][$pid]['amount'] = 1;
		$_SESSION['cart'][$pid]['sum'] =$_SESSION['cart'][$pid]['price'] * $_SESSION['cart'][$pid]['amount'];
		
	}else{
		$_SESSION['cart'][$pid]['amount']++;
		$_SESSION['cart'][$pid]['sum'] = $_SESSION['cart'][$pid]['price'] * $_SESSION['cart'][$pid]['amount'];
		
	}
	
	$_SESSION['cart_sum']['total'] = 0;
	
	foreach($_SESSION['cart'] as $c){
		$_SESSION['cart_sum']['total'] += $c['sum'];
		$_SESSION['cart_sum']['vat'] = $_SESSION['cart_sum']['total'] * 0.07;
		$_SESSION['cart_sum']['shipping'] = 40;
		$_SESSION['cart_sum']['net'] = $_SESSION['cart_sum']['total'] + $_SESSION['cart_sum']['vat'] + $_SESSION['cart_sum']['shipping'];		
	}
	
	rount('cart.php');
	
	
}




?>