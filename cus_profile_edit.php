<?php
include('db.php');

//$sql = "INSERT INTO `customer`  VALUES (NULL, '{$_POST['username']}', '{$_POST['password']}', '{$_POST['fname']}', '{$_POST['lname']}', '{$_POST['phone']}', '{$_POST['email']}');";


$sql = "UPDATE `customer` SET 
`username` = '{$_POST['username']}', 
`password` = '{$_POST['password']}', 
`first_name` = '{$_POST['first_name']}', 
`last_name` = '{$_POST['last_name']}', 
`phone` = '{$_POST['phone']}', 
`email` = '{$_POST['email']}' 
WHERE `customer`.`id` = '{$_POST['id']}';";

$edit = set($sql);
//echo mysqli_error($conn);

if($edit == true){
	$_SESSION['auth'] = true;
	$_SESSION['user'] = $_POST;
	alertSess('success',"บันทึกสำเร็จ",'cus_profile.php');
}else{
	alertSess('danger',"บันทึกไม่สำเร็จ",'cus_profile.php');
}



?>

