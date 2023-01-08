<?php
include('db.php');

$sql = "delete from product where id = ".$_GET['pid'];
$delete = set($sql);
if($delete){
    sessAlt('alert-success','ลบสืนค้าแล้ว','prod.php');
}else{
    sessAlt('alert-success','ลบสินค้าไม่สำเร็จ','prod.php');
}

?>