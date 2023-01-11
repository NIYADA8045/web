<?php
include ('db.php');

if($_GET['dlt']){
    
}

if(!empty($_FILES['picture']['name'])){
    $ext = pathinfo($_FILES['picture']['name'],PATHINFO_EXTENSION);
    $picname = md5(strtotime("now").$_SERVER['REMOTE_ADDR']).'.'.$ext;
}else{
    $picname = $_POST['picturetmp'];
}



$sql = "
UPDATE product set  
name = '{$_POST['name']}',
price = '{$_POST['name']}',
picture = '{$picname}',
detail = '{$_POST['detail']}',
box_width = '{$_POST['box_width']}',
box_height = '{$_POST['box_height']}',
box_long = '{$_POST['box_long']}',
box_weight = '{$_POST['box_weight']}',
seller_id = '{$_POST['id']}'
where seller_id = '{$_POST['pid']}'";
$update = set($sql);

if($update){
    alertSess('success','Edit product Sucses','seller_product.php');
}else{
    alertSess('danger','Edit product failed',"seller_product_edit.php?pid='{$_POST['pid']}'");
}



?>
