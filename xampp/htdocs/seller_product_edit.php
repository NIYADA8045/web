<?php
include 'header.php';
sellerAuth();
?>
<!-- //main  -->
<main class="p-5">
    <form class="register p-5" action="seller_product_edit_save.php" method="POST" enctype="multipart/form-data" >
        <h4>เพิ่มสินค้า ร้าน<?= user('shop_name') ?></h4>
        
        <!-- //alert -->
        <?php 
            alertshow();
            $p = get("select * from product where id = '{$_GET['pid']}'")[0];
        ?>
        
        <div class="mb-2 row">
            <div class="col">
                <span>ชื่อสินค้า</span>
            </div>
            <input class="col form-control" name="name" required type="text" value="<?= $p['name'] ?>">
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>ราคา</span>
            </div>
            <input class="col form-control" name="price" required type="number"  value="<?= $p['price'] ?>">
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>รูปภาพ</span>
            </div>

            <input type="file" class="col form-control" name="picture">
           
            <input type="hidden" class="col form-control" name="picturetmp" value="<?= $p['picture'] ?>">
            
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>รายละเอียด</span>
            </div>
            <textarea class="col form-control" name="detail" rows="5" ><?= $p['detail'] ?></textarea>
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>กว้าง</span>
            </div>
            <input class="col form-control" name="box_width" required type="text" value="<?= $p['box_width'] ?>">
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>สูง</span>
            </div>
            <input class="col form-control" name="box_height" required type="text" value="<?= $p['box_height'] ?>">
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>ยาว</span>
            </div>
            <input class="col form-control" name="box_long" required type="text" value="<?= $p['box_long'] ?>">
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>น้ำหนัก</span>
            </div>
            <input class="col form-control" name="box_weight" required type="text" value="<?= $p['box_weight'] ?>">
           
        </div>

        <!-- uid -->
        <input required type="hidden" name="pid" value="<?= $p['id'] ?>">
        <input required type="hidden" name="id" value="<?= user('id')?>">
        
        <div>
            <button type="submit" class="btn btn-block btn-dark">แก้ไขสินค้า</button>
        </div>
    </form>

</main>

<?php
include 'footer.php';
?>