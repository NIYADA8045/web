<?php
include 'db.php';

$seller = get("select * from seller where username = '{$_POST['username']}' and password = '{$_POST['password']}' ")[0];

$customer = get("select * from customer where username = '{$_POST['username']}' and password = '{$_POST['password']}' ")[0];

if($seller){
    $_SESSION['user'] = $seller;
    $_SESSION['user']['type'] = 'seller';
    $_SESSION['auth'] = 'true';
    rount('index.php');
}elseif($customer){
    $_SESSION['user'] = $customer;
    $_SESSION['user']['type'] = 'customer';
    $_SESSION['auth'] = 'true';
    rount('index.php');
}else{
    alertSess('danger', 'ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ตรงกัน', 'login.php');
}
?>