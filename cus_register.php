
<?php include_once('db.php') ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
</head>

<body>
  	
	  <main class="p-5">
	  	<section class="">
			<?=alertShow()?>
			<div class="m-auto col-5 text-center ">
	  			<h4 class="mb-3 m-4 text-center">สมัครสมาชิก</h4>
				  <form class="mb-3  "  action="cus_register_save.php" method="post">
					  <input class="form-control mb-3 " name="username" type="text" placeholder="Username" required>
					  <input class="form-control mb-3  " name="password" type="password" placeholder="Password " required>
					  <input class="form-control mb-3  " name="first_name" type="text" placeholder="Firstname" required>
					  <input class="form-control mb-3  " name="last_name" type="text" placeholder="Lastname" required>
					  <input class="form-control mb-3  " name="phone" type="text" placeholder="Tel" required>
					  <input class="form-control mb-3  " name="email" type="email" placeholder="Email" required>

					  <button class="btn btn-dark btn-block   " type="submit">บันทึก</button>

				  </form>
	  		</div>
		</section>
	  </main>
	  

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.3.1.js"></script>
  </body>
</html>

<?php
unset($_SESSION['alert_message']);
unset($_SESSION['alert_class']);

?>