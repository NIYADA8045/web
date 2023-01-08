<?php
include('db.php');
require('header.php');
//sellerAuth();
?>

	<main class="p-5">
		<form action="sell_ed_save.php" method="post" class="m-auto col-5 p-4 alert-secondary rounded ">
			<h4 > ร้าน <?=user('shop_name')?> </h4>
			<!--alert-->
			<?= alert(); ?>
			<div class="form-row">
                <p class="col">ชื่อร้าน</p>
                <input class="col form-control" name="shop_name" value="<?= user('shop_name')?>">
            </div>
            <div class="form-row">
                <p class="col">ชื่อผู้ใช้</p>
                <input class="col form-control" name="username" value="<?= user('username')?>">
            </div>
            <div class="form-row">
                <p class="col">ที่อยู่</p>
                <input class="col form-control" name="address" value="<?= user('address')?>">
            </div>
            <div class="form-row">
                <p class="col">เบอร์</p>
                <input class="col form-control" name="phone" value="<?= user('phone')?>">
            </div>
            <div class="form-row">
                <p class="col">ชื่อสำหรับติดต่อ</p>
                <input class="col form-control" name="contace_name" value="<?= user('contace_name')?>">
            </div>
            <div class="form-row">
                <p class="col">อีเมล</p>
                <input class="col form-control" name="email" value="<?= user('email')?>">
            </div>
            <div class="form-row">
                <p class="col">รหัสผ่าน</p>
                <input class="col form-control" name="password" value="<?= user('password')?>">
            </div>
            <div class="form-row">
                <p class="col">เว็บไซต์</p>
                <input class="col form-control" name="website" value="<?= user('website')?>">
            </div>
            <!--           hidden-->
            <input type="hidden" value="seller" name="type">
            <input type="hidden" value="<?=user('id')?>" name="id">
            <button class="btn btn-block btn-dark mt-3" type="submit">ยืนยันแก้ไขข้อมูล</button>
		</form>
	</main>

<?php
require('footer.php');
?>