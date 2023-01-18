<?php
include_once "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BEKIE</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/main.css">
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-light bg-light">

        <div class="">
            <a class="nav-item nav-link" href="index.php">ECOMMERCE</a>
        </div>

        <div>
            <a href="index.php">หน้าแรก</a>

            <?php

            // $_SESSION['auth'] คือ เอาไว้เช็คว่า user มีสถานะเป็น login อยู่หรือเปล่า
            // Session นี้จะถูกส่งมาถ้า user ไป login เข้าส้ระบบมาแล้ว
            // คำสั่ง isset คือ เอาไว้เช็คว่ามีตัวแปลนี้ประกาศมาหรือปล่าว ถ้า $_SESSION['auth'] 
            // มีการประกาศมา จะเข้าเงื่อนไขแรก
            if (isset($_SESSION['auth'])) {

                // ifที่ 2 นี้คือ ถ้า ปรถเภท user คือ ผู้ซื้อ หรือ custommer จะแสดงหน้าเมนูข้างใน if ตัวนี้

                //ถ้าลง else แสดงว่า user type คือ ผู้ขาย หรือ seller จะแสดงเมนูที่อยู่ใน else
                if (user('type') == 'customer') {
            ?>
                    <a href="cus_profile.php" class="">ข้อมูลลูกค้า</a>
                    <a href="cart_detail.php" class="">รายการใบสั่งซื้อ</a>
                    <a href="cart.php" class="">ตะกร้าสินค้า</a>
                <?php
                } else {
                ?>
                    <a href="seller_profile.php" class="">ข้อมูลร้านค้า</a>
                    <a href="seller_purchase.php" class="">รายการใบสั่งซื้อ</a>
                    <a href="seller_product.php" class="">สินค้า</a>
            <?php
                }
            }
            ?>

        </div>


        <div>

            <?php

            // เช็คว่า session auth หรือ สถานะ login ถูกประกาศมาหรือเปล่า ถ้ามีแสดงว่ามี การ login เข้าสู่ระบบมาแล้ว

            //ถ้ามีสถานะ login มาจริง ในส่วนตัวลิ้งด้านขวา ให้แสเง ปุ่ม login และชื่อผู้ใช้เท่านั้น		

            //ถ้าลง else ก็แสดงว่า ตัว session auth ไม่มีการประกาศมา หรือ ไมได้มีการ login นัั้นเอง และจะแสดง ลิ้ง ที่อยู่ใน else
            if (isset($_SESSION['auth'])) {
            ?>
                <span class=""><?= user('username'); ?></span>
                <a href="logout.php" class=" ">ออกจากระบบ</a>
            <?php
            } else {
            ?>
                <a href="register_customer.php" class="mr-4">ร่วมลงขาย</a>
                <a href="cus_register.php" class="mr-4">ลงทะเบียนซื้อสินค้า</a>
                <a href="login.php">ลงชื่อเข้าใช้</a>
            <?php
            }
            ?>
        </div>

    </nav>