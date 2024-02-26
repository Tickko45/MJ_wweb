<?php session_start(); ?>
<?php require("Connect.php"); ?>
<?php 
$_SESSION['username'] = null;
$_SESSION['password'] = null;
$_SESSION['fullname'] = null;
session_destroy();
header("Location: login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<p>คุณได้ออกจากระบบเรียบร้อยแล้ว</p>
<p><a href="login.php">เข้าสู่ระบบใหม่</a></p>
</body>
</html>