<?php require("Connect.php"); ?>
<?php require("login_success.php"); ?>

<?php
if(isset($_POST["fullname"])){
	$fullname= $_POST["fullname"];
	$address= $_POST["address"];
	$salary= $_POST["salary"];
	$birthday= $_POST["birthday"];
$sql = "INSERT INTO employees (fullname, address, salary, birthday)
VALUES ('$fullname', '$address', $salary, '$birthday')";
 	
$conn->query($sql);
			
}

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/web.css">
    <title>เพิ่มข้อมูล</title>
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
      จัดการข้อมูล
      </h1>
      <div class="content-text">
      <p>ผู้ใช้งาน : <?php echo $_SESSION['fullname']; ?></p> 
     </div>
    </div>

    <div class="content-section">
        <ul>
            <center>
                <table>
                    <br>
                <H1>เพิ่มข้อมูล</H1>

<form id="form1" name="form1" method="post" >
<br>

<div class="form-group">
    <span>ชื่อ-นามสกุล</span>
    <input name="fullname" type="text" required="required" id="fullname"  placeholder="ชื่อ-นามสกุล" class="form-field">
</div>
<br>

<div class="form-group">
    <span>ที่อยู่</span>
    <textarea name="address" rows="5" id="address" placeholder="ที่อยู่" class="form-field"></textarea>
</div>
<br>

<div class="form-group">
    <span>เงินเดือน</span>
    <input name="salary" type="number" required="required" id="salary" placeholder="เงินเดือน" class="form-field">
</div>
<br>

<div class="form-group">
    <span>วันเกิด</span>
    <input name="birthday" type="date" required="required" id="birthday" placeholder="วันเเกิด" class="form-field">
</div>
<br>

<br>
  <p>
    <input type="submit" name="submit" id="submit" value="เพิ่มข้อมูล" class="button-search">
    <input type="reset" name="reset" id="reset" value="ยกเลิก" class="button-search-cancel">
  </p>
</form>
                </table></center>
        </ul>
   </div>
   
	<p><?php if ($result->num_rows > 0) { ?></p>
        <div class="content-section">
     <div class="content-section-title"></div>
     <ul>
      <li>
	<table class="table-show">
  <tbody>
    <tdh>
        <th>ชื่อ</th> 
        <th>ที่อยู่</th>
        <th>เงินเดือน</th>
        <th>วันเกิด</th>
    </tdh>
	  <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
	  <td><?php echo $row["fullname"]; ?> </td> 
	  <td><?php echo $row["address"]; ?></td>
	  <td><?php echo $row["salary"]; ?></td>
	  <td><?php echo $row["birthday"]; ?></td>
	  <td>
        <form action="delete_data.php?id=<?php echo $row["id"]; ?>" method="post"> 
            <input class="button-reset" type="submit" value="ลบข้อมูล" onclick="return confirm('คูณต้องการลบข้อมูลนี้หรือไม่?');"> 
        </form>
      <td>
        <form action="Edit_data.php?id=<?php echo $row["id"]; ?>" method="post" > 
                <input class="button-submit" type="submit" value="แก้ไขข้อมูล"> 
        </form>
    </tr>

    
    <?php }?>
  </tbody>
</table>
      </li>
     </ul>
    </div>
    
   </div>
  </div>
 </div>

 <?php }else{ ?>
    
    <div class="content-section">
        <ul>
                <table>
                    <th>ไม่พบข้อมูล</th>
                </table>
        </ul>
   </div>

<?php } ?>

<div class="footer">
    <br>
    <p><b>เว็บไซต์นี้เป็นส่วนหนึ่งของวิชา INFO272 การเขียนโปรแกรมบนเว็บ</b></p> <p>จัดทำโดย นายยุทธจักร อินทร์คง รหัสนักศึกษา 6615224018 คณะวิทยาศาสตร์ และเทคโนโลยี สาขาเทคโนโลยีสารสนเทศ (เทียบโอน)</p> 
    <br>
  </div>

  
</body>
</html>
<?php $conn->close();?>