<?php session_start(); ?>
<?php require("Connect.php"); ?>
<?php 
if(isset($_SESSION['username'])){ 
}else{
	header("Location: login_fail.php"); }
?>