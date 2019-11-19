<?php
	$n1 = $_POST["username"];
	$n2 = $_POST["password"];
	$q = "SELECT * FROM user WHERE username='$n1' AND password='$n2'";
	include "aksi_koneksi.php";
	$hsl = mysqli_query($koneksi,$q);
	if($r = mysqli_fetch_assoc($hsl)){
		session_start();
		$_SESSION["id_user"] = $r["id_user"];
		$_SESSION["nama"] = $r["nama"];
		header("location:index.php?=sukses");
	}
	else{
		echo "<script>alert('Username atau Password Salah!');history.go(-1);</script>"; }
?>
	