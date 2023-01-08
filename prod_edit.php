<?php
include('db.php');
require('header.php');
//sellerAuth();
$sql = "select * from product where id = ".$_GET['pid'];
$pd = get($sql)[0];

?>

	<main class="p-5">
		<form action="prod_edit_save.php" method="post" enctype="multipart/form-data" class="m-auto col-5 p-4 alert-secondary rounded">
			<h4 > ร้าน <?=user('shop_name')?> </h4>
            <h5>แก้ไขรายการสินค้า</h5>
			<!--alert-->
			<?= alert(); ?>
			<div class="form-row">
                <p class="col">ชื่อสินค้า</p>
                <input class="col form-control" name="name" required type="text" value="<?=$pd['name']?>">
            </div>
            <div class="form-row">
                <p class="col">ราคา</p>
                <input class="col form-control" name="price" required type="number" value="<?=$pd['price']?>">
            </div> 
            
            <div class="form-row">
                <p class="col">รายละเอียด</p>
                <textarea class="col form-control" name="detail" rows="6" required type="text" value="<?=$pd['detail']?>"><?=$pd['detail']?></textarea>
            </div> 
            <div class="form-row">
                <p class="col">รูปภาพตัวอย่าง</p>
                <input class="col form-control" name="picture" type="file">
<!--                //old value-->
                <input class="col form-control" name="picval" type="hidden" value="<?=$pd['picture']?>">
            </div>       
        
            
            <div class="form-row">
                <p class="col">กว้าง</p>
                <input class="col form-control" name="box_width" required type="text" value="<?=$pd['box_width']?>">
            </div>
            <div class="form-row">
                <p class="col">สูง</p>
                <input class="col form-control" name="box_height" required type="text" value="<?=$pd['box_height']?>">
            </div>
            <div class="form-row">
                <p class="col">ยาว</p>
                <input class="col form-control" name="box_long" required type="text" value="<?=$pd['box_long']?>">
            </div>
            <div class="form-row">
                <p class="col">น้ำหนัก</p>
                <input class="col form-control" name="box_weight" required type="text" value="<?=$pd['box_weight']?>">
            </div> 
            <!--           hidden-->
            <input type="hidden" value="<?=user('id')?>" name="id">
            <input type="hidden" value="<?=$pd['id']?>" name="pid">
            
            <button class="btn btn-block btn-dark mt-3" type="submit">ยืนยันแก้ไขข้อมูล</button>
		</form>
	</main>

<?php
require('footer.php');
?>