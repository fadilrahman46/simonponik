<?php
//koneksi
session_start();
include("koneksi.php");


if($id_humid = $_POST['id_humid']) {
	$humid_akhir = $_POST['humid'];
	$id_tanaman = $_POST['id_tanaman'];
	$b=$koneksi->query("select * from room_humidity inner join set_poin on room_humidity.id_tanaman = set_poin.id_tanaman where room_humidity.id = '".$id_humid."' room_humidity.id_tanaman = set_poin.id_tanaman limit 1");
	while ($row2 = $b->fetch_array()){
	$humid_awal  = $row2[3];
	}
		if($humid_akhir > $humid_awal){
		$persen_up = (($humid_akhir-$humid_awal)/$humid_akhir)*100;
		$humid_naik = 'kelembapan tanaman dinaikkan ';
		$sql2 =$koneksi->query("update room_humidity set humidity='".$humid_akhir."', humid_before='".$humid_awal."',action='".$humid_naik."',nilai ='".$persen_up."', waktu_perbaikan=CURRENT_TIMESTAMP() where id='".$id_humid."'");
		$ins = $koneksi->query("insert into user_action (id_tanaman,action,jumlah,waktu) values ('".$id_tanaman."','".$humid_naik."','".$persen_up."',CURRENT_TIMESTAMP())");
		echo "<script>alert('kelembapan ruangan pada tanaman berhasil dinaikkan ".$persen_up."%') </script>";
		echo "<script>window.location.href = \"index.php?tanaman=".$id_tanaman."\" </script>";
	} else if($humid_akhir < $humid_awal) {
		$persen_down = (($humid_awal-$humid_akhir)/$humid_awal)*100;
		$humid_turun = 'kelembapan tanaman diturunkan ';
		$sql2 =$koneksi->query("update room_humidity set humidity='".$humid_akhir."', humid_before='".$humid_awal."',action='".$humid_turun."', nilai ='".$persen_down."', waktu_perbaikan=CURRENT_TIMESTAMP() where id='".$id_humid."'");
		$ins = $koneksi->query("insert into user_action (id_tanaman,action,jumlah,waktu) values ('".$id_tanaman."','".$humid_turun."','".$persen_down."',CURRENT_TIMESTAMP())");
		echo "<script>alert('kelembapan ruangan pada tanaman berhasil diturunkan ".$persen_down."%') </script>";
		echo "<script>window.location.href = \"index.php?tanaman=".$id_tanaman."\" </script>";
	} else {
		echo "<script>alert('kelembapan ruangan pada tanaman telah sesuai) </script>";
		echo "<script>window.location.href = \"index.php?tanaman=".$id_tanaman."\" </script>";
	}
}

?>