<?php session_start(); ?>
<?php require("Connect.php"); ?>
<?php
if(isset($_POST["username"]) && isset($_POST["password"])){
	$username= $_POST["username"];
	$password= $_POST["password"];
	

$sql = "SELECT * FROM t_admin WHERE username ='$username' AND password ='$password'";
	
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();		
		$_SESSION['username']= $row["username"];
		$_SESSION['password']= $row["password"];
		$_SESSION['fullname']= $row["fullname"];
		header("Location: index.php");	
	}else{
		header("Location: login_fail.php");
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Login.css">
    <title>Login</title>
</head>

<body>

<div class="video-bg">
 <video width="320" height="240" autoplay loop muted>
  <source src="https://assets.codepen.io/3364143/7btrrd.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
</div>




<div class="blurred-box">
  <!--  you dont need the user-login-box html  -->
  <!--  for demo purposes only and its shit  -->
  <div class="user-login-box">
      <div class="user-name">LOGIN</div>

    <form action="login.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="login-form">
      <p>
        <input placeholder="Username" autofocus="true" class="login-username" name="username" type="text" required="required" id="username">
      </p>
      <p>
        <input placeholder="Password" autofocus="true" class="login-password" name="password" type="password" required="required" id="password">
      </p>
      <div class="button-box">
      <p>
        <input class="button-submit" type="submit" name="submit" id="submit" value="เข้าสู่ระบบ">
        <input class="button-reset" type="reset" name="reset" id="reset" value="ยกเลิก">
      </p>
      </div>
    </form>

  </div>
</div>



<div class="footer">
    <br>
    <p><b>เว็บไซต์นี้เป็นส่วนหนึ่งของวิชา INFO272 การเขียนโปรแกรมบนเว็บ</b></p>  
    <p>จัดทำโดย นายยุทธจักร อินทร์คง รหัสนักศึกษา 6615224018 คณะวิทยาศาสตร์ และเทคโนโลยี สาขาเทคโนโลยีสารสนเทศ (เทียบโอน)</p> 
    <br>
  </div>
  
</body>
</html>