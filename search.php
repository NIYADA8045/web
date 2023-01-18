<?php include 'header.php'; ?>

<!-- alert  -->
<?= alertShow() ?>

<section class="p-5">
	<h4>รายการสินค้าที่ตรงกับคำค้นหา <strong>"<?= $_POST['keyword'] ?>"</strong></h4>

	<div>
		<?php
		$perpage = 20;
		$page = (empty($_GET['page'])) ? 1 : $_GET['page'];
		$start = $perpage * $page - $perpage; // (1*15)-20 = 0 , (2*15)-20 = 15 ;

		//เก็บค่าที่ input มาใส่ในตัวแปล $keyword
		$keyword = $_POST['keyword'];

		//เอา $keyword ไปเทียบกับคำในตารางสินค้า เขียนเป้นภาษา sql เก็บไว้ในตัวแปล sql
		$sql = "select * from product where name LIKE '%$keyword%' ";

		//select ข้อมุลเป็บ array เก็บไว้ในตัวแปล $all
		$all = get($sql);

		$pages = ceil(count($all) / $perpage);
		$sql .= " limit $start,$perpage ";
		$products = get($sql);

		foreach ($products as $p) {
		?>
			<div class="col-3">
				<div>
					<img src="upload_picture/<?= $p['picture'] ?>" height="150" width="150">
				</div>
				<div class="pt-1"> <?= $p['name'] ?> </div>

				<div class="py-2">
					<div class="tx-g">ราคา : <?= $p['price'] ?> บาท </div>
					<div class="">
						<?php
						if (user('type') != 'seller') {
						?>
							<a class="btn btn-block btn-info" href="cart_add.php?id=<?= $p['id'] ?>"> สั่งซื้อ</a>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		<?php
		}
		?>
	</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<nav>
		<ul class="pagination">
			<li class="page-item">
				<a class="page-link" href="index.php?page=1">
					<span aria-hidden="true">&laquo;</span>
					<span class="sr-only">Previous</span>
				</a>
			</li>
			<?php
			for ($i = 1; $i <= $pages; $i++) {
			?>
				<li class="page-item ml-1 mr-1"> <a class="page-link" href="index.php?page=<?= $i ?>"> <?= $i ?> </a> </li>
			<?php
			}
			?>
			<li class="page-item">
				<a class="page-link" href="index.php?page=<?= $lastpage ?>" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
					<span class="sr-only">Next</span>
				</a>
			</li>
		</ul>
	</nav>
</section>


<?php
include 'footer.php';
?>