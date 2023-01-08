<?php
require('db.php');

$sql = "update seller set 
username = '{$_POST['username']}',
password = '{$_POST['password']}',
shop_name = '{$_POST['shop_name']}',
address = '{$_POST['address']}',
phone = '{$_POST['phone']}',
contace_name = '{$_POST['contace_name']}',
email = '{$_POST['email']}',
website = '{$_POST['website']}'
where id = 
".$_POST['id'];
$update = set($sql);

if($update){
    $_SESSION['auth'] = true;
    $_SESSION['user'] = $_POST;
    rount('sell_profile.php');
}else{
    sessAlt('alert-danger','ไม่สามารถแก้ไขข้อมูลได้','sell_profile_edit.php');
}
?>