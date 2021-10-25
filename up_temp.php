<?php
//koneksi
session_start();
include("koneksi.php");


if($id_temp = $_POST['id_temp']) {
	$temp_akhir = $_POST['temp'];
	$id_tanaman = $_POST['id_tanaman'];
	$b=$koneksi->query("select * from water_temperature inner join set_poin on water_temperature.id_tanaman = set_poin.id_tanaman where water_temperature.id = '".$id_temp."' and water_temperature.id_tanaman = set_poin.id_tanaman limit 1");
	while ($row2 = $b->fetch_array()){
	$temp_awal  = $row2[3];
	}
		if($temp_akhir > $temp_awal){
		$persen_up = (($temp_akhir-$temp_awal)/$temp_akhir)*100;
		$temp_naik = 'suhu air dinaikkan ';
		$sql2 =$koneksi->query("update water_temperature set temperature='".$temp_akhir."', temp_before='".$temp_awal."',action='".$temp_naik."', nilai ='".$persen_up."', waktu_perbaikan=CURRENT_TIMESTAMP() where id='".$id_temp."'");
		$ins = $koneksi->query("insert into user_action (id_tanaman,action,jumlah,waktu) values ('".$id_tanaman."','".$temp_naik."','".$persen_up."',CURRENT_TIMESTAMP())");
		echo "<script>alert('Suhu air pada tanaman berhasil dinaikkan ".$persen_up."%') </script>";
		echo "<script>window.location.href = \"index.php?tanaman=".$id_tanaman."\" </script>";
	} else if($temp_akhir < $temp_awal) {
		$persen_down = (($temp_awal-$temp_akhir)/$temp_awal)*100;
		$temp_turun = 'suhu air diturunkan';
		$sql2 =$koneksi->query("update water_temperature set temperature='".$temp_akhir."', temp_before='".$temp_awal."',action='".$temp_turun."', nilai ='".$persen_down."', waktu_perbaikan=CURRENT_TIMESTAMP() where id='".$id_temp."'");
		$ins = $koneksi->query("insert into user_action (id_tanaman,action,jumlah,waktu) values ('".$id_tanaman."','".$temp_turun."','".$persen_down."',CURRENT_TIMESTAMP())");
		echo "<script>alert('Suhu air pada tanaman berhasil diturunkan ".$persen_down."%') </script>";
		echo "<script>window.location.href = \"index.php?tanaman=".$id_tanaman."\" </script>";
	} else {
		echo "<script>alert('kelembapan ruangan pada tanaman telah sesuai) </script>";
		echo "<script>window.location.href = \"index.php?tanaman=".$id_tanaman."\" </script>";
	}
}

?>