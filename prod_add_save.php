<?php
include('db.php');

if(!empty($_FILES['picture']['name'])){
    $ext = pathinfo($_FILES['picture']['name'],PATHINFO_EXTENSION);
    $picname = md5(strtotime("now").$_SERVER['REMOTE_ADDR']). '.'.$ext;
    copy($_FILES['picture']['tmp_name'], "productimg/$picname");
}

$sql = "insert into product value(
null,
'{$_POST['name']}',
'{$_POST['price']}',
'{$picname}',
'{$_POST['detail']}',
'{$_POST['box_width']}',
'{$_POST['box_height']}',
'{$_POST['box_long']}',
'{$_POST['box_weight']}',
'{$_POST['id']}'
)";

$save = set($sql);

if($save){
    sessAlt('alert-success','ลงขายสินค้าสำเร็จ','prod.php');
}else{
    sessAlt('alert-danger','ลงขายสินค้าไม่สำเร็จ','prod.php');
}
?>