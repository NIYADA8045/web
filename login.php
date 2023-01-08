<?php
include_once('db.php');
require('header.php');
//sellerAuth();
?>

	<main class="register p-5">
		
		<div class="m-auto col-5 p-4 alert-info rounded text-center">
			
			<h4> เข้าสู่ระบบ </h4>

			<!--alert-->
			<?= alert(); ?>
			<form class="" action="sell_auth.php" method="post">
					
					<input class="form-control mb-3" placeholder="รหัสผ่าน" name="password" value="" required type="password">
					
					<input class="form-control mb-3" placeholder="ยืนยันรหัสผ่าน" name="repassword" value="" required type="password">
					
					<button class="btn btn-block btn-dark" type="submit">ลงทเบียน</button>
			</form>
		</div>
	</main>

<?php
require('footer.php');
?>