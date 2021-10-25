<?php
//koneksi
session_start();
include("koneksi.php");


if($id_level = $_POST['id_level']) {
	$level_akhir = $_POST['level'];
	$id_tanaman = $_POST['id_tanaman'];
	$b=$koneksi->query("select * from water_level inner join set_poin on water_level.id_tanaman = set_poin.id_tanaman  where water_level.id = '".$id_level."' and water_level.id_tanaman = set_poin.id_tanaman limit 1");
	while ($row2 = $b->fetch_array()){
	$level_awal  = $row2[3];
	}
		if($level_akhir > $level_awal){
		$persen_up = (($level_akhir-$level_awal)/$level_akhir)*100;
		$level_naik = 'level air dinaikkan ';
		$sql2 =$koneksi->query("update water_level set water_level='".$level_akhir."', level_before='".$level_awal."',action='".$level_naik."',nilai ='".$persen_up."',waktu_perbaikan=CURRENT_TIMESTAMP() where id='".$id_level."'");
		$ins = $koneksi->query("insert into user_action (id_tanaman,action,jumlah,waktu) values ('".$id_tanaman."','".$level_naik."','".$persen_up."',CURRENT_TIMESTAMP())");
		echo "<script>alert('Ketinggian air pada tanaman berhasil dinaikkan ".$persen_up."%') </script>";
		echo "<script>window.location.href = \"index.php?tanaman=".$id_tanaman."\" </script>";
	} else if($level_akhir < $level_awal) {
		$persen_down = (($level_awal-$level_akhir)/$level_awal)*100;
		$level_turun = 'level air diturunkan';
		$sql2 =$koneksi->query("update water_level set water_level='".$level_akhir."', level_before='".$level_awal."',action='".$level_turun."',nilai ='".$persen_down."',waktu_perbaikan=CURRENT_TIMESTAMP() where id='".$id_level."'");
		$ins = $koneksi->query("insert into user_action (id_tanaman,action,jumlah,waktu) values ('".$id_tanaman."','".$level_turun."','".$persen_down."',CURRENT_TIMESTAMP())");
		echo "<script>alert('Ketinggian air pada tanaman berhasil diturunkan ".$persen_down."%') </script>";
		echo "<script>window.location.href = \"index.php?tanaman=".$id_tanaman."\" </script>";
	} else {
		echo "<script>alert('kelembapan ruangan pada tanaman telah sesuai) </script>";
		echo "<script>window.location.href = \"index.php?tanaman=".$id_tanaman."\" </script>";
	}
}

?>