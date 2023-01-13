<?php
include 'header.php';
sellerAuth();
?>
<!-- //main  -->
<main class="p-5">
    <form class="register p-5 alert-info" action="seller_product_add_save.php" method="POST" enctype="multipart/form-data" >
        <h4>เพิ่มสินค้า ร้าน<?= user('shop_name') ?></h4>
        
        <!-- //alert -->
        <?= alertshow() ?>

        <div class="mb-2 row">
            <div class="col">
                <span>ชื่อสินค้า</span>
            </div>
            <input class="col form-control" name="name" required type="text">
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>ราคา</span>
            </div>
            <input class="col form-control" name="price" required type="number">
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>รูปภาพ</span>
            </div>
            <input required type="file" class="col form-control" name="picture">
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>รายละเอียด</span>
            </div>
            <textarea class="col form-control" name="detail" rows="5"></textarea>
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>กว้าง</span>
            </div>
            <input class="col form-control" name="box_width" required type="text">
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>สูง</span>
            </div>
            <input class="col form-control" name="box_height" required type="text">
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>ยาว</span>
            </div>
            <input class="col form-control" name="box_long" required type="text">
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>น้ำหนัก</span>
            </div>
            <input class="col form-control" name="box_weight" required type="text">
        </div>


        <!-- uid -->
        <input required type="hidden" name="id">
        <div>
            <button type="submit" class="btn btn-block btn-dark">เพิ่มสินค้า</button>
        </div>
    </form>

</main>

<?php
include 'footer.php'
?>