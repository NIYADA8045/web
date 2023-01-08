<?php
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
                  <th>รหัสใบสั่งซื้อสินค้า</th>
                  <th>วันที่สั่งซื้อ</th>
                  <th>ชื่อผู้สั่งซื้อ</th>
                  <th>ราคารวม</th>
                <th>&nbsp;</th>    
                </tr>
              </thead>
                <tbody>
                    <?php
//                    print_r($_SESSION['user']);
                    $sql = "select l.purchase_id
                            from purchase_list l 
                            inner join product p on p.id = l.product_id
                            inner join seller s on s.id = p.seller_id
                            where s.id = ".user('id');
                    
                    $purchase_list = get($sql);

                    $purids = [];
                    foreach($purchase_list as $p){
                        array_push($purids,$p['purchase_id']);	
                    }

                    $purids = implode(',',$purids);

                    $sql = "select p.* , c.first_name , c.last_name 
                            from purchase p
                            inner join customer c on c.id = p.customer_id 
                            where p.id in ($purids s)";
                    $purchase = get($sql);
                    
                    $pd = get($sql);
                    
                    foreach($pd as $p){
                    ?>
                    <tr>
                        <th><?= $p['purchase_id'] ?></th>
                        <th><?= $p['buy_date'] ?></th>
                        <th><?= $p['name'] ?></th>
                        <th><?= $p['total'] ?></th>
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