<?php
include 'header.php';
?>
<!-- //main  -->
<main class="p-5">
    <div class="register p-5 alert-info">
        <h4>ร่วมลงขายสินค้า</h4>
        <!-- //alert -->
        
        <?= alertShow() ?>
        <form action="seller_register_save.php" method="post">
            <div class="mb-2">
                <input class="form-control" name="username" required placeholder="ชื่อผู้ใช้">
            </div>
            <div class="mb-2">
                <input class="form-control" name="shop_name" required placeholder="ชื่อร้าน">
            </div>
            <div class="mb-2">
                <input class="form-control" name="contace_name" required placeholder="ชื่อจริง">
            </div>
            <div class="mb-2">
                <textarea class="form-control" name="address" required placeholder="ที่อยู่" rows="5"></textarea>
            </div>
            
            <div class="mb-2">
                <input class="form-control" name="phone" required placeholder="เบอร์">
            </div>
            <div class="mb-2">
                <input class="form-control" name="email" required placeholder="อีเมล">
            </div>
            <div class="mb-2">
                <input class="form-control" name="website" required placeholder="เว็บไซต์">
            </div>
            <div class="mb-2">
                <input class="form-control" name="password" required placeholder="รหัสผ่าน">
            </div>
            <div class="mb-2">
                <input class="form-control" name="repassword" required placeholder="ยืนยันรหัสผ่าน">
            </div>
            <div>
                <button class="btn btn-block btn-dark" type="submit">ลงทะเบียน</button>
            </div>
        </form>
    </div>
</main>

<?php
include 'footer.php'
?>