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
<?php
  session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Tampilkan Grafik</title>
	<link rel="icon" type="image/png" href="images/ikan.png">
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	<script type="text/javascript" src="pustaka_FC/js/fusioncharts.js"></script>
	<script type="text/javascript" src="pustaka_FC/js/themes/fusioncharts.theme.zune.js"></script>

	<script type="text/javascript">
		FusionCharts.ready(function(){
			var G = new FusionCharts(
					{
						"type":"bar2d",
						"renderAt":"lokasiA",
						"width":"800",
						"height":"500",
						"dataFormat":"jsonurl",
						"dataSource":"getDB.php"
					}
				)
			G.render();
			}
		)
	</script>
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
<li><a class="current" href="pengujian.php" title="">Pengujian</a></li>
<li><a href="kontak.php" title="">Kontak Kami</a></li>
</ul>
</div>
</div>
</div>
		<div id="lokasiA"></div>
<div id="footer">
	<div class="copyright"> <img src="images/logo-awal.png" alt="logo" title="" border="0" height="20" width="60" /></div>
		<div class="center_footer">© SUFI Indonesia 2019. All Rights Reserved</div>
</div>
</body>
</html>