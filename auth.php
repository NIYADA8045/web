<?php
include_once('db.php');

$sellRel = get("select * from seller where username = '{$_POST['username']}' and password = '{$_POST['password']}' ");

//custommer เขียนในfile นี้เลยเหมือนกันให้ Elseif เอา

if(count($sellRel) == 1)
{
    $_SESSION['alert_message'] = 'susess';
    $_SESSION['user'] = $sellRel[0];
    $_SESSION['user']['type'] = "seller";
    $_SESSION['auth'] = true;
    var_dump($_SESSION['user']);
    exit;
    rount('login.php');
}
else
{
    sessAlt("alert-danger","username หรือ password ไม่ถูกต้อง","login.php");
}

?>