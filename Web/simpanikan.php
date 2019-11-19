<?php

    session_start();
    $x = $_SESSION["id_user"];

include "aksi_koneksi.php";

	$a = $_POST["ikan"];
	$b = $_POST["merah"];
	$c = $_POST["hijau"];
	$d = $_POST["biru"];
    
    

    $q = "INSERT INTO `ikan`(`id_ikan`, `nama_ikan`, `frekuensi_warna_merah`, `frekuensi_warna_hijau`, `frekuensi_warna_biru`) 
    		VALUES 
    		(NULL, '$a' , '$b',  '$c', '$d')";

    mysqli_query($koneksi, $q);

    echo "<script>alert('Ikan tersimpan')</script>";
    $user = $x;
    $ikan = 0; //masih masalah
    $nama_ikan = $a;
    $merah = $b / 75.4;
    $hijau = $c / 85.5;
    $biru = $d / 92.5;
    $kon = ($merah + $hijau + $biru) / 255;

    if ($kon <= 0.005){
        	$banding = 'aman';}
    elseif ($kon > 0.005 and $kon <= 1) 
    		$banding = 'iritasi mata';
    elseif ($kon > 1)
    		$banding = 'bahaya';

    $status = $banding;
   

    $r = "INSERT INTO `pengujian`(`id_uji`, `id_user`, `id_ikan`, `nama_ikan`, `nilai_R`, `nilai_G`, `nilai_B`, `konsentrasi`, `status`) VALUES
    		(NULL, '$user' , '$ikan', '$nama_ikan', '$merah', '$hijau', '$biru',  '$kon', '$status')";

    		mysqli_query($koneksi, $r);

?>
<head>
 			    <meta http-equiv='refresh' content='0;url=pengujian.php' />
 			</head>
            
