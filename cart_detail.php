<?php
include('db.php');
customerAuth();
if(empty($_GET['purid'])){
	rount('index.php');
}
$purid = $_GET['purid'];

//-----------------------------

$sql = "SELECT p.* , c.first_name , c.last_name FROM purchase p INNER JOIN customer c on c.id = p.customer_id WHERE p.id = ".$purid;
$purchase = get($sql)[0];


//-----------------------------

$sql = "select pl.purchase_id, pl.product_id , p.name ,pl.sale_price , pl.amount
from purchase_list pl inner join product p on pl.product_id = p.id
where pl.purchase_id = ".$purid;
$cart = get($sql);

//echo '<pre>' ;
//var_dump($cart);

include('header.php');

//echo '<pre>';
//print_r($purchase);
//print_r($cart);

?>


	<br>
	<br>

<main class="col-4 m-auto text-white">
	
	
	<div class="text-center  rounded m-auto bg-info p-4  ">
		<h3>ใบเสร็จ</h3>
		<div class="d-flex justify-content-between ">
			<p >รหัสใบสั่งซื้อที่</p><p><?=$purchase['id']?></p>
		</div>
		<div class="d-flex justify-content-between">
			<p>วันที่สั่งซื้อ</p><p><?=$purchase['buy_date']?></p>
		</div>
		<h5>รายการสินค้าที่สั่งซื้อ</h3>
		<?php foreach($cart as $c ){
		?>
		
		<div class="d-flex justify-content-between">
			<p>รหัสสินค้า</p><p><?= $c['product_id']?></p>
		</div>
		<div class="d-flex justify-content-between">
			<p>ชื่อสินค้า</p><p><?=$c['name']?></p>
		</div>
		<div class="d-flex justify-content-between">
			<p>จำนวน</p><p><?=$c['amount']?></p>
		</div>
		
		<div class="d-flex justify-content-between">
			<p>ราคาสินค้า</p><p><?=$c['sale_price']?></p>
		</div>
		<div class="btn-block  bg-white m-2" style="height: 2px"></div>
		<?php } ?>
		
	</div>
	
	<div class="text-right bg-info text-white p-4 ">
		<p>ผู้ซื้อ : <?=$purchase['first_name']?> <?=$purchase['last_name']?></p>
		<p>ภาษี : <?=$purchase['vat']?> บาท</p>
		<p>ค่าจัดส่ง : <?=$purchase['shipping_price']?> บาท</p>
		<p class="">รวม : <?=$purchase['net_price']?>บาท</p>
	
	
</main>	


<br>
	<br>
	<br>
	<br>
	<br>


<?php include('footer.php');  ?>


