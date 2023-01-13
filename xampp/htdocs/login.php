<?php
include 'header.php';
?>

<!-- //main  -->
<main class="p-5">
    <div class="register col-5 p-5 alert-info rounded m-auto text-center">
        <h4>เข้าสู่ระบบ</h4>
        <!-- //alert -->
        <?= alertShow() ?>
        <form action="auth.php" method="POST">
            <div class="mb-2">
                <input class="form-control" name="username" required placeholder="ชื่อผู้ใช้">
            </div>
            <div class="mb-2">
                <input class="form-control" name="password" required placeholder="รหัสผ่าน">
            </div>
            <button class="btn btn-block btn-dark">เข้าสู่ระบบ</button>
        </form>
    </div>
</main>

<?php
include 'footer.php'
?>