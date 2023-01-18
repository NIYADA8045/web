<?php include('db.php');
 	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>e-commerce</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
	
  </head>
  <body>
  	 <?php include('header.php')  ?>
	  <main class="p-5">
	  	<section class="">
			<?=alertShow()?>
			<div class="m-auto col-5 text-center ">
	  			<h4 class="mb-3 m-4 text-center">ข้อมูลลูกค้า</h4>
				  <form class="mb-3  "  action="cus_profile_edit.php" method="post">
					  <input type="hidden" name="id" value="<?=user('id')?>">
					  <input class="form-control mb-3 " name="username" type="text" placeholder="Username"  required value="<?=user('username')?>" >
					  <input class="form-control mb-3  " name="password" type="text" placeholder="Password " required value="<?=user('password')?>">
					  <input class="form-control mb-3  " name="first_name" type="text" placeholder="Firstname" required value="<?=user('first_name')?>">
					  <input class="form-control mb-3  " name="last_name" type="text" placeholder="Lastname" required value="<?=user('last_name')?>">
					  <input class="form-control mb-3  " name="phone" type="text" placeholder="Tel" required value="<?=user('phone')?>">
					  <input class="form-control mb-3  " name="email" type="email" placeholder="Email" required value="<?=user('email')?>">

					  <button  class="btn btn-dark btn-block   " type="submit" >แก้ไข</button>

				  </form>
	  		</div>
		</section>
	  </main>
	 
<!--
		<?php
	   var_dump($_SESSION);
	  ?>
-->
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
