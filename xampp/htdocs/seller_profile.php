<?php
include 'header.php';
sellerAuth();
?>
<!-- //main  -->
<main class="p-5">
    <div class="register p-5 alert-info">
        <h4>ร้าน <?= user('shop_name') ?></h4>
        <!-- //alert -->
        <div class="mb-2 row">
            <div class="col">
                <span>ชื่อร้าน</span>
            </div>
            <span class="col"><?= user('shop_name') ?></span>
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>ชื่อผู้ใช้</span>
            </div>
            <span class="col"><?= user('username') ?></span>
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>ชื่อจริง</span>
            </div>
            <span class="col"><?= user('contace_name') ?></span>
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>ที่อยู่</span>
            </div>
            <span class="col"><?= user('address') ?></span>
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>เบอร์</span>
            </div>
            <span class="col"><?= user('phone') ?></span>
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>อีเมล</span>
            </div>
            <span class="col"><?= user('email') ?></span>
        </div>
        <div class="mb-2 row">
            <div class="col">
                <span>รหัสผ่าน</span>
            </div>
            <span class="col"><?= user('password') ?></span>
        </div>

        <div>
            <a href="seller_profile_edit.php" class="btn btn-block btn-dark">แก้ไขข้อมูล</a>
        </div>
    </div>

</main>

<?php
include 'footer.php'
?>