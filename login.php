<?php
include('db.php');
require('header.php');
//sellerAuth();
?>

	<main class="p-5">
		<div class="m-auto col-5 p-4 alert-primary rounded text-center">
			<h4> เข้าสู่ระบบ </h4>
			<!--alert-->
			<?= alert(); ?>
			<form action="auth.php" method="post">
					<input class="form-control mb-3" placeholder="ชื่อผู้ใช้" name="username" value="" required type="text">
					
					<input class="form-control mb-3" placeholder="รหัสผ่าน" name="password" value="" required type="password">
					
					<button class="btn btn-block btn-dark" type="submit">เข้าสู่ระบบ</button>
			</form>
		</div>
	</main>

<?php
require('footer.php');
?>