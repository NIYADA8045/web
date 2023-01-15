<?php
include 'header.php';
sellerAuth();
if ( empty($_GET['id'])) {
  rount('seller_purchase.php');
}

$sql = "SELECT p.* , c.first_name, c.last_name
        from purchase p
        inner join customer c on c.id = p.customer_id
        where p.id = ".$_GET['id'];

$purchase = get($sql)[0];

$sql = "SELECT * from purchase_list pl
        inner join product p = p.id = pl.product_id
        where p.seller_id = ".user('id')." and pl.purchase_id = ".$_GET['id'];

$cart = get($sql);
?>
<!-- //main  -->
<main class="p-5">
<div class="container">
    <h4>ใบสั่งซื้อ ร้าน : <?= user('shop_name') ?></h4>
    <div class="row">
        <div class="col">เลขที่ใบสั่งซื้อ</div>
        <div class="col"><?= $purchase['id'] ?></div>
    </div>
    <div class="row">
        <div class="col">วันที่สั่งซ์้อ</div>
        <div class="col"><?= $purchase['buy_date'] ?></div>
    </div>
    <div class="row">
        <div class="col">ผู้ซื้อ</div>
        <div class="col"><?= $purchase['first_name'].' '.$purchase['last_name'] ?></div>
    </div>

    <table class="table table-bordered">
      <thead>
        <th>รหัสสินค้า</th>
        <th>ชื่อสินค้า</th>
        <th>ราคา</th>
        <th>จำนวน</th>
        <th>ราคารวม</th>
      </thead>
      <tbody>
      <?php
      foreach ($cart as $c) {
        ?>
        <td><?= $c['purchase_id'] ?></td>
        <td><?= $c['name'] ?></td>
        <td><?= $c['price'] ?></td>
        <td><?= $c['amount'] ?></td>
        <td><?= $c['total'] ?></td>
        <?php
      }
      ?>
      </tbody>
    </table>
    <div class="row">
        <div class="col">ราคารวม</div>
        <div class="col"><?= $purchase['total'] ?></div>
    </div>
    <div class="row">
        <div class="col">ภาษี 7%</div>
        <div class="col"><?= $purchase['vat'] ?></div>
    </div>
    <div class="row">
        <div class="col">ค่าจัดส่ง</div>
        <div class="col"><?= $purchase['shipping_price'] ?></div>
    </div>
    <div class="row">
        <div class="col">ราคาสุทธิ</div>
        <div class="col"><?= $purchase['net_price'] ?></div>
    </div>
</div>
</main>

<?php
include 'footer.php'
?>
s
