<?php
  session_start();
$nama = $_SESSION["nama"];
$id_user = $_SESSION["id_user"];
		$c = array(
			"caption"=>"Grafik Konsentrasi Formalin",
								"subCaption"=>"User : $nama",
								"xAxisName"=>"id_ikan",
								"yAxisName"=>"konsentrasi(%)",
								"theme"=>"fusion"
			);

		$d = array();

		$koneksi = mysqli_connect("localhost","id10591173_sufi","sufi123456","id10591173_db_sufi");

		$q = "SELECT * FROM pengujian WHERE `id_user`= $id_user";
		$hq = mysqli_query($koneksi,$q);
		while($rc = mysqli_fetch_assoc($hq)){
			array_push($d,array("label"=>$rc["nama_ikan"],"value"=>$rc["konsentrasi"]));
		}

		$gab = array("chart"=>$c,"data"=>$d);
		echo $jsonnya = json_encode($gab);

?>