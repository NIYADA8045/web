<?php
include 'db.php';

$sql = "(select username from seller where username = '{$_POST['username']}') union all (select username from customer where username = '{$_POST['username']}')";
$userrel = get($sql)[0];

if(count($userrel) == 1){
    alertSess('warning', 'มีชื่อผู้ใช้นี้อยู่แล้ว', 'seller_register.php');
}elseif(empty($_POST)){
    alertSess('danger', 'ไม่พบข้อมูลที่ส่งมา', 'seller_register.php');
}elseif($_POST['password'] != $_POST['repassword']){
    alertSess('warning', 'รหัสผ่านไม่ตรงกัน', 'seller_register.php');
}

$sql = "insert into seller value(null,
'{$_POST['username']}',
'{$_POST['password']}',
'{$_POST['shop_name']}',
'{$_POST['address']}',
'{$_POST['phone']}',
'{$_POST['contace_name']}',
'{$_POST['email']}',
'{$_POST['website']}')
";
$save = set($sql);

if($save){
    $_SESSION['user'] = $_POST;
    $_SESSION['user']['type'] = 'seller';
    $_SESSION['auth'] = 'true';
    rount('index.php');
}else{
    alertSess('danger', 'ไม่สามารถบันทึกข้อมูลได้', 'seller_register.php');
}
?>