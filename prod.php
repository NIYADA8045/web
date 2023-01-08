<?php
include('db.php');
require('header.php');
//sellerAuth();
?>
	<main class="p-5">
		<div class="m-auto p-4">
			<h4 > ร้าน <?=user('shop_name')?> </h4>
			<!--alert-->
			<?= alert(); ?>
            
			<table class="table table-striped">
              <thead>
                <tr>
                  <th>รหัสสินค้า</th>
                  <th>ชื่อสินค้า</th>
                  <th>ราคา</th>
                  <th>รูปภาพตัวอย่าง</th>
                  <th>รายละเอียดสินค้า</th>
                  <th>กว้าง</th>
                  <th>สูง</th>
                  <th>ยาว</th>
                  <th>น้ําหนัก</th>
                  <th>&nbsp;</th>
                </tr>
              </thead>
                <tbody>
                    <?php
                    $sql = "select * from product where seller_id = ".user('id');
                    $pd = get($sql);
                    
                    foreach($pd as $p){
                    ?>
                    <tr>
                        <th><?= $p['id'] ?></th>
                        <th><?= $p['name'] ?></th>
                        <th><?= $p['price'] ?></th>
                        <th><img src="productimg/<?=$p['picture']?>" height="100px" width="100px"></th>
                        <th><?= $p['detail'] ?></th>
                        <th><?= $p['box_width'] ?></th>
                        <th><?= $p['box_height']?></th>
                        <th><?= $p['box_long']?></th>
                        <th><?= $p['box_weight']?></th>
                        <th>
                            <div class="">
                            <a class="btn btn-danger col mb-3" href="prod_delete.php?pid=<?=$p['id']?>">Delete</a>
                            <a class="btn btn-primary col" href="prod_edit.php?pid=<?=$p['id']?>">Edit</a>
                            </div>
                        </th>
                        
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            
              <a href="prod_add.php" class="btn btn-success mb-3">เพิ่มสินค้า</a>
		</div>
      
	</main>

<?php
require('footer.php');
?>