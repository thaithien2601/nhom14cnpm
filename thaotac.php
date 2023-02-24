<?php
	include("config.php");
	if(isset($_GET['xtv'])){
		$tendangnhap_user = $_GET["tendangnhap_user"];
		$query = "delete from muave where tendangnhap_user='$tendangnhap_user'";
		if (mysqli_query($connect, $query)==true) {
			header("location:quanlythanhvien.php");
		}
		else{
			echo "error";
		}
	}
	if(isset($_GET['xvxp'])){
		$vxp = $_GET["vxp"];
		$query = "delete from muave where id_banve='$vxp'";
		if (mysqli_query($connect, $query)==true) {
			header("location:quanlythanhvien.php");
		}
		else{
			echo "error";
		}
	}
?>
