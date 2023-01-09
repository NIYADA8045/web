<?php
include 'header.php';
sellerAuth();
?>
<!-- //main  -->
<main class="p-5">
    <form class="register p-5 alert-info" action="seller_profile_edit_save.php" method="POST">
        <h4>แก้ไขข้อมูล ร้าน <?= user('shop_name') ?></h4>
        
        <!-- //alert -->
        <?= alertshow() ?>

        <div class="mb-2 row">
            <div class="col">
                <span>ชื่อร้าน</span>
            </div>
            <input class="col form-control" value="<?= user('shop_name') ?>" name="shop_name">
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>ชื่อผู้ใช้</span>
            </div>
            <input class="col form-control" value="<?= user('username') ?>" name="username">
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>ชื่อจริง</span>
            </div>
            <input class="col form-control" value="<?= user('contace_name') ?>" name="contace_name">
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>ที่อยู่</span>
            </div>
            <input class="col form-control" value="<?= user('address') ?>" name="address">
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>เบอร์</span>
            </div>
            <input class="col form-control" value="<?= user('phone') ?>" name="phone">
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>อีเมล</span>
            </div>
            <input class="col form-control" value="<?= user('email') ?>" name="email">
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>เว็บไซต์</span>
            </div>
            <input class="col form-control" value="<?= user('website') ?>" name="website">
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>รหัสผ่าน</span>
            </div>
            <input class="col form-control" value="<?= user('password') ?>" name="password">
        </div>

        <!-- uid -->
        <input type="hidden" value="<?= user('id') ?>" name="id">
        <div>
            <button type="submit" href="seller_profile_edit.php" class="btn btn-block btn-dark">แก้ไขข้อมูล</button>
        </div>
    </form>

</main>

<?php
include 'footer.php'
?>