<?php
include 'db.php';
$uid = user('id');

if(!empty($_FILES['picture']['name'])){
    $path = pathinfo($_FILES['picture']['name'],PATHINFO_EXTENSION);
    $picname = md5(strtotime('now').$_SERVER['REMOTE_ADDR']).'.'.$path;
}

$sql = "insert into product value(null,
'{$_POST['name']}',
'{$_POST['price']}',
'{$picname}',
'{$_POST['detail']}',
'{$_POST['box_width']}',
'{$_POST['box_height']}',
'{$_POST['box_long']}',
'{$_POST['box_weight']}',
'{$uid}')
";

$save = set($sql);

if($save){
    copy($_FILES['picture']['tmp_name'], "img/$picname");
    alertSess('suscess', 'เพิ่มสินค้าสำเร็จ', 'seller_product.php');
}else{
    alertSess('danger', 'ไม่สามารถบันทึกข้อมูลได้', 'seller_product.php');
}
?>