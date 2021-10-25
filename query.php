
<?php 
include "koneksi.php";

	$sql = $koneksi->query("SELECT * FROM `ph` inner join set_poin on ph.id_tanaman = set_poin.id_tanaman where ph.id_tanaman = set_poin.id_tanaman order by waktu desc limit 1");
	while ($row1 =$sql->fetch_array()){ 
		$id_ph = $row1[0];					
		$ph = $row1[3];
		$waktu_cek1 = $row1[2];
		$waktu_perbaikan1 = $row1[6];
		}
	$sql2 = $koneksi->query("SELECT * FROM ppm inner join set_poin on ppm.id_tanaman = set_poin.id_tanaman where ppm.id_tanaman = set_poin.id_tanaman order by waktu desc limit 1");
	while ($row2=$sql2->fetch_array()){ 
		$id_ppm = $row2[0];					
		$ppm = $row2[3];					
		$waktu_cek2 = $row2[2];
		$waktu_perbaikan2 = $row2[6];
		}
	$sql3 = $koneksi->query("SELECT * FROM room_humidity inner join set_poin on room_humidity.id_tanaman = set_poin.id_tanaman where room_humidity.id_tanaman = set_poin.id_tanaman order by waktu desc limit 1");
	while ($row3 =$sql3->fetch_array()){ 
		$id_humid = $row3[0];					
		$humid = $row3[3];		
		$waktu_cek3 = $row3[2];
		$waktu_perbaikan3 = $row3[6];	
		}
	$sql4 = $koneksi->query("SELECT * FROM water_level inner join set_poin on water_level.id_tanaman = set_poin.id_tanaman where water_level.id_tanaman = set_poin.id_tanaman order by waktu desc limit 1");
	while ($row4 =$sql4->fetch_array()){ 
		$id_level = $row4[0];					
		$level = $row4[3];		
		$waktu_cek4 = $row4[2];
		$waktu_perbaikan4 = $row4[6];	
		}	
	$sql5 = $koneksi->query("SELECT * FROM water_temperature inner join set_poin on water_temperature.id_tanaman = set_poin.id_tanaman where water_temperature.id_tanaman = set_poin.id_tanaman order by waktu desc limit 1");
	while ($row5 =$sql5->fetch_array()){ 
		$id_temp = $row5[0];					
		$temp = $row5[3];		
	$waktu_cek5 = $row5[2];
		$waktu_perbaikan5 = $row5[6];	
		}

	$sql6 = $koneksi->query("SELECT * FROM set_poin");
	while ($row6 =$sql6->fetch_array()){
		$id_tanaman = $row6[0];
		$nama_tanaman = $row6[1];
		$ph_ideal = $row6[2];					
		$ppm_ideal = $row6[3];					
		$humid_ideal = $row6[4];
		$level_ideal = $row6[5];
		$temp_ideal = $row6[6];
		}


?>
