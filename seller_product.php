<?php
include 'header.php';
sellerAuth();
?>
<!-- //main  -->
<main class="p-5">
    <h4>สินค้าร้าน <?= user('shop_name') ?></h4>
    <table class="table m-auto">
        <thead>
            <th>รหัสสินค้า</th>
            <th>ชื่อ</th>
            <th>รูปภาพ</th>
            <th>ลายระเอียด</th>
            <th>กว้าง</th>
            <th>สูง</th>
            <th>ยาว</th>
            <th>น้ำหนัก</th>
            <th>&nbsp;</th>
        </thead>

        <tbody>
            <?php
            $uid = user('id');
            $pd = get("select * from product where seller_id = '{$uid}'");
            foreach($pd as $p){
            ?>
                <tr>
                    <td> <?= $p['id'] ?> </td>
                    <td> <?= $p['name'] ?></td>
                    <td> <img src="img/<?= $p['picture'] ?>" height="60"></td>
                    <td> <?= $p['detail'] ?></td>
                    <td> <?= $p['box_width'] ?></td>
                    <td> <?= $p['box_height'] ?></td>
                    <td> <?= $p['box_long'] ?></td>
                    <td> <?= $p['box_weight'] ?></td>
                    <td>
                        <a class="btn btn-block btn-primary">แก้ไขสินค้า</a>
                        <a class="btn btn-block btn-danger">ลบ</a>
                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
    <div class="col-3">
        <a href="seller_product_add.php" class="btn block btn-primary">เพิ่มสินค้า</a>
    </div>
</main>

<?php
include 'footer.php'
?>