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
$id_user = $_SESSION["id_user"]; ?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>SUFI | Lihat Laporan</title>
	<link rel="icon" type="image/png" href="images/ikan.png">
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="DataTables/Buttons-1.6.1/css/buttons.dataTables.min.css">

	<script type="text/javascript" src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="DataTables/Buttons-1.6.1/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="DataTables/JSZip-2.5.0/jszip.min.js"></script>
	<script type="text/javascript" src="DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="DataTables/Buttons-1.6.1/js/buttons.html5.min.js"></script>
	<script type="text/javascript">
		$('document').ready(function(){
			$('table').DataTable({
				searching : true,
				paging : true,
				ordering : true,
				info : true,
				dom: 'Bfrtip', //b button, i info, p paging
				buttons: [
				    'excelHtml5'
				]
			});
		});
	</script>
</head>
<body>
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
	<button style="width: 15%"><a href="pdfcoba.php" style="text-decoration: none; color: white;">PDF</a></button>
	<!--<button style="width: 15%"><a href="excelcoba.php" style="text-decoration: none; color: white;">Excel</a></button> --!>
	<table width="100%">
		<tbody>

		<?php
			$conn = mysqli_connect('localhost','id10591173_sufi','sufi123456','id10591173_db_sufi');
			$query = "SELECT * FROM pengujian WHERE `id_user`= $id_user";
			$result = mysqli_query($conn,$query);
			$no =1;
			while ($row = mysqli_fetch_assoc($result)){
		?>
		<tr>
			<td><?php echo $no ?></td>
			<td style="text-align: center;"><?php echo $row['id_uji']; ?></td>
			<td style="text-align: center;"><?php echo $row['nama_ikan']; ?></td>
			<td style="text-align: center;"><?php echo $row['nilai_R']; ?></td>
			<td style="text-align: center;"><?php echo $row['nilai_G']; ?></td>
			<td style="text-align: center;"><?php echo $row['nilai_B']; ?></td>
			<td style="text-align: center;"><?php echo $row['konsentrasi']; ?></td>
			<td style="text-align: center;"><?php echo $row['status']; ?></td>
		</tr>
		
		<?php $no++; } ?></tbody>
		<thead>
		<tr>
			<th>NO</th>
			<th>ID UJI</th>
			<th>NAMA IKAN</th>
			<th>NILAI R</th>
			<th>NILAI G</th>
			<th>NILAI B</th>
			<th>KONSENTRASI</th>
			<th>STATUS</th>
		</tr>
		</thead>
	</table>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<div id="footer">
	<div class="copyright"> <img src="images/logo-awal.png" alt="logo" title="" border="0" height="20" width="60" /></div>
<div class="center_footer">© SUFI Indonesia 2019. All Rights Reserved</div>
</div>
</body>
</html>