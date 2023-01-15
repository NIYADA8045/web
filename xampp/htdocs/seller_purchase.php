<?php
include 'header.php';
sellerAuth();

$sql = "SELECT pl.purchase_id from purchase_list pl
        inner join product p on p.id = pl.product_id
        inner join seller s on s.id = p.seller_id
        where s.id = ". user('id');
//1pl = 13
$pl = get($sql);
$purids = [];
foreach ($pl as $p) {
  array_push(purids,$p['purchase_id']);
}
$purids = implode(',',$purids);

$sql = "SELECT p.* , c.first_name, c.last_name
        from purchase p
        inner join customer c on c.id = p.customer_id
        where p.id in ($purids)";

//ex => 13, 14, 15, 16
$purchase = get($sql);
//ex pusrchase <=> fistname,lastname
?>
<!-- //main  -->
<main class="p-5">
    <h4>รยการใบสั่งซื้อ ร้าน : <?= user('shop_name') ?></h4>
    <table class="table table-bordered">
      <thead>
        <th>เลขที่ใบสั่งซื้อ</th>
        <th>วันที่สั่งซื้อ</th>
        <th>ยอเงินสุทธิ</th>
        <th>ดูใบสั่งซื้อ</th>
      </thead>
      <tbody>
        <?php
        foreach ($purchase as $p) {
          ?>
            <tr>
              <td><?= $p['id'] ?></td>
              <td><?= $p['buy_date'] ?></td>
              <td><?= $p['net_price'] ?></td>
              <td> <a href="seller_purchase_detail.php?id=<?= $p['id'] ?>"> ดูใบสั่งซื้อ </a> </td>
            </tr>
          <?php
        }
         ?>
      </tbody>
    </table>
</main>

<?php
include 'footer.php'
?>
