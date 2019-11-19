<?php
session_start();
  $_SESSION['id_user']
?>

<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>SUFI | TENTANG WEB</title>
	<link rel="icon" type="image/png" href="images/ikan.png">
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>

<body>
<div id="main_container">
<div class="header">
<div id="logo"><a href="index.php"><img src="images/oo.png" alt="" title="" border="0" height="74" width="150" /></a></div>
<div class="right_header">
  
  <div class="top_menu"> <?php
  session_start();
  if(!isset($_SESSION['nama'])){
    ?> <a href="#" class="login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">masuk</a>

<div id="id01" class="modal">
  <form class="modal-content animate" action="verifikasi.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="tutup">&times;</span>
      <img src="images/login.png" alt="Avatar" class="avatar">
    </div>

    <div class="container1">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Contoh:Aoban" name="username" required>

    <div class="container">
      <label for="password"><b>Password</b></label>
      <input type="password" name="password" required>

        
      <button type="submit">Login</button>
    </div>
  </form>
</div>
</form>
</div>



    <a href="#" class="sign_up" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">daftar</a> 

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="proses_signup.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="tutup">&times;</span>
      <img src="images/signup.png" alt="Avatar" class="avatar">
    </div>

    <div class="container1">
      <label for="nama"><b>Nama Lengkap</b></label>
      <input type="text" placeholder="Contoh:Aoban Kaokab" name="nama" required>

    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Contoh:Aoban" name="username" required>

    <div class="container">
      <label for="password"><b>Password</b></label>
      <input type="password" name="password" required>

      <div class="container">
      <label for="rptpass"><b>Repeat Password</b></label>
      <input type="password" name="rptpass">
        
      <button type="submit" style="background-color:#00b5e4">Sign Up</button>
   </div>
</div>
    </div>
    </div>
  </form>
</div>
<?php
     }

     else {
      ?>
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
    
  <?php
     }
?>
    
  </form>
</div>
<div id="menu">
<ul>
<li><a href="index.php" title="">Beranda</a></li>
<li><a class="current" href="#" title="">Tentang Web</a></li>
<li><a href="pengujian.php" title="">Pengujian</a></li>
<li><a href="kontak.php" title="">Kontak Kami</a></li>
</ul>
</div>
</div>
</div>
<p class="tulisan">Alasan Dibuatnya SUFI</p>
<div id="main_content1">
<div class="box_content">
<div class="box_title">
<div class="title_icon"><img src="images/animal.png" width="150pt"></div>
<h2><span class="dark_blue">Kebutuhan Pasar</span></h2>
</div>
<div class="box_text_content"> <img src="images/checked.gif" alt="" title="" class="box_icon" />
<div class="box_text"> Karena banyaknya permintaan pasar terhadap ikan, beberapa pihak yang tidak bertanggung jawab menjual ikan berformalin. </div>
</div>
</div>


<div class="box_content">
<div class="box_title">
<div class="title_icon"><img src="images/formalin.png" width="126pt"></div>
<h2><span class="dark_blue"> Bahaya Formalin </span></h2>
</div>
<div class="box_text_content"> <img src="images/checked.gif" alt="" title="" class="box_icon" />
<div class="box_text"> Formalin adalah zat yang tidak berbau dan tidak berwarna. Apabila dikonsumsi formalin dapat menimbulkan gangguan kesehatan.</div>
</div>
</div>


<div class="box_content">
<div class="box_title">
<div class="title_icon"><img src="images/color-512.png" width="30pt" /></div>
<h2><span class="dark_blue">Deteksi dengan Warna</span></h2>
</div>
<div class="box_text_content"> <img src="images/checked.gif" alt="" title="" class="box_icon" />
<div class="box_text"> Melihat hasil uji formalin hanya dengan menekan tombol pengujian. </div>
</div>
</div>

<div class="box_content">
<div class="box_title">
<div class="title_icon"><img src="images/time.PNG" width="30pt"></div>
<h2><span class="dark_blue">Hemat Waktu</span></h2>
</div>
<div class="box_text_content"> <img src="images/checked.gif" alt="" title="" class="box_icon" />
<div class="box_text"> Alat ini dapat menghemat waktu untuk pengecekan formalin pada ikan karena tidak adanya human error saat membaca warna. </div>
</div>
</div>

<div class="clear"></div>
</div>
<div class="pattern_bg" style="height: 198px; padding-top: 60;">
<p class="cara">Cara Penggunaan</p>
<div class="pattern_box">
<div class="pattern_box_icon"><img src="images/icon1.png" alt="" title="" height="112" width="70" /></div>
<div class="pattern_content">
<h1>Teteskan <span class="blue">Larutan FMR</span></h1>
<p class="pat">Teteskan larutan FMR ke sampel ikan yang akan diuji. Tunggu hingga sampel berubah warna menjadi warna merah sampai ungu.</p>
</div>
</div>
<div class="pattern_box">
<div class="pattern_box_icon"><img src="images/icon2.png" alt="" title="" height="112" width="70" /></div>
<div class="pattern_content">
<h1>Uji dengan <span class="blue"> SUFI</span></h1>
<p class="pat">Sampel ikan yang sudah ditetesi FMR diuji dengan alat SUFI. Alat diberi jarak 3-5 cm dari sampel ikan yang akan diuji. Hasil dari uji formalin dapat dilihat di webiste ini.</p>
</div>
</div>
</div>



<div id="footer">
	<div class="copyright"> <img src="images/logo-awal.png" alt="logo" title="" border="0" height="20" width="60" /></div>
		<div class="center_footer">© SUFI Indonesia 2019. All Rights Reserved</div>
</div>
</body></html>