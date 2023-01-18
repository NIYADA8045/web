<?php  
include('db.php'); 
if(empty($_SESSION['cart'])){
	$_SESSION['alert_message'] = "ยังไม่มีสินค้าในตระกร้า";
	$_SESSION['alert_class'] = 'warning';
}

$cart = $_SESSION['cart'] ?? [];
$_SESSION['cart_sum']['total'] = $_SESSION['cart_sum']['total'] ?? '0';
$_SESSION['cart_sum']['vat'] = $_SESSION['cart_sum']['vat'] ?? '0';
$_SESSION['cart_sum']['shipping'] = $_SESSION['cart_sum']['shipping'] ?? '0';
$_SESSION['cart_sum']['net'] = $_SESSION['cart_sum']['net'] ?? '0';


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
</head>

<body>
	<?php include('header.php');  ?>
	<main class="p-5">
		<?= alertShow() ?>
		<h4>ตะกร้าสินค้า</h4>
		<form action="cart_update.php" method="post">
			<div>
				<table class="table table-bordered table-hover">
					<tr>
						<th>รหัสสินค้า</th>
						<th>ชื่อสินค้า</th>
						<th>ราคา</th>
						<th>จำนวน</th>
						<th>ราคารวม</th>
					</tr>
					<?php
					foreach( $cart as $c){

					?>

					<tr>
						<td><?=$c['id']?></td>
						<td><?=$c['name']?></td>
						<td><?=$c['price']?></td>
						<td> <input name="amount[<?=$c['id']?>]" value="<?=$c['amount']?>" ></td>
						<td><?=$c['sum']?></td>
						<td><a href="cart_delete" class="btn btn-danger" >ลบ</a></td>
						
					</tr>

					<?php
					}
					?>
					
					
				</table>
			</div>
			<?php
			if(empty($_SESSION['cart'])){
			
			?>
			<div class="row">
				<button type="submit" class="btn btn-primary">คำนวณราคาไหม่</button> &nbsp;&nbsp;&nbsp;
				<a href="" class="btn btn-success">ยืนยันคำสั่งซื้อ</a>
			</div>
			<?php }else{ ?>
			
			<div class="row">
				<button type="submit" class="btn btn-primary">คำนวณราคาไหม่</button> &nbsp;&nbsp;&nbsp;
				<a href="cart_comfirm.php?pid=$c['id']" class="btn btn-success">ยืนยันคำสั่งซื้อ</a>
			</div>
			
			<?php }  ?>		
		</form>
		
		
		
	
	
	
	</main>
	
		<div class="col-8 m-auto">
			<table class="table table-bordered table-hover">
			
				<tr>
					<th>ราคารวม</th>
					<th>ภาษี 7%</th>
					<th>ค่าขนส่ง</th>
					<th>ราคาสุทธิ</th>
				</tr>
				<tr>
					<td><?=$_SESSION['cart_sum']['total']?></td>
					<td><?=$_SESSION['cart_sum']['vat']?></td>
					<td><?=$_SESSION['cart_sum']['shipping']?></td>
					<td><?=$_SESSION['cart_sum']['net']?></td>
				</tr>
				
			</table>
	
	
	
		</div> 
	
	
		<?php
//	echo '<pre>';
//	var_dump($_SESSION['cart']);
						
	?>
	
	
	
	
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.3.1.js"></script>
</body>
</html>

<?php
unset($_SESSION['alert_message']);
unset($_SESSION['alert_class']);

?>