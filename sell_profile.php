<?php
include_once('db.php');
require('header.php');
//sellerAuth();
?>

	<main class="p-5">
		<div class="m-auto col-5 p-4 alert-secondary rounded ">
			<h4 > ร้าน <?=user('shop_name')?> </h4>
			<!--alert-->
			<?= alert(); ?>
			<div class="form-row">
                <p class="col">ชื่อร้าน</p>
                <p class="col"><?= user('shop_name')?></p>
            </div>
            <div class="form-row">
                <p class="col">ชื่อผู้ใช้</p>
                <p class="col"><?= user('username')?></p>
            </div>
            <div class="form-row">
                <p class="col">ที่อยู่</p>
                <p class="col"><?= user('address')?></p>
            </div>
            <div class="form-row">
                <p class="col">เบอร์</p>
                <p class="col"><?= user('phone')?></p>
            </div>
            <div class="form-row">
                <p class="col">ชื่อสำหรับติดต่อ</p>
                <p class="col"><?= user('contace_name')?></p>
            </div>
            <div class="form-row">
                <p class="col">อีเมล</p>
                <p class="col"><?= user('email')?></p>
            </div>
            <div class="form-row">
                <p class="col">รหัสผ่าน</p>
                <p class="col"><?= user('password')?></p>
            </div>
            <div class="form-row">
                <p class="col">เว็บไซต์</p>
                <p class="col"><?= user('website')?></p>
            </div>
            <a class="btn btn-block btn-dark" href="sell_profile_edit.php">แก้ไขข้อมูล</a>
		</div>
	</main>

<?php
require('footer.php');
?>