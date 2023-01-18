<?php
session_start();
$conn = new mysqli('localhost','root','','e-commerce');
$conn->set_charset('utf8');
date_default_timezone_set('Asia/bangkok');

function get($sql){
	global $conn;
	try{
		$rel = $conn->query($sql);
		$row = $rel->fetch_all(MYSQLI_ASSOC);
	}catch(Exception $e){
		$row = [];
		echo $e->getMessage();
	}
	return $row;
}

function set($sql){
	global $conn;
	try{
		$rel = $conn->query($sql);
		return $rel;
	}catch(Exception $e){
		echo $e->getMessage();
		return false;
	}
	
	
}

function user($userdata){
	return $_SESSION['user'][$userdata] ?? 'ไม่มีข้อมูลอยู่';
}

function auth(){
	if(empty($_SESSION['auth'])){
		rount('index.php');
	}
}

function rount($link){
	header('location:'.$link);
}

function alertSess($class,$mess,$link){
	$_SESSION['alert_class'] = $class;
	$_SESSION['alert_message'] = $mess;
	rount($link);	
}

function alertShow(){
	if(isset($_SESSION['alert_class']) && isset($_SESSION['alert_message'])){
		 echo '<div class="alert-'.$_SESSION['alert_class'].' p-3 btn-block mb-3 rounded">'.$_SESSION['alert_message'] .'</div>';
	}
}

function sellerAuth(){
	if($_SESSION['user']['type'] != 'seller' && $_SESSION['auth'] != 'true'){
		rount('index.php');
	}
}

function customerAuth(){
	if($_SESSION['user']['type'] != 'customer' && $_SESSION['auth'] != 'true'){
		rount('index.php');
	}
}
?>