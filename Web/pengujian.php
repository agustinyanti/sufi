<?php
  session_start();
  if(!isset($_SESSION['nama'])){
    echo "<script>alert('Anda harus masuk terlebih dahulu')</script>";
    ?>
            <head>
 			    <meta http-equiv='refresh' content='0;url=index.php' />
 			</head>

    <?php }
 ?>


<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>SUFI | PENGUJIAN</title>
	<link rel="icon" type="image/png" href="images/ikan.png">
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>

<body>
<div id="main_container">
<div class="header">
<div id="logo"><a href="index.php"><img src="images/oo.png" alt="" title="" border="0" height="74" width="150" /></a></div>
<div class="right_header">
<div class="top_menu">

<a href="#" class="logout" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">keluar</a></div>

<div id="id03" class="modal">
  
  <form class="modal-content animate" action="logout.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="tutup">&times;</span>
      <img src="images/login.png" alt="Avatar" class="avatar">
    </div>

    <div class="container1">
       
      <p><center>Anda yakin ingin logout?</center></p>
      <form method="post" action="logout.php">
        <button type="submit" style="background-color:#00b5e4">Ya</button>
    </form>
    </div>
    
  </form>
</div>
<div id="menu">
<ul>
<li><a href="index.php" title="">Beranda</a></li>
<li><a href="aboutus.php" title="">Tentang Web</a></li>
<li><a class="current" href="#" title="">Pengujian</a></li>
<li><a href="kontak.php" title="">Kontak Kami</a></li>
</ul>
</div>
</div>
</div>
<div id="main_content2">
<div class="box_content">
<div class="box_title">
<div class="title_icon"><img src="images/mini_icon1.gif" alt="" title="" /></div>
<h2><span class="dark_blue">Laporan</span></h2>
</div>
<div class="box_text_content"> <img src="images/checked.gif" alt="" title="" class="box_icon" />
<div class="box_text"> Cetak hasil laporan hanya dengan mengunduh file yang telah tersedia.  </div>
<a href="laporan.php" class="details">+ lihat laporan</a> </div>
</div>
<div class="box_content">
<div class="box_title">
<div class="title_icon"><img src="images/mini_icon2.gif" alt="" title="" /></div>
<h2><span class="dark_blue"> Pengujian</span></h2>
</div>
<div class="box_text_content"> <img src="images/checked.gif" alt="" title="" class="box_icon" />
<div class="box_text"> Melihat hasil uji formalin hanya dengan menekan tombol pengujian. </div>
<a href="#" class="details" onclick="document.getElementById('id04').style.display='block'" style="width:auto;">+ uji formalin</a>

<div id="id04" class="modal">
  <form class="modal-content animate" action="simpanikan.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="tutup">&times;</span>
      <img src="images/ikan.png" alt="Avatar" class="avatar">
    </div>

    <div class="containerikan">
      <label for="ikan"><b>Nama Ikan</b></label><br>
      <input type="text" placeholder="Contoh:Bandeng,Mujaer" name="ikan" required style="width: 370px"><br>
      <label><b>Frekuensi Warna Merah</b></label><br>
      <input type="text" id="random1" name="merah" value="" required style="width: 370px"><br>
      <label><b>Frekuensi Warna Hijau</b></label><br>
      <input type="text" id="random2" name="hijau" value="" required style="width: 370px"><br>
      <label><b>Frekuensi Warna Biru</b></label><br>
      <input type="text" id="random3" name="biru" value="" required style="width: 370px"><br>
      <button type="button" onclick="myFunction()">Generate</button>
      <script>
          function myFunction(){
            document.getElementById("random1").value = Math.floor(Math.random() * 13195 ) + 6032 ;
            document.getElementById("random2").value = Math.floor(Math.random() * 2907 ) + 0 ;
            document.getElementById("random3").value = Math.floor(Math.random() * 7400 ) + 0 ;
          }
      </script>
      <button type="submit" style="background-color:#00b5e4">Submit</button>
    </div>
    </div>
  </form>
</div>
</div>

<div class="box_content">
<div class="box_title">
<div class="title_icon"><img src="images/mini_icon4.gif" alt="" title="" /></div>
<h2><span class="dark_blue">Grafik</span></h2>
</div>
<div class="box_text_content"> <img src="images/checked.gif" alt="" title="" class="box_icon" />
<div class="box_text"> Hasil dari pengujian sebelumnya akan ditampilkan dengan gambaran berupa grafik. </div>
<a href="grafik.php" class="details">+ lihat grafik</a> </div>
</div>
<div class="clear"></div>
</div>
<script type="text/javascript" src="javascript.js"></script>


<div id="footer">
	<div class="copyright"> <img src="images/logo-awal.png" alt="logo" title="" border="0" height="20" width="60" /></div>
		<div class="center_footer">© SUFI Indonesia 2019. All Rights Reserved</div>
</div>
</body></html>