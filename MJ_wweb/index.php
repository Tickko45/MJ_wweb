<?php require("Connect.php"); ?>
<?php require("login_success.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/web.css">
    <title>หน้าแรก</title>
</head>
<body>

<div class="video-bg">
 <video width="320" height="240" autoplay loop muted>
  <source src="https://assets.codepen.io/3364143/7btrrd.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
</div>

<div class="app">
 <div class="header">
  <div class="header-profile">
   <form action="logout.php" method="post" class="button-logout"> 
      <input class="content-button status-button open" type="submit" value="ออกจากระบบ"> 
    </form>

  </div>
 </div>
 <div class="wrapper">
  <div class="left-side">
   <div class="side-wrapper">
    <div class="side-title"><h1>MENU</h1></div>

    <div class="side-menu">
    <a href="index.php">
        หน้าแรก
     </a>   

     <a href="Add_data.php">
        จัดการข้อมูล
     </a>

     <a href="Search_data.php">
      ค้นหาข้อมูล
     </a>
    </div>
   </div>
 
 
  </div>
  <div class="main-container">
   <div class="main-header">
    <div class="header-menu">

    </div>
   </div>
   <div class="content-wrapper">
    <div class="content-wrapper-header">
     <div class="content-wrapper-context">
      <h1>
      ยินดีต้อนรับสู่ระบบ CRUD
      </h1>
      <div class="content-text">
      <p>ผู้ใช้งาน : <?php echo $_SESSION['fullname']; ?></p> 
     </div>
	</p>
    </div>

    <div class="content-section">
        <ul>
                <table>
                  <td>
                    <th>
                    <br>
                    <p>คุณสามารถจัดการข้อมูลต่างๆ ทาง MENU ทางด้านซ้ายได้เลย</p>
                    <br>
                    <br>
                    <p><b>เว็บไซต์นี้เป็นส่วนหนึ่งของวิชา INFO272 การเขียนโปรแกรมบนเว็บ</b></p> 
                    <br>
                    <p>จัดทำโดย</p> 
                    <p>จัดทำโดย นายยุทธจักร อินทร์คง รหัสนักศึกษา 6615224018</p> 
                    <p>คณะวิทยาศาสตร์ และเทคโนโลยี สาขาเทคโนโลยีสารสนเทศ (เทียบโอน)</p> 
                    <br>
                    </th>
                  </td>
                </table>
        </ul>
   </div>

 <div class="footer">
    <br>
    <p><b>เว็บไซต์นี้เป็นส่วนหนึ่งของวิชา INFO272 การเขียนโปรแกรมบนเว็บ</b></p> <p>จัดทำโดย นายยุทธจักร อินทร์คง รหัสนักศึกษา 6615224018 คณะวิทยาศาสตร์ และเทคโนโลยี สาขาเทคโนโลยีสารสนเทศ (เทียบโอน)</p> 
    <br>
  </div>

  
</body>
</html>
<?php $conn->close();?>