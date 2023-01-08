<?php
include('db.php');

if(empty($_POST['pid'])){
   rount('prod.php');
}elseif(empty($_FILES['picture']['name'])){
    $picname = $_POST['picval'];
}elseif(!empty($_FILES['picture']['name'])){
    $ext = pathinfo($_FILES['picture']['name'],PATHINFO_EXTENSION);
    $picname = md5(strtotime("now").$_SERVER['REMOTE_ADDR']). '.'.$ext;
    copy($_FILES['picture']['tmp_name'], "productimg/$picname");
}

echo $sql = "update product set 
name = '{$_POST['name']}',
price = '{$_POST['price']}',
picture = '{$picname}',
detail = '{$_POST['detail']}',
box_width = '{$_POST['box_width']}',
box_height = '{$_POST['box_height']}',
box_long = '{$_POST['box_long']}',
box_weight = '{$_POST['box_weight']}',
seller_id = '{$_POST['id']}'
where id = " . $_POST['pid'];

$save = set($sql);

if($save){
    sessAlt('alert-success','ลงขายสินค้าสำเร็จ','prod.php');
}else{
    sessAlt('alert-danger','ลงขายสินค้าไม่สำเร็จ','prod.php');
}
?>