<?php
require('header.php');
sellerAuth();
?>

	<main class="p-5">
		<form action="prod_add_save.php" method="post" enctype="multipart/form-data" class="m-auto col-5 p-4 alert-secondary rounded">
			<h4 > ร้าน <?=user('shop_name')?> </h4>
            <h5>เพื่มรายการสินค้า</h5>
			<!--alert-->
			<?= alert(); ?>
			<div class="form-row">
                <p class="col">ชื่อสินค้า</p>
                <input class="col form-control" name="name" required type="text">
            </div>
            <div class="form-row">
                <p class="col">ราคา</p>
                <input class="col form-control" name="price" required type="number">
            </div> 
            
            <div class="form-row">
                <p class="col">รายละเอียด</p>
                <textarea class="col form-control" name="detail" rows="6" required type="text"></textarea>
            </div> 
            <div class="form-row">
                <p class="col">รูปภาพตัวอย่าง</p>
                <input class="col form-control" name="picture" required type="file">
            </div>       
        
            
            <div class="form-row">
                <p class="col">กว้าง</p>
                <input class="col form-control" name="box_width" required type="text">
            </div>
            <div class="form-row">
                <p class="col">สูง</p>
                <input class="col form-control" name="box_height" required type="text">
            </div>
            <div class="form-row">
                <p class="col">ยาว</p>
                <input class="col form-control" name="box_long" required type="text">
            </div>
            <div class="form-row">
                <p class="col">น้ำหนัก</p>
                <input class="col form-control" name="box_weight" required type="text">
            </div> 
            <!--           hidden-->
            <input type="hidden" value="<?=user('id')?>" name="id">
            <button class="btn btn-block btn-dark mt-3" type="submit">ลงขาสินค้า</button>
		</form>
	</main>

<?php
require('footer.php');
?>