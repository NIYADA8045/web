<?php
include('db.php');

$stmt = $conn->prepare("(select username from seller 
where username = ?) union all (select username from customer where username = ?)");

$stmt->bind_param("ss",$_POST['username'],$_POST['username']);
$stmt->execute();
$rel = $stmt->get_result(); 

var_dump($rel);

if($rel->num_rows > 0)
{
	$_SESSION['alert-class'] = "alert-warning";
	$_SESSION['alert-message'] = "มีผู้ใช้นี้อยู่แล้ว";
	rount('sell_reg.php');
}elseif($_POST['password'] != $_POST['repassword']){
	$_SESSION['alert-class'] = "alert-danger";
	$_SESSION['alert-message'] = "รหัสผ่านไม่ตรงกัน";
	rount('sell_reg.php');
}

$sql = "insert into seller value(
null,
'{$_POST['username']}',
'{$_POST['password']}',
'{$_POST['shop_name']}',
'{$_POST['address']}',
'{$_POST['phone']}',
'{$_POST['contact_name']}',
'{$_POST['email']}',
'{$_POST['website']}'
)";

$save = set($sql);
//var_dump($save);
//exit;
if($save == true){
	rount('sell_reg.php');
}else{
	$_SESSION['alert-class'] = "alert-danger";
	$_SESSION['alert-message'] = "ไม่สามารถสมัคสมาชิกได้";
	rount('sell_reg.php');
}
?>