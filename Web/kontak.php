<?php
session_start();
  $_SESSION['id_user']
?>

<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>SUFI | KONTAK KAMI</title>
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
<li><a href="index.php" title="">Beranda</a></li>
<li><a href="aboutus.php" title="">Tentang Web</a></li>
<li><a href="pengujian.php" title="">Pengujian</a></li>
<li><a class="current" href="#" title="">Kontak Kami</a></li>
</ul>
</div>
</div>
</div>

<div class="judul">Kelompok 4 TEK B2</div>
<div id="main_content2">
<div class="closed"></div>
<div class="box_content">
<div class="box_title">
<div class="title_icon">
	<a href="#popup" class="popup-link"><img src="images/2.png" alt="" title="" height="195" width="200" /></a>
	</div>
<h2><span class="dark_blue">Fuad Hasyim</span></h2>
</div>
<div class="box_text_content"> <img src="images/checked.gif" alt="" title="" class="box_icon" />
			<div class="box_text"> Programmer  </div>
<div class="popup-wrapper" id="popup">
	<div class="popup-container">
			<h3>FUAD HASYIM</h3><br>
			<p>Fuad Hasyim dengan NIM <b>J3D217199</b> adalah seorang mahasiswa Sekolah Vokasi IPB Program Studi Teknik Komputer angkatan 54</p>
			<p>
				Email : fuadhas12@gmail.com
			<p>
			<a class="popup-close" href="#closed">X</a>
	</div>
</div>
</div>
</div>

<div class="box_content">
<div class="box_title">
<div class="title_icon">
	<a href="#popup2" class="popup-link"><img src="images/1.png" alt="" title="" height="200" width="200" /></a>
	</div>
<h2><span class="dark_blue">Agustin Dwiyanti</span></h2>
</div>
<div class="box_text_content"> <img src="images/checked.gif" alt="" title="" class="box_icon" />
<div class="box_text"> Manager  </div>
<div class="popup-wrapper" id="popup2">
	<div class="popup-container">
			<h3>AGUSTIN DWIYANTI</h3><br>
			<p>Agustin Dwiyanti dengan NIM <b>J3D117047</b> adalah seorang mahasiswa Sekolah Vokasi IPB Program Studi Teknik Komputer angkatan 54</p>
			<p>
				Email : agustiinyanti@gmail.com
			<p>
			<a class="popup-close" href="#closed">X</a>
	</div>
</div>
</div>
</div>

<div class="box_content">
<div class="box_title">
<div class="title_icon">
	<a href="#popup3" class="popup-link"><img src="images/4.png" alt="" title="" height="200" width="200" /></a>
	</div>
<h2><span class="dark_blue">Aoban Kaokab</span></h2>
</div>
<div class="box_text_content"> <img src="images/checked.gif" alt="" title="" class="box_icon" />
			<div class="box_text"> Analyst  </div>
<div class="popup-wrapper" id="popup3">
	<div class="popup-container">
			<h3>AOBAN KAOKAB</h3><br>
			<p>Aoban Kaokab dengan NIM <b>J3D117082</b> adalah seorang mahasiswa Sekolah Vokasi IPB Program Studi Teknik Komputer angkatan 54</p>
			<p>
				Email : aoban21@gmail.com
			<p>
			<a class="popup-close" href="#closed">X</a>
	</div>
</div>
</div>
</div>

<div class="clear"></div>
</div>

<div id="footer">
	<div class="copyright"> <img src="images/logo-awal.png" alt="logo" title="" border="0" height="20" width="60" /></div>
		<div class="center_footer">© SUFI Indonesia 2019. All Rights Reserved</div>
</div>
</body></html>