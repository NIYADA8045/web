<?php
include 'header.php';
sellerAuth();
?>
<!-- //main  -->
<main class="p-5">
    <h4>สินค้าร้าน <?= user('shop_name') ?></h4>
    <form action="seller_product_delete.php" method="POST">
    <table class="table m-auto">
        <thead>
            <tr>
                <th><input name="id[]" type="checkbox" onclick="this" ></th>
                <th>รหัสสินค้า</th>
                <th>ชื่อ</th>
                <th>รูปภาพ</th>
                <th>ลายระเอียด</th>
                <th>กว้าง</th>
                <th>สูง</th>
                <th>ยาว</th>
                <th>น้ำหนัก</th>
                <th>&nbsp;</th>
               </tr>
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
                        <a class="btn btn-block btn-primary" href="seller_product_edit.php?pid=<?=$p['id']?>">แก้ไขสินค้า</a>
                        <a class="btn btn-block btn-danger" href="seller_product_delete.php?pid=<?=$p['id']?>">ลบ</a>
                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
        <div class="row">
            <div class="col">
                <button class="btn block btn-primary" type="submit">ลบสินค้า</button>
            </div>
            <div class="col">
                <a href="seller_product_add.php" class="btn block btn-primary">เพิ่มสินค้า</a>
            </div>
        </div>
    </form>
</main>

<?php
include 'footer.php'
?>
