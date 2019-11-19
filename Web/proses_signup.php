<?php

include "aksi_koneksi.php";

	$b = $_POST["nama"];
	$c = $_POST["username"];
	$d = $_POST["password"];
    

    $q = "INSERT INTO `user`(`id_user`, `nama`, `username`, `password`) VALUES (NULL, '$b', '$c', '$d')";

    mysqli_query($koneksi, $q);

       echo "<br/>";
?>
			<head>
 			    <meta http-equiv='refresh' content='0;url=index.php?=daftarsukses' />
 			</head>
