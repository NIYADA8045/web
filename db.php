<?php
session_start();
//เชื่อมต่อฐานข้อมูล mysql (ชื่อเครื่อง ,ชื่อผู้ใช้ฐานข้อมูล , รหัสผ่านฐานข้อมูล , ชื่อฐานข้อมูล ) //กำหนดชุดภาษาเป็น UTF8 เพื่อรองรับภาษาไทย
$conn = new mysqli("localhost", "root", "", "web_ecommerce");
$conn->set_charset("utf8");

//กำหนดเขตเวลา ให้ตรงกับบ้านเรา เพื่อให้ดึงวันที่ได้ถูกต้อง
date_default_timezone_set('asia/bangkok');

function get($sql)
{
	global $conn;
	try {
		$query = $conn->query($sql);
		$queryRow = $query->fetch_all(MYSQLI_ASSOC);
	} catch (Exception $e) {
		$queryRow = [];
	}
	return $queryRow;
}

function set($sql)
{
	global $conn;
	try {
		$rel = $conn->query($sql);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	return $rel;
}

function alert()
{
	if (isset($_SESSION['alert-message'])) {
		$alert = '<div class="alert ' . "{$_SESSION['alert-class']}" . '">' . $_SESSION['alert-message'] . '</div>';
	} else {
		$alert = "";
	}
	return $alert;
}

// function แสดงข้อมูลลูกค้า 
function user($userdata)
{
	// return ถ้ามีข้อมูลให้แสดงออกไป ถ้าไม่มี ให้แสดงคำว่า "ไม่มีข้อมูลอยู่!" 
	return $_SESSION['user'][$userdata] ?? "ไม่มีข้อมูลอยู่!";
}

function customerAuth(){
	// var_dump($usertype);
	if(!isset($_SESSION['auth']) || empty($_SESSION['user']['type']) || $_SESSION['user']['type'] != "customer"){
		header('localhost:login.php');
		exit;
	}
}


function sellerAuth(){
	// var_dump($usertype);
	if(!isset($_SESSION['auth']) || empty($_SESSION['user']['type']) || $_SESSION['user']['type'] != "seller"){
		header('localhost:login.php');
		exit;
	}
}

//ใช้โยงหน้า ขี้เกียจพิม location บ่อย
function rount($link){
	header('location:'.$link);
}

//session alert ขี้เกียจพิมบ่อย มี3 param $clss = alert-class $mess = ข้อความ $link = เปลี่ยนไปหน้าไหน
function sessAlt($class,$mess,$link){
    $_SESSION['alert-class'] = $class;
    $_SESSION['alert-message'] = $mess;
    rount($link);
}
?>