<?php
include('db.php');

$sql = "INSERT INTO `customer`  VALUES (NULL, '{$_POST['username']}', '{$_POST['password']}', '{$_POST['fname']}', '{$_POST['lname']}', '{$_POST['phone']}', '{$_POST['email']}');";

$insert = set($sql);
echo mysqli_error($conn);

if($insert == true){
	$_SESSION['user']['type'] = 'customer';
	$_SESSION['auth'] = true;
	alertSess('success',"บันทึกสำเร็จ",'login.php');
}else{
	alertSess('danger',"บันทึกไม่สำเร็จ",'cus_register.php');
}



?>

