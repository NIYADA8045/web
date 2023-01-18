<?php
include('db.php');

if(!isset($_SESSION['login']) || $_SESSION['user_type'] == 'seller'){
	rount('login.php');
}else if(!isset($_GET['pid'])){
	rount('login.php');
	exit();
}


$cart = $_SESSION['cart'];
echo '<pre>';

var_dump($cart);
$_SESSION['cart_sum']['total'] = 0;
var_dump($cart);
foreach($cart as $c){
	$pid = $c['id'];
	$_SESSION['cart'][$pid]['amount'] = $_POST['amount'][$pid];
	
	$_SESSION['cart'][$pid]['sum'] = $_SESSION['cart'][$pid]['price'] * $_SESSION['cart'][$pid]['amount'];
	
		$_SESSION['cart_sum']['total'] += $_SESSION['cart'][$pid]['sum'];
	
		$_SESSION['cart_sum']['vat'] = $_SESSION['cart_sum']['total'] * 0.07;
		$_SESSION['cart_sum']['shipping'] = 40;
		$_SESSION['cart_sum']['net'] = $_SESSION['cart_sum']['total'] + $_SESSION['cart_sum']['vat'] + $_SESSION['cart_sum']['shipping'];	
}
//exit;
//var_dump($cart);
//var_dump($_SESSION['cart_sum']);
rount('cart.php');

?>