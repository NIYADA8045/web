<?php
include_once('db.php');
require('header.php');
//sellerAuth();
?>

	<main class="p-5">
		<form action="sell_ed_save.php" class="m-auto col-5 p-4 alert-secondary rounded ">
			<h4 > ร้าน <?=user('shop_name')?> </h4>
			<!--alert-->
			<?= alert(); ?>
			<div class="form-row">
                <p class="col">ชื่อร้าน</p>
                <input class="col form-control" value="<?= user('shop_name')?>">
            </div>
            <div class="form-row">
                <p class="col">ชื่อผู้ใช้</p>
                <input class="col form-control" value="<?= user('username')?>">
            </div>
            <div class="form-row">
                <p class="col">ที่อยู่</p>
                <input class="col form-control" value="<?= user('address')?>">
            </div>
            <div class="form-row">
                <p class="col">เบอร์</p>
                <input class="col form-control" value="?= user('phone')?>">
            </div>
            <div class="form-row">
                <p class="col">ชื่อสำหรับติดต่อ</p>
                <input class="col form-control" value="<?= user('contace_name')?>">
            </div>
            <div class="form-row">
                <p class="col">อีเมล</p>
                <input class="col form-control" value="<?= user('email')?>">
            </div>
            <div class="form-row">
                <p class="col">รหัสผ่าน</p>
                <input class="col form-control" value="<?= user('password')?>">
            </div>
            <div class="form-row">
                <p class="col">เว็บไซต์</p>
                <input class="col form-control" value="<?= user('website')?>">
                
            </div>
            <button class="btn btn-block btn-dark">แก้ไขข้อมูล</button>
		</form>
	</main>

<?php
require('footer.php');
?>