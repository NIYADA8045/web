<?php
include 'db.php';

$sql = "(select username from seller where username = '{$_POST['username']}') union all (select username from customer where username = '{$_POST['username']}')";
$userrel = get($sql);

if(count($userrel) == 1){
    alertSess('warning', 'มีชื่อผู้ใช้นี้อยู่แล้ว', 'seller_profile_edit.php');
}elseif(empty($_POST)){
    alertSess('danger', 'ไม่พบข้อมูลที่ส่งมา', 'seller_profile_edit.php');
}

$sql = "update seller set 
username = '{$_POST['username']}',
password = '{$_POST['password']}',
shop_name = '{$_POST['shop_name']}',
address = '{$_POST['address']}',
phone = '{$_POST['phone']}',
contace_name = '{$_POST['contace_name']}',
email = '{$_POST['email']}',
website = '{$_POST['website']}'
where id = ".$_POST['id'];

$save = set($sql);

if($save){
    $_SESSION['user'] = $_POST;
    $_SESSION['user']['type'] = 'seller';
    $_SESSION['auth'] = 'true';
    rount('index.php');
}else{
    alertSess('danger', 'ไม่สามารถบันทึกข้อมูลได้', 'seller_profile_edit.php');
}
?>