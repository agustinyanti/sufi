<?php
session_start();
  $_SESSION['id_user']
?>

<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>SUFI | BERANDA</title>
	<link rel="icon" type="image/png" href="images/ikan.png">
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	<script type="text/javascript" src="javascript.js"></script>
</head>

<body>
<div id="main_container">
<div class="header">
<div id="logo"><a href="index.php"><img src="images/oo.png" alt="" title="" border="0" height="74" width="150" /></a></div>
<div class="right_header">


<div class="top_menu"> <?php
  session_start();
  if(!isset($_SESSION['id_user'])){
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
<li><a class="current" href="#" title="">Beranda</a></li>
<li><a href="aboutus.php" title="">Tentang Web</a></li>
<li><a href="pengujian.php" title="">Pengujian</a></li>
<li><a href="kontak.php" title="">Kontak Kami</a></li>
</ul>
</div>
</div>
</div>
<div class="jelas">UJI FORMALIN PADA IKAN
<div class="jelas1">Ketahui Kadar Formalin Pada Ikan Untuk Hidup Lebih Sehat</div></div>

<div class="container">
        <div class="slide fade">
          <img src="img/31.jpg" width="100%" height="110%">
        </div>
        <div class="slide fade">
          <img src="img/21.jpg" width="100%" height="110%">
        </div>
        <div class="slide fade">
          <img src="img/11.jpg" width="100%" height="110%">
        </div>
        <div style="text-align: center;">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <div class="clear"></div>
      </div>
      <script type="text/javascript" src="javascript.js"></script>



<div id="footer">
  <div class="copyright"> <img src="images/logo-awal.png" alt="logo" title="" border="0" height="20" width="60" /></div>
    <div class="center_footer">© SUFI Indonesia 2019. All Rights Reserved</div>
</div>
</body></html>
<div class="container">
        <div class="slide fade">
          <img src="img/31.jpg" width="100%" height="100%">
        </div>
        <div class="slide fade">
          <img src="img/21.jpg" width="100%" height="100%">
        </div>
        <div class="slide fade">
          <img src="img/11.jpg" width="100%" height="100%">
        </div>
        <div style="text-align: center;">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <div class="clear"></div>
      </div>
      <script type="text/javascript" src="javascript.js"></script>

<div id="footer">
	<div class="copyright"> <img src="images/logo-awal.png" alt="logo" title="" border="0" height="20" width="60" /></div>
		<div class="center_footer">© SUFI Indonesia 2019. All Rights Reserved</div>
</div>
</body></html>