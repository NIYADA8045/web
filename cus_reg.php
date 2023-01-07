<?php
include_once('db.php');
require('header.php');
//sellerAuth();
?>

	<main class="register p-5">
		
		<div class="m-auto col-5 p-4 alert-info rounded text-center">
			
			<h4>ร่วมลงขายสินค้ากับเรา</h4>
			
			<p>กรอกข้อมูลในช่องด้านล่างให้ครบถ้วน</p>
			
			<!--					alert-->
					<?= alert(); ?>
			<form class="" action="cus_reg_save.php" method="post">
				
				<div class="">
					
					<div class="form-row mb-3">
						<div class="col">
							<input class="form-control" placeholder="ชื่อจริง" name="first_name" value="" required type="text">
						</div>
						
						<div class="col">
						<input class="form-control" placeholder="นามสกุล" name="last_name" value="" required type="text"></div>
					</div>

					<input class="form-control mb-3" placeholder="ชื่อผู้ใช้งาน" name="username" value="" required type="text">
					
					<input class="form-control mb-3" placeholder="ชื่อร้าน" name="shop_name" value="" required type="text">
					
					<textarea class="form-control mb-3 "rows="5" placeholder="ที่อยู่" name="address" value="" required type="text"></textarea>
					
					<input class="form-control mb-3" placeholder="เบอร์โทรศัพทร์" name="phone" value="" required type="tel">
					
					<input class="form-control mb-3" placeholder="ชื่อใช้ติดต่อ" name="contact_name" value="" required type="text">
					
					<input class="form-control mb-3" placeholder="อีเมล" name="email" value="" required type="email">
					
					<input class="form-control mb-3" placeholder="เว็บไซต์" name="website" value="" required type="text">
					
					<input class="form-control mb-3" placeholder="รหัสผ่าน" name="password" value="" required type="password">
					
					<input class="form-control mb-3" placeholder="ยืนยันรหัสผ่าน" name="repassword" value="" required type="password">
					
					<button class="btn btn-block btn-dark" type="submit">ลงทเบียน</button>
				</div>
				
				
			</form>
		</div>
	</main>


	
	
	
	
	
	
	
	
	
	
	
	
	
	
<?php
require('footer.php');
?>