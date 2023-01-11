<?php include('db.php');

$sql = "DELETE from product where product.id = ".$_GET['pid'];

$dlt = set($sql);
if($dlt){
    alertSess('success','delete product Sucses','seller_product.php');
}else{
    alertSess('danger','delete product failed',"seller_product.php");
}
?>